<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\ProductOrder;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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


        foreach ($filters as $filter) {
            $filterArray = explode('|', $filter);
            $id = $id.'-'.$filterArray[0].'-'.$filterArray[2];
        }

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
        $user = \Auth::user();
        return view('frontends.cart', ['products' => $products, 'user' => $user]);
    }

    function checkout (Request $request)
    {
        //thong tin don hang
        $fullname = $request->input('fullname');
        $address = $request->input('address');
        $phone = $request->input('phone');
        $totalPrice = $request->input('total_price');
        $note = $request->input('note');
        $paymentMethod = $request->input('payment_method');
        $quantity = $request->input('quantity');

        DB::beginTransaction();
        try {
            $order = new Order();
            $order->receiver_name = $fullname;
            $order->address = $address;
            $order->phone = substr($phone, 0, 10);
            $order->quantity = $quantity;
            $order->total_price = $totalPrice;
            $order->note = $note;
            $order->payment_method = $paymentMethod;
            $order->user_id = Auth::user()->id;
            $order->save();
            DB::commit();

            //lay thong tin sp trong don hang
            $cart = \Cart::session('cart')->getContent();
            foreach ($cart as $r) {
                $productOrder = new ProductOrder();
                $productOrder->quantity = $r->quantity;
                $productOrder->price = $r->price;
                $ids = explode('-', $r->id);
                $productOrder->product_id = $ids[0];
                $productOrder->order_id = $order->id;
                $productOrder->filters_selected = $r->attributes['filters'];
                $productOrder->save();
                \Cart::session('cart')->remove($r->id);
            }
            //xoa gio hang
            return redirect(url('checkout/success'));
        } catch (Exception $e) {
            DB::rollback();
        }
    }

    function search (Request $request)
    {
        $title = $request->input('q');
        $product = Product::with([
            'images' => function ($q) {
                $q->where('is_preview', 1);
            }
        ])->where('title', 'like', '%'.$title.'%')->paginate();
        return view('frontends.search', ['product' => $product]);
    }
}
