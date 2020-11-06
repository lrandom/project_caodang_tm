<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    function profile (Request $request)
    {
        $user = Auth::user();
        if ($request->isMethod('post')) {
            //cap nhat profile
            $user->fullname = $request->fullname;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->save();
        }
        return view('auth.profile', ['user' => $user]);
    }
}
