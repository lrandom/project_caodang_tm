<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function detail ($id)
    {
        $product = Product
            ::with('images')
            ->where('id', $id)->first();


        return view('frontends.product-detail',
            ['product' => $product]);
    }
}
