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

                        @php
                            $index=0;
                            $subTotal = 0;
                            $total = 0;
                            $vat = 10;
                            $shipFee = 15; //15 usd
                            $quantity = 0;
                        @endphp
                        @foreach($products as $r)
                            @php
                                $index++;
                                $subTotal += $r->price*$r->quantity;
                                $quantity+=$r->quantity;
                            @endphp
                            <tr>
                                <td>
                                    {{$index}}
                                </td>
                                <td>
                                    <div class="table_cart_img" style="float:left">
                                        <img width="50" height="50"
                                             src="{{asset('storage/'.$r->attributes->image)}}">
                                    </div>

                                    <div class="table_cart_cntnt" style="float:left;">
                                        <h1>{{$r->name}}</h1>
                                        @php
                                            $filters = $r->attributes->filters;

                                        @endphp

                                        @foreach($filters as $filter)
                                            @php
                                                $filter = explode('|', $filter);
                                            @endphp
                                            <p>{{$filter[1]}} : {{$filter[3]}}</p>
                                        @endforeach
                                    </div>
                                </td>
                                <td>

                                </td>
                                <td class="cart_page_price">{{formatMoney($r->price)}}</td>
                                <td>
                                    <input style="width:50px;float:left" readonly value="{{$r->quantity}}"
                                           type="number">

                                    <span style="float:left;margin-left:10px;">
                                         <a href="?action=update_quantity&id={{$r->id}}&quantity=1">+</a>
                                         <a href="?action=update_quantity&id={{$r->id}}&quantity=-1">-</a>
                                    </span>

                                </td>
                                <td class="cart_page_totl">{{$r->price * $r->quantity}}</td>
                                <td>
                                    <a href="?action=delete&id={{$r->id}}"> <i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach

                        @php
                            $vatFee = ($subTotal*$vat)/100;
                            $total = $vatFee+$subTotal+$shipFee;
                        @endphp

                        </tbody>
                    </table>
                </div>


                <div class="estimate_shiping_Wrapper_cntnt estimate_shiping_Wrapper_cntnt_2">
                    <div
                        class="btc_shop_single_prod_right_section shop_product_single_head related_pdt_shop_head related_pdt_shop_head_2">
                        <h1>Information : </h1>


                        <form class="custom-form" method="post" action="{{url('checkout')}}">
                            @csrf
                            <input type="hidden" value="{{$total}}" name="total_price"/>
                            <input type="hidden" value="{{$quantity}}" name="quantity"/>
                            <div class="custom-input">
                                <div>
                                    <label>Receiver name</label>
                                    <input type="text" name="receiver_name" value="{{$user->fullname}}"
                                           placeholder="Receiver name">
                                </div>

                                <div>
                                    <label for="">Address</label>
                                    <input type="text" name="address" value="{{$user->address}}" placeholder="Address">
                                </div>
                            </div>


                            <div class="custom-input" style="margin-top:20px">
                                <div>
                                    <label for="">Phone</label>
                                    <input type="text" name="phone" value="{{$user->phone}}" placeholder="phone"
                                           maxlength="10">
                                </div>

                                <div>
                                    <label for="">Note</label>
                                    <textarea name="note" placeholder="note"></textarea>
                                </div>
                            </div>

                            <div class="custom-input">
                                <label for="">Phương thức thanh toán</label>
                                <div>
                                    <input type="radio" name="payment_method" value="1" checked="checked"> COD
                                </div>
                            </div>

                            <div>
                                <input type="submit" value="checkout"
                                       style="padding:10px;background: #0279f8;color:white;border:0px;border-radius:5px"/>
                            </div>

                        </form>

                        <style>
                            .custom-form .custom-input {
                                display: flex;
                                justify-content: space-between;

                            }

                            .custom-form .custom-input > div {
                                width: 45%;
                            }

                            .custom-form .custom-input input[type="text"],
                            .custom-form .custom-input textarea {
                                width: 100%;
                                padding: 10px;
                                border: 1px solid #cdcdcd;
                                background-color: #efefef
                            }

                        </style>

                    </div>
                </div>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                <div class="shipping_Wrapper">

                    <div class="estimate_shiping_Wrapper_cntnt estimate_shiping_Wrapper_repsnse">

                        <table class="table">
                            <tbody>
                            <tr>
                                <th>Sub Total :</th>
                                <td><span class="price">{{formatMoney($subTotal)}}</span></td>
                            </tr>
                            <tr>
                                <th>VAT {{$vat}}% :</th>
                                <td><span class="price">{{formatMoney($vatFee)}}</span></td>
                            </tr>

                            <tr>
                                <th> Shipfee:</th>
                                <td><span class="price">{{formatMoney($shipFee)}}</span></td>
                            </tr>
                            <tr>
                                <th class="cart_btn_cntnt"> Total :</th>
                                <td><span class="cart_btn_cntnt_clr">{{formatMoney($total)}}</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
