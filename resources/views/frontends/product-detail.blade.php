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
                <form method="post" action="{{url('add-to-cart')}}">
                    <input type="hidden" name="product-id" value="{{$product->id}}"/>
                    <div class="btc_shop_prod_quanty_bar">
                        <div class="row">


                            <?php
                            $category = $product->category;
                            $filters = $category->groupBy('filter_type_id');
                            //dd($filters);
                            ?>


                            @foreach($filters as $item)
                                @if($item[0]->filterType['name']!=null && $item[0]->filterType['type']==2)
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 full_width">
                                        <label for="">{{$item[0]->filterType['name']}}</label>
                                        <div class="cc_ps_color_selectobx">
                                            <select name="filter[]">
                                                @foreach($item as $i)
                                                    <option
                                                        value="{{$item[0]->filterType['id']}}|{{$i->id}}|{{$i->name}}">
                                                        {{$i->name}}</option>
                                                @endforeach
                                            </select><i class="fa fa-caret-down"></i>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <div class="btc_shop_product_price_wrapper">
                        <ul>
                            <li>{{$product->price}}</li>
                            {{--                        <li>--}}
                            {{--                            $250.00--}}
                            {{--                        </li>--}}
                            {{--                        <li>(70% OFF)</li>--}}
                        </ul>
                    </div>
                    <div class="cc_ps_cart_btn_wrapper">
                        <div class="cc_ps_cart_btn">
                            <ul>
                                <li>
                                    <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                </li>


                                {{--                            <li><a href="#"><i class="fa fa-heart"></i> wishlist</a></li>--}}
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
