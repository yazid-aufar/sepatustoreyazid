<?php

namespace App\Repositories\Contracts;

interface ShoeRepositoryInterface
{
    public function getAllPopularShoes($limit);

    public function getAllNewShoes();

    public function find($id);

    public function getPrice($ticketId);
}
