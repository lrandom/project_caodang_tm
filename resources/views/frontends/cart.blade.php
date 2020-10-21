@extends('layouts.frontend')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="btc_shop_single_prod_right_section shop_product_single_head related_pdt_shop_head">
                <h1>Your cart Products ({{count($products)}})</h1>
            </div>
        </div>
        <div class="shop_cart_page_wrapper">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="table-responsive cart-calculations">
                    <table class="table">

                        <thead class="cart_table_heading">
                        <tr>
                            <th>item</th>

                            <th>product</th>
                            <th>&nbsp;</th>
                            <th> price</th>

                            <th>Quantity</th>

                            <th>Total price</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $r)
                            <tr>
                                <td>
                                    {{$r->id}}
                                </td>
                                <td>
                                    <div class="table_cart_img">
                                        <figure>
                                            <img src="images/shop/cart_1.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="table_cart_cntnt">
                                        <h1>{{$r->name}}</h1>
                                        <p>color : black </p>
                                    </div>
                                </td>
                                <td></td>
                                <td class="cart_page_price">{{$r->price}}</td>
                                <td>
                                    <input value="{{$r->quantity}}" type="number">
                                </td>
                                <td class="cart_page_totl">{{$r->price * $r->quantity}}</td>
                                <td>
                                    <a href="?action=delete&id={{$r->id}}"> <i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>

                <div class="estimate_shiping_Wrapper_cntnt estimate_shiping_Wrapper_cntnt_2">
                    <div
                        class="btc_shop_single_prod_right_section shop_product_single_head related_pdt_shop_head related_pdt_shop_head_2">
                        <h1>coupan code enetr here : </h1>
                        <div class="lr_nl_form_wrapper">
                            <input type="text" placeholder="Type Your Code">
                            <button type="submit">apply</button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                <div class="shipping_Wrapper">
                    <div
                        class="btc_shop_single_prod_right_section shop_product_single_head related_pdt_shop_head related_pdt_shop_head_2">
                        <h1>estimate shipping : </h1>
                    </div>
                    <div class="estimate_shiping_Wrapper_cntnt">
                        <div class="custome-select style2">
                            <span>Select country <i class="fa fa-angle-down"></i></span>
                            <select>
                                <option>United States</option>
                                <option>Austraila</option>
                                <option>London</option>
                            </select>
                        </div>

                        <div class="custome-select style2">
                            <span>Select State <i class="fa fa-angle-down"></i></span>
                            <select>
                                <option>United States</option>
                                <option>Austraila</option>
                                <option>London</option>
                            </select>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter ZIP code">
                        <div class="shop_btn_wrapper shop_btn_wrapper_shipping">
                            <ul>
                                <li><a href="#">check</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="estimate_shiping_Wrapper_cntnt estimate_shiping_Wrapper_repsnse">

                        <table class="table">
                            <tbody>
                            <tr>
                                <th>Sub Total :</th>
                                <td><span class="price">$1,00.00</span></td>
                            </tr>
                            <tr>
                                <th>IGST 18% :</th>
                                <td><span class="price">$200.00</span></td>
                            </tr>
                            <tr>
                                <th>CGST 20% :</th>
                                <td><span class="price">$200.00</span></td>
                            </tr>
                            <tr>
                                <th> Discount:</th>
                                <td><span class="price">-$200.00</span></td>
                            </tr>
                            <tr>
                                <th class="cart_btn_cntnt"> Sub Total :</th>
                                <td><span class="cart_btn_cntnt_clr">$1192.00 </span></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="shop_btn_wrapper shop_btn_wrapper_shipping">
                            <ul>
                                <li><a href="#">checkout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
