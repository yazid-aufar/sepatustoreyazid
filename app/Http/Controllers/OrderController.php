<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\StoreCustomerDataRequest;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\StoreCheckBookingRequest;

use App\Services\OrderService;
use App\Models\Shoe;
use App\Models\ProductTransaction;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function saveOrder(StoreOrderRequest $request, Shoe $shoe)
    {
        $validated = $request->validated();

        $size = $shoe->sizes()->findOrFail($validated['size_id']);

        $validated['shoe_id'] = $shoe->id;
        $validated['shoe_size'] = $size->size;

        $this->orderService->beginOrder($validated);

        return redirect()->route('front.booking');
    }

    public function booking()
    {
        $data = $this->orderService->getOrderDetails();
        // dd($data);
        return view('order.order', $data);
    }

    public function customerData()
    {
        $data = $this->orderService->getOrderDetails();

        return view('order.customer_data', [
            'data' => $data,
        ]);
    }

    public function saveCustomerData(StoreCustomerDataRequest $request)
    {
        $validated = $request->validated();

        $this->orderService->updateCustomerData($validated);

        return redirect()->route('front.payment');
    }

    public function payment()
    {
        $data = $this->orderService->getOrderDetails();

        return view('order.payment', ['data' => $data]);
    }

    public function paymentConfirm(StorePaymentRequest $request)
    {
        $validated = $request->validated();

        $productTransactionId = $this->orderService->paymentConfirm($validated);

        if ($productTransactionId) {
            return redirect()->route('front.order_finished', $productTransactionId);
        }

        return redirect()->route('front.index')->withErrors(['error' => 'Payment confirmation failed. Please try again.']);
    }

    public function orderFinished(ProductTransaction $productTransaction)
    {
        $productTransaction->load([
            'shoe' => fn ($query) => $query->withTrashed(),
            'shoe.brand' => fn ($query) => $query->withTrashed(),
            'promoCode' => fn ($query) => $query->withTrashed(),
        ]);

        $shoe = $productTransaction->shoe;
        $shoeSize = $shoe?->sizes()
            ->withTrashed()
            ->whereKey($productTransaction->shoe_size)
            ->value('size');

        $thumbnailUrl = null;

        if ($shoe && filled($shoe->thumbnail)) {
            $storageDisk = Storage::disk(config('filament.default_filesystem_disk'));
            $thumbnailUrl = $storageDisk->providesTemporaryUrls()
                ? $storageDisk->temporaryUrl($shoe->thumbnail, now()->addHour())
                : $storageDisk->url($shoe->thumbnail);
        }

        // Gunakan harga saat transaksi, bukan harga katalog yang dapat berubah.
        $unitPrice = $productTransaction->quantity > 0
            ? $productTransaction->sub_total_amount / $productTransaction->quantity
            : 0;

        // Pajak belum memiliki kolom sendiri; ongkir saat ini gratis.
        $totalTax = $productTransaction->grand_total_amount
            + $productTransaction->discount_amount
            - $productTransaction->sub_total_amount;

        return view('order.order_finished', compact(
            'productTransaction', 'shoe', 'shoeSize', 'thumbnailUrl', 'unitPrice', 'totalTax'
        ));
    }

    public function checkBooking()
        {
            return view('order.my_order');
        }

        public function checkBookingDetails(StoreCheckBookingRequest $request)
        {
            $validated = $request->validated();

            $orderDetails = $this->orderService->getMyOrderDetails($validated);

            if ($orderDetails) {
                return view('order.my_order_details', compact('orderDetails'));
            } else {
                return redirect()->route('front.check_booking')->withErrors(['error' => 'Transaction not found']);
            }
        }


    }
