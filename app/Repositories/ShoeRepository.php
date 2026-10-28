<?php

namespace App\Repositories;

use App\Models\Shoe;
use App\Repositories\Contracts\ShoeRepositoryInterface;

class ShoeRepository implements ShoeRepositoryInterface
{
    public function getPopularShoes($limit = 5)
    {
        return Shoe::with('brand')
            ->where('is_popular', true)
            ->take($limit)
            ->get();
    }

    public function searchByName(string $keyword)
    {
        return Shoe::where('name', 'LIKE', '%' . $keyword . '%')->get();
    }

    public function getAllNewShoes()
    {
        return Shoe::with('brand')
            ->latest('created_at')
            ->orderByDesc('id')
            ->take(10)
            ->get();
    }

    public function find($id)
    {
        return Shoe::find($id);
    }

    public function getPrice($shoeId)
    {
        $shoe = $this->find($shoeId);
        return $shoe ? $shoe->price : 0;
    }
}
