<?php

namespace App\Repositories\Wishlist;

use App\Repositories\EloquentRepository;
use App\Models\Withlist;

class WishlistRepository extends EloquentRepository implements WishlistRepositoryInterface
{
    public function getModel()
    {
        return Withlist::class;
    }
}
