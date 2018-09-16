<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table = 'catalog';

    protected $fillable = [
        'catalogName', 'catalogStatus'
    ];
}
