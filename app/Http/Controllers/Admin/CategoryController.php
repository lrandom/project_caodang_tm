<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\FilterType;

class CategoryController extends Controller
{
    function index ()
    {
        $data = Category::with('parent')->orderBy('id', 'DESC')->paginate(15); //phan trang
        //return view('admin.users.index',$data);
        //dd($data);
        return view('admin.category.index', ['data' => $data]);
    }

    //
    function add (Request $request)
    {
        if ($request->isMethod('post')) {
            $name = $request->name;
            $parent_id = $request->parent_id;
            $filter_type_id = $request->filter_type_id;
            //tạo mới một đối tượng category
            $category = new Category;
            $category->parent_id = $parent_id;
            $category->name = $name;
            $category->filter_type_id = $filter_type_id;
            $category->save();
        }
        $data = Category::all();
        $filterType = FilterType::all();
        return view('admin.category.add',
            [
                'parentCategory' => $data,
                'filter_type' => $filterType
            ]
        );
    }

    function edit (Request $request)
    {
        $id = $request->id;

        if ($request->isMethod('POST')) {
            //cập nhật bản ghi
            $category = Category::find($id);
            //dd($request->parent_id);
            $category->filter_type_id = $request->filter_type_id;
            $category->name = $request->name;
            $category->parent_id = $request->parent_id;
            $category->save();
        }

        if (is_numeric($id)) {
            $category = Category::find($id);
        }
        $data = Category::where('id', '!=', $id)->get();
        $filterType = FilterType::all();
        return view('admin.category.edit',
            [
                'category' => $category,
                'parentCategory' => $data,
                'filter_type' => $filterType
            ]);
    }

    function delete (Request $request)
    {
        $id = $request->id;
        $user = Category::find($id); //tìm user có id truyền vào
        if ($user != null) {
            $user->delete();
        }
        return redirect('admin/category');
    }
}
