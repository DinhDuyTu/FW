<?php

namespace App\Repositories\Image;

interface ImageRepositoryInterface
{
    public function getFirstImageByProduct($product_id);
}
