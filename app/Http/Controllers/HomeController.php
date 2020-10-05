<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(){
    
        return view('layouts.frontend');
    }
}
