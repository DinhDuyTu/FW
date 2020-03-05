<?php

namespace App\Repositories\Size;

use App\Repositories\EloquentRepository;
use App\Models\Size;

class SizeRepository extends EloquentRepository implements SizeRepositoryInterface
{
    public function getModel()
    {
        return Size::class;
    }
}
