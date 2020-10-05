<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function detail(){
        return view('frontends.product-detail');
    }
}
