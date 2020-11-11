<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;

class UserController extends Controller
{
    function index ()
    {
        $data = User::orderBy('id', 'DESC')->paginate(15); //phan trang
        //return view('admin.users.index',$data);
        return view('admin.users.index', ['data' => $data]);
    }

    //
    function add (Request $request)
    {
        if ($request->isMethod('post')) {
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

    function delete (Request $request)
    {
        $id = $request->id;
        $user = User::find($id); //tìm user có id truyền vào
        if ($user != null) {
            $user->delete();
        }
        return redirect('admin/users');
    }

    function edit (Request $request)
    {
        $id = $request->id;

        if ($request->isMethod('POST')) {
            //cập nhật bản ghi
            $user = User::find($id);
            $username = $request->name;
            $fullname = $request->fullname;
            $address = $request->address;
            $phone = $request->phone;
            $email = $request->email;
            $password = $request->password;
            $level = $request->level;

            //tạo mới một đối tượng user
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

        if (is_numeric($id)) {
            $user = User::find($id);
        }
        return view('admin.users.edit', ['user' => $user]);
    }
}
