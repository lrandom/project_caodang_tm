<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(){
        $products = Product::
        with(['images'=>function($q){
            $q->where('is_preview',1);
        }])
        ->orderBy('id','desc')->paginate(10);
        return view('frontends.home',['products'=>$products]);
    }
}
