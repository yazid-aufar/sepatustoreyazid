<?php

namespace Tests\Feature;

use App\Models\ProductTransaction;
use App\Models\Shoe;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class MyOrderDetailsProductTest extends TestCase
{
    public function test_order_details_displays_the_ordered_shoe(): void
    {
        Storage::fake('public');
        config(['filament.default_filesystem_disk' => 'public']);

        $shoe = new Shoe(['name' => 'Sepatu Pilihan', 'thumbnail' => 'shoes/pilihan.jpg']);
        $order = new ProductTransaction;
        $order->setRelation('shoe', $shoe);

        $this->view('order.my_order_details', ['orderDetails' => $order])
            ->assertSee('Sepatu Pilihan')
            ->assertSee('/shoes/pilihan.jpg')
            ->assertDontSee('NIKE-F34KBNIK5-NIKIO7448400');
    }

    public function test_order_details_displays_a_placeholder_when_the_shoe_is_missing(): void
    {
        $order = new ProductTransaction;
        $order->setRelation('shoe', null);

        $this->view('order.my_order_details', ['orderDetails' => $order])
            ->assertSee('Product unavailable')
            ->assertSee(asset('assets/img/logo/logo-short.png'));
    }
}
