@extends('layouts.frontend')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="video_img_section_wrapper">
                <div class="video_nav_img hidden-xs">
                    @if ($product->images != null)
                        @foreach ($product->images as $item)
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <a class="button secondary url owl_nav" href="#zero">
                                    <img src="{{asset('storage/'.$item->path)}}" class="img-responsive">
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="cc_ps_top_slider_section">
                    <div class="owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                @if ($product->images != null)
                                    @foreach ($product->images as $item)
                                        <div class="owl-item cloned" style="width: 561.594px; margin-right: 10px;">
                                            <div class="item" data-hash="two">

                                                <img class="small img-responsive"
                                                     src="{{asset('storage/'.$item->path)}}"
                                                     alt="small_img">
                                            </div>
                                        </div>

                                    @endforeach
                                @endif

                            </div>
                        </div>
                        <div class="owl-nav">
                            <div class="owl-prev"><i class="fa fa-angle-double-left" aria-hidden="true"></i></div>
                            <div class="owl-next"><i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                        </div>
                        <div class="owl-dots">
                            <div class="owl-dot active"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="video_nav_img visible-xs">
                                <div class="row">
                                    @if ($product->images != null)
                                        @foreach ($product->images as $item)
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-3 cc_ps_tabs">
                                                <a class="button secondary url owl_nav" href="#zero"><img
                                                        src="{{asset('storage/'.$item->path)}}" class="img-responsive"
                                                        alt="nav_img"></a>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="btc_shop_single_prod_right_section">
                <h1>{{$product->title}}</h1>
                <div class="btc_shop_sin_pro_icon_wrapper">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <p>10 Reviews <span><a href="#">Add Your Review</a></span></p>
                    <h5>{{$product->content}}</h5>
                </div>
                <div class="btc_shop_prod_quanty_bar">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 full_width">
                            <div class="cc_ps_quantily_info">
                                <div class="select_number">
                                    <button onclick="changeQty(1); return false;" class="increase"><i
                                            class="fa fa-plus"></i>
                                    </button>
                                    <input type="text" name="quantity" value="1" size="2" id="input-quantity"
                                           class="form-control">
                                    <button onclick="changeQty(0); return false;" class="decrease"><i
                                            class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="hidden" name="product_id">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 full_width">
                            <div class="cc_ps_color_selectobx">
                                <select>
                                    <option> Size List</option>
                                    <option> 32</option>
                                    <option> 33</option>
                                    <option> 34</option>
                                    <option> 35</option>
                                </select><i class="fa fa-caret-down"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 full_width">
                            <div class="cc_ps_color_selectobx">
                                <select>
                                    <option> Color</option>
                                    <option> Red</option>
                                    <option> Orange</option>
                                    <option> Blue</option>
                                    <option> Green</option>
                                </select><i class="fa fa-caret-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btc_shop_product_price_wrapper">
                    <ul>
                        <li>{{$product->price}}</li>
                        <li>
                            <del>$250.00</del>
                        </li>
                        <li>(70% OFF)</li>
                    </ul>
                </div>
                <div class="cc_ps_cart_btn_wrapper">
                    <div class="cc_ps_cart_btn">
                        <ul>
                            <li>
                                <a href="#"> <i class="fa fa-shopping-cart"></i> Add to Cart</a>
                            </li>
                            <li><a href="#"><i class="fa fa-heart"></i> wishlist</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
