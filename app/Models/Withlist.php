<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Withlist extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
    ];
}
