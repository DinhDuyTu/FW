<?php

namespace App\Repositories\Image;

use App\Repositories\EloquentRepository;
use App\Models\Image;

class ImageRepository extends EloquentRepository implements ImageRepositoryInterface
{
    public function getModel()
    {
        return Image::class;
    }

    public function getFirstImageByProduct($product_id)
    {
        return Image::where('product_id', $product_id)->firstOrFail();
    }
}
