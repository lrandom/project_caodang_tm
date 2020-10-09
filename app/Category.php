<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';

    function parent ()
    {
        return $this->hasOne('App\Category', 'id', 'parent_id');
    }

    public function filterType ()
    {
        return $this->belongsTo('App\FilterType', 'filter_type_id', 'id');
    }
}
