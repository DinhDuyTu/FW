<?php

namespace App\Repositories\Color;

use App\Repositories\EloquentRepository;
use App\Models\Color;

class ColorRepository extends EloquentRepository implements ColorRepositoryInterface
{
    public function getModel()
    {
        return Color::class;
    }
}
