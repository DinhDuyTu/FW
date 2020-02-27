<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'product_id',
        'image',
        'image_default'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
