<?php

namespace App\Repositories;

use App\Models\ProductTransaction;
use App\Repositories\Contracts\OrderRepositoryInterface;
use Illuminate\Support\Facades\Session;

class OrderRepository implements OrderRepositoryInterface
{
    public function createTransaction(array $data)
    {
        return ProductTransaction::create($data);
    }

    public function findByTrxIdAndPhoneNumber($bookingTrxId, $phoneNumber)
    {
        return ProductTransaction::where('booking_trx_id', $bookingTrxId)
                                ->where('phone_number', $phoneNumber)
                                ->first(); // Return the first matching record or null if not found
    }

    public function saveToSession(array $data)
    {
        Session::put('orderData', $data);
    }


    public function getOrderDataFromSession()
    {
        return Session('orderData', []);
    }

    public function updateSessionData(array $data)
    {
        $orderData = Session('orderData', []);
        $orderData = array_merge($orderData, $data);
        Session(['orderData' => $orderData]);
    }
}
