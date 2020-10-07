<?php

namespace App\Http\Controllers\Admin;

use App\FilterType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilterTypeController extends Controller
{
    function index ()
    {
        $data = FilterType::with('parent')->paginate(15); //phan trang
        return view('admin.filter_type.index', ['data' => $data]);
    }

    //
    function add (Request $request)
    {
        if ($request->isMethod('post')) {
            $name = $request->name;
            //tạo mới một đối tượng Filter Type
            $filterType = new FilterType;
            $filterType->name = $name;
            $filterType->save();
        }
        return view('admin.filter_type.add');
    }

    function edit (Request $request)
    {
        $id = $request->id;

        if ($request->isMethod('POST')) {
            //cập nhật bản ghi
            $filterType = FilterType::find($id);
            $filterType->name = $request->name;
            $filterType->save();
        }
        if (is_numeric($id)) {
            $filterType = FilterType::find($id);
        }
        return view('admin.filter_type.edit', ['filterType' => $filterType);
    }

    function delete (Request $request)
    {
        $id = $request->id;
        $user = FilterType::find($id); //tìm user có id truyền vào
        if ($user != null) {
            $user->delete();
        }
        return redirect('admin/filter_type');
    }
}
