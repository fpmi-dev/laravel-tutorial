<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'product';
    protected $fillable = [
        'product_brand_id',
        'name',
        'price',
        'img',
        'pin',
        'os',
    ];

    // protected $guarded = [
    //     'os'
    // ];
}
