<?php

namespace App\Repositories\OrderDetail;

use App\Repositories\EloquentRepository;
use App\Models\OrderDetail;

class OrderDetailRepository extends EloquentRepository implements OrderDetailRepositoryInterface
{
    public function getModel()
    {
        return OrderDetail::class;
    }
}
