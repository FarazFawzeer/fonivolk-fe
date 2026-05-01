<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductFe extends Model
{
    protected $table = 'products_fe';

    protected $fillable = [
        'brand',
        'series',
        'name',
        'slug',
        'sku',
        'storage',
        'condition',
        'colour',
        'battery',
        'region',
        'description',
        'price',
        'koko_installment_price',
        'koko_installment_part',
        'main_image',
        'sub_images',
        'status',
        'is_published',
        'warranty',
    ];

    protected $casts = [
        'sub_images' => 'array',
        'price' => 'decimal:2',
        'koko_installment_price' => 'decimal:2',
        'status' => 'boolean',
        'is_published' => 'boolean',
    ];
}