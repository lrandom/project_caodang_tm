<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    //
    protected $casts = [
        'filters_selected' => 'array'
    ];
}
