<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function category ()
    {
        ///return $this->belongsTo('App\Category', 'category_id', 'id');
        return $this->belongsToMany('App\Category',
            'filter_type_values_products',
            'product_id',
            'category_id');
    }

    public function images ()
    {
        return $this->hasMany('App\Image', 'product_id', 'id');
    }
}
