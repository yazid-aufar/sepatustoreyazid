<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontController::class, 'index'])->name('front.index');

Route::get('/browse/{category:slug}', [FrontController::class, 'category'])->name('front.category');

Route::get('/details/{shoe:slug}', [FrontController::class, 'details'])->name('front.details');

Route::post('/order/begin/{shoe:slug}', [OrderController::class, 'saveOrder'])->name('front.save_order');

Route::get('/order/booking/', [OrderController::class, 'booking'])->name('front.booking');

Route::get('/order/booking/costomer-data', [OrderController::class, 'costomerData'])->name('front.costomer_data');
Route::post('/order/booking/costomer-data/save', [OrderController::class, 'saveCostomerData'])->name('front.save_costomer_data');

Route::get('/order/payment', [OrderController::class, 'payment'])->name('front.payment');
Route::post('/order/payment/confirm', [OrderController::class, 'paymentConfirm'])->name('front.payment_confirm');

Route::get('/order/finished/{produtTransaction:id}', [OrderController::class, 'orderFinished'])->name('front.order_finished');
