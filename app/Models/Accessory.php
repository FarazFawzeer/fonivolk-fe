<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    //
    protected $fillable = [
        'name',
        'sku',
        'price',
        'category', 
        'points',
        'image',
        'description',
        'status'
    ];

    protected $casts = [
        'points' => 'array', // VERY IMPORTANT for JSON
    ];
}
