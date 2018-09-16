<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    protected $table = 'orderdetail';

    protected $fillable = ['orderId', 'productId', 'detailQuantity'];
}
