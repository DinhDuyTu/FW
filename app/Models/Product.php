<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'image',
        'product_code',
        'price',
        'price_sale',
        'quantity',
        'is_highlight',
        'detail',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_detail')->withTimestamps();
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_size')->withTimestamps();
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'color_product');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}
