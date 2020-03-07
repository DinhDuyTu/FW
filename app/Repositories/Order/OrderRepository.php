<?php

namespace App\Repositories\Order;

use App\Repositories\EloquentRepository;
use App\Models\Order;

class OrderRepository extends EloquentRepository implements OrderRepositoryInterface
{
    public function getModel()
    {
        return Order::class;
    }
}
