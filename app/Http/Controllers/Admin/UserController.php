<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;

class UserController extends Controller
{
    //
    function add(Request $request)
    {
        if ($request->isMethod('post')) {
            //echo 'test';
            //exit();
            $username = $request->name;
            $fullname = $request->fullname;
            $address = $request->address;
            $phone = $request->phone;
            $email = $request->email;
            $password = $request->password;
            $level = $request->level;

            //tạo mới một đối tượng user
            $user = new User();
            $user->fullname = $fullname;
            $user->address = $address;
            $user->phone = $phone;
            $user->level = $level;
            $user->email = $email;
            $user->name = $username;
            $user->avatar = 'assets/imgs/profile.png';
            $user->password = Hash::make($password);
            $user->save(); //save user vào csdl mysql
        }
        
        return view('admin.users.add');
    }
}
