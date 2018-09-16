<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'productName',
        'catalogId',
        'productImageLink',
        'productPrice',
        'productDescription',
        'productStatus'
    ];
}
