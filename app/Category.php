<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    //protected $table = 'category';
    protected $table = 'filter_type_values';

    function parent ()
    {
        return $this->hasOne('App\Category', 'id', 'parent_id');
    }

    public function filterType ()
    {
        return $this->belongsTo('App\FilterType', 'filter_type_id', 'id');
    }
}
