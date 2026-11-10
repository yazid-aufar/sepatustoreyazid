<?php

namespace Tests\Feature;

use App\Models\ProductTransaction;
use App\Models\Brand;
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

    private function makeOrder(Shoe $shoe): ProductTransaction
    {
        $shoe->price = 100000;
        $shoe->setRelation('brand', new Brand(['name' => 'Brand']));

        $order = new ProductTransaction(['quantity' => 1]);
        $order->created_at = now();
        $order->setRelation('shoe', $shoe);
        $order->setRelation('ShoeSize', new ShoeSize(['size' => '42']));

        return $order;
    }
}
