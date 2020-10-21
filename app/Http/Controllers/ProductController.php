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
        $product = Product::with([
            'images' => function ($q) {
                $q->where('is_preview', 1);
            }
        ])->where('id', $id)->first();
        $filters = $request->input('filters');
        //Chưa có sp trong giỏ hàng
        //Thêm sản phẩm vào giỏ hàng

        $extrasAttrs = [
            'image' => $product->images[0]->path,
            'filters' => $filters
        ];
        \Cart::session('cart')->add(array(
            'id' => $id,
            'name' => $product->title,
            'price' => $product->price,
            'quantity' => 1,
            'product_image' => $product->images[0]->path,
            'attributes' => $extrasAttrs
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

            return redirect('cart');
        }
        $products = \Cart::session('cart')->getContent();
        return view('frontends.cart', ['products' => $products]);
    }
}
