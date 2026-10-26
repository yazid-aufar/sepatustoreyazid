<?php

namespace App\Services;

use App\Models\ProductTransaction;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Repositories\Contracts\OrderRepositoryInterface;
use App\Repositories\Contracts\PromoCodeRepositoryInterface;
use App\Repositories\Contracts\ShoeRepositoryInterface;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class OrderService
{
    private const TAX_RATE = 0.11;

    protected $orderRepository;
    protected $shoeRepository;
    protected $categoryRepository;
    protected $promoCodeRepository;

    public function __construct(
        PromoCodeRepositoryInterface $promoCodeRepository,
        CategoryRepositoryInterface $categoryRepository,
        OrderRepositoryInterface $orderRepository,
        ShoeRepositoryInterface $shoeRepository
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->promoCodeRepository = $promoCodeRepository;
        $this->orderRepository = $orderRepository;
        $this->shoeRepository = $shoeRepository;
    }

    public function beginOrder(array $data)
    {
        $orderData = [
            'shoe_size' => $data['shoe_size'],
            'size_id' => $data['size_id'],
            'shoe_id' => $data['shoe_id'],
            'quantity' => $data['quantity'] ?? 1,
            'promo_code' => null,
            'promo_code_id' => null,
            'discount_amount' => 0,
        ];

        // Pesanan baru mengganti seluruh data pesanan sebelumnya.
        $this->orderRepository->saveToSession($orderData);

        return $this->getOrderDetails();
    }

    public function getOrderDetails()
    {
        $orderData = $this->orderRepository->getOrderDataFromSession();

        if (empty($orderData['shoe_id'])) {
            throw new \RuntimeException('Data pesanan tidak tersedia.');
        }

        $shoe = $this->shoeRepository->find($orderData['shoe_id']);

        if (!$shoe) {
            throw new \RuntimeException('Sepatu tidak ditemukan.');
        }

        $quantity = filter_var(
            $orderData['quantity'] ?? 1,
            FILTER_VALIDATE_INT,
            ['options' => ['min_range' => 1]]
        );

        if ($quantity === false) {
            throw new \RuntimeException('Jumlah sepatu harus bilangan bulat minimal 1.');
        }

        // Harga selalu diambil dari database.
        $subTotalAmount = (int) $shoe->price * $quantity;
        $promo = null;

        if (!empty($orderData['promo_code'])) {
            $promo = $this->promoCodeRepository->findByCode($orderData['promo_code']);

            if (!$promo) {
                throw new \RuntimeException('Kode promo sudah tidak tersedia.');
            }
        }

        // Diskon minimal 0 dan maksimal sebesar subtotal.
        $discountAmount = $promo
            ? min($subTotalAmount, max(0, (int) $promo->discount_amount))
            : 0;

        // Mengikuti rumus awal: pajak dihitung dari subtotal sebelum diskon.
        $totalTax = (int) round($subTotalAmount * self::TAX_RATE);
        $grandTotalAmount = $subTotalAmount + $totalTax - $discountAmount;

        $orderData = array_merge($orderData, [
            'quantity' => $quantity,
            'sub_total_amount' => $subTotalAmount,
            'total_tax' => $totalTax,
            'discount_amount' => $discountAmount,
            'grand_total_amount' => $grandTotalAmount,
            'promo_code' => $promo ? $promo->code : null,
            'promo_code_id' => $promo ? $promo->id : null,
        ]);

        // Hasil perhitungan disimpan agar tersedia saat pembayaran.
        $this->orderRepository->updateSessionData($orderData);

        return compact('orderData', 'shoe');
    }

    public function applyPromoCode(string $code)
    {
        $code = trim($code);

        if ($code !== '' && !$this->promoCodeRepository->findByCode($code)) {
            return ['error' => 'Kode promo tidak ditemukan.'];
        }

        // Kode kosong menghapus promo yang sebelumnya dipakai.
        $this->orderRepository->updateSessionData([
            'promo_code' => $code !== '' ? $code : null,
        ]);

        $orderData = $this->getOrderDetails()['orderData'];

        return [
            'discount_amount' => $orderData['discount_amount'],
            'grand_total_amount' => $orderData['grand_total_amount'],
            'total_tax' => $orderData['total_tax'],
            'promo_code_id' => $orderData['promo_code_id'],
        ];
    }

    public function saveBookingTransaction(array $data)
    {
        // Gabungkan perubahan dengan data sepatu yang sudah ada.
        $this->orderRepository->updateSessionData($data);

        return $this->getOrderDetails();
    }

    public function updateCustomerData(array $data)
    {
        $this->orderRepository->updateSessionData($data);
    }

    public function paymentConfirm(array $validated)
    {
        $proofPath = null;

        try {
            // Hitung ulang sebelum disimpan sebagai transaksi.
            $orderData = $this->getOrderDetails()['orderData'];

            foreach (['name', 'email', 'phone', 'address', 'post_code', 'city', 'size_id'] as $field) {
                if (!isset($orderData[$field]) || $orderData[$field] === '') {
                    throw new \RuntimeException('Data pelanggan atau ukuran sepatu belum lengkap.');
                }
            }

            if (!(($validated['proof'] ?? null) instanceof UploadedFile)) {
                throw new \RuntimeException('Bukti pembayaran wajib diunggah.');
            }

            $proofPath = $validated['proof']->store('proofs', 'public');

            if (!$proofPath) {
                throw new \RuntimeException('Bukti pembayaran gagal disimpan.');
            }

            return DB::transaction(function () use ($orderData, $proofPath) {
                $transaction = $this->orderRepository->createTransaction([
                    'name' => $orderData['name'],
                    'email' => $orderData['email'],
                    'phone' => $orderData['phone'],
                    'address' => $orderData['address'],
                    'post_code' => $orderData['post_code'],
                    'city' => $orderData['city'],
                    'quantity' => $orderData['quantity'],
                    'sub_total_amount' => $orderData['sub_total_amount'],
                    'grand_total_amount' => $orderData['grand_total_amount'],
                    'discount_amount' => $orderData['discount_amount'],
                    'promo_code_id' => $orderData['promo_code_id'],
                    'shoe_id' => $orderData['shoe_id'],
                    'shoe_size' => $orderData['size_id'],
                    'is_paid' => false,
                    'booking_trx_id' => ProductTransaction::generateUniqueTrxId(),
                    'proof' => $proofPath,
                ]);

                return $transaction->id;
            });
        } catch (\Throwable $e) {
            // Transaksi database tidak otomatis menghapus file unggahan.
            if ($proofPath) {
                Storage::disk('public')->delete($proofPath);
            }

            Log::error('Error in payment confirmation: ' . $e->getMessage());
            session()->flash('error', 'Pesanan gagal disimpan. Periksa data dan coba kembali.');

            return null;
        }
    }
}
