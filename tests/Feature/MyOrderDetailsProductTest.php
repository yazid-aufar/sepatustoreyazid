<?php

namespace Tests\Feature;

use App\Models\ProductTransaction;
use App\Models\Brand;
use App\Models\PromoCode;
use App\Models\Shoe;
use App\Models\ShoeSize;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class MyOrderDetailsProductTest extends TestCase
{
    public function test_order_details_displays_the_ordered_shoe(): void
    {
        Storage::fake('public');
        config(['filament.default_filesystem_disk' => 'public']);

        $order = $this->makeOrder(new Shoe(['name' => 'Sepatu Pilihan', 'thumbnail' => 'shoes/pilihan.jpg']));

        $this->view('order.my_order_details', ['orderDetails' => $order])
            ->assertSee('Sepatu Pilihan')
            ->assertSee('/shoes/pilihan.jpg')
            ->assertSee('alt="Sepatu Pilihan"', false)
            ->assertDontSee('NIKE-F34KBNIK5-NIKIO7448400');
    }

    public function test_order_details_displays_a_placeholder_when_the_shoe_has_no_thumbnail(): void
    {
        $order = $this->makeOrder(new Shoe(['name' => 'Sepatu Tanpa Gambar']));

        $this->view('order.my_order_details', ['orderDetails' => $order])
            ->assertSee('Sepatu Tanpa Gambar')
            ->assertSee(asset('assets/img/logo/logo-short.png'));
    }

    public function test_payment_details_use_transaction_amounts_and_promo_code(): void
    {
        $order = $this->makeOrder(new Shoe(['name' => 'Sepatu Pilihan']));
        $order->sub_total_amount = 200000;
        $order->discount_amount = 30000;
        $order->grand_total_amount = 192000;
        $order->setRelation('promoCode', new PromoCode(['code' => 'PROMO30']));

        $this->view('order.my_order_details', ['orderDetails' => $order])
            ->assertSee('Rp. 200.000')
            ->assertSee('PROMO30')
            ->assertSee('- Rp. 30.000')
            ->assertSee('Rp. 22.000')
            ->assertSee('Rp. 0')
            ->assertSee('Rp. 192.000');
    }

    public function test_customer_information_uses_order_data(): void
    {
        $order = $this->makeOrder(new Shoe(['name' => 'Sepatu Pilihan']));
        $order->fill([
            'name' => 'Pelanggan Contoh',
            'phone' => '0811111111',
            'email' => 'pelanggan@example.test',
            'address' => 'Jalan Contoh 1',
            'city' => 'Bandung',
            'post_code' => '40123',
        ]);

        $this->view('order.my_order_details', ['orderDetails' => $order])
            ->assertSee('Pelanggan Contoh')
            ->assertSee('0811111111')
            ->assertSee('pelanggan@example.test')
            ->assertSee('Jalan Contoh 1, Bandung 40123');
    }

    public function test_paid_order_displays_only_success_status(): void
    {
        $order = $this->makeOrder(new Shoe(['name' => 'Sepatu Pilihan']));
        $order->is_paid = true;

        $this->view('order.my_order_details', ['orderDetails' => $order])
            ->assertSee('Success')
            ->assertDontSee('Pending');
    }

    public function test_unpaid_order_displays_only_pending_status(): void
    {
        $order = $this->makeOrder(new Shoe(['name' => 'Sepatu Pilihan']));
        $order->is_paid = false;

        $this->view('order.my_order_details', ['orderDetails' => $order])
            ->assertSee('Pending')
            ->assertDontSee('Success');
    }

    private function makeOrder(Shoe $shoe): ProductTransaction
    {
        $shoe->price = 100000;
        $shoe->setRelation('brand', new Brand(['name' => 'Brand']));

        $order = new ProductTransaction([
            'quantity' => 1,
            'sub_total_amount' => 100000,
            'discount_amount' => 0,
            'grand_total_amount' => 111000,
        ]);
        $order->created_at = now();
        $order->setRelation('shoe', $shoe);
        $order->setRelation('ShoeSize', new ShoeSize(['size' => '42']));
        $order->setRelation('promoCode', null);

        return $order;
    }
}
