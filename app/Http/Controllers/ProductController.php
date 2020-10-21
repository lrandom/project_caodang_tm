<?php

namespace App\Http\Controllers;

use App\Product;
use Darryldecode\Cart\Cart;
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

    function addToCart (Request $request)
    {
        $id = $request->input('product-id');
        $product = Product::find($id);
        $filters = $request->input('filters');
        //Chưa có sp trong giỏ hàng
        //Thêm sản phẩm vào giỏ hàng
        \Cart::session('cart')->add(array(
            'id' => $id,
            'name' => $product->title,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => $filters
        ));
        return redirect()->back();
    }

    function cart (Request $request)
    {
        if ($request->input('action') != null) {
            $action = $request->input('action');
            switch ($action) {
                case 'delete':
                    //xoa sp khoi gio hang
                    $id = $request->input('id');
                    \Cart::session('cart')->remove($id);
                    break;

                case 'update_quantity':
                    $id = $request->input('id');
                    \Cart::session('cart')->update($id, [
                        'quantity' => $request->quantity
                    ]);
                    break;
            }
        }
        $products = \Cart::session('cart')->getContent();
        return view('frontends.cart', ['products' => $products]);
    }
}
