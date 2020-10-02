<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Image;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    function index ()
    {
        $data = Product::with('category')
            ->with(['images'=>function($q){
                $q->where('is_preview',1);
            }])->paginate(15); //phan trang
        //return view('admin.users.index',$data);
        //dd($data);
        return view('admin.products.index', ['data' => $data]);
    }

    //
    function add (Request $request)
    {
        if ($request->isMethod('post')) {
            $product = new Product;
            $product->title = $request->title;
            $product->price = $request->price;
            $product->content = $request->content;
            $product->category_id = $request->category_id;
            $product->quantity = $request->quantity;
            $product->sell_count = 0;//chua ban đc phát nào
            $product->save();

            //mang lưu đường dẫn file
            $filePaths = [];
            //echo 'test'; exit();
            //upload file
            for ($i = 0; $i < 4; $i++) {
                if ($request->hasFile('file_'.($i + 1))) {
                    $file = $request->file('file_'.($i + 1));
                    $fileExtension = $file->getClientOriginalExtension(); //lấy đuôi file
                    $fileName = time().$i.'.'.$fileExtension;
                    Storage::disk('local')
                    ->put('public/products/'.$fileName, file_get_contents($file));
                    $filePaths[] = 'products/'.$fileName;
                }
            }

            for ($i = 0; $i < count($filePaths); $i++) {
                $image = new Image();
                $image->path = $filePaths[$i];
                $image->product_id = $product->id;
                if ($i == 0) {
                    $image->is_preview = 1; // ảnh đầu tiên là ảnh đại diện
                }
                $image->save();
            }
        }
        $data = Category::all();
        return view('admin.products.add', ['category' => $data]);
    }

    function edit (Request $request)
    {
        $id = $request->id;

        if ($request->isMethod('POST')) {
            //cập nhật bản ghi
            $product = Product::find($id);
            $product->title = $request->title;
            $product->price = $request->price;
            $product->content = $request->content;
            $product->category_id = $request->category_id;
            $product->quantity = $request->quantity;
            $product->save();
        }

        if (is_numeric($id)) {
            $product = Product::find($id);
        }

        $category = Category::where('id', '!=', $id)->get();
        return view('admin.products.edit', ['category' => $category, 'product' => $product]);
    }

    function delete (Request $request)
    {
        $id = $request->id;
        $product = Product::find($id); //tìm user có id truyền vào
        if ($product != null) {
            $product->delete();
        }
        return redirect('admin/products');
    }
}
