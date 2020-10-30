<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilterType extends Model
{
    //
    function filtersValue ()
    {
        return $this->hasMany('App\Category', 'filter_type_id', 'id');
    }
}
