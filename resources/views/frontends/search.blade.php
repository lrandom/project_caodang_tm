@extends('layouts.frontend')
@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="sidebar_widget">
                <h4>Search Feed</h4>
                <form class="search_form" role="search" method="get" action="{{url('search')}}">
                    <div class="form-group">
                        <input type="text" name="q" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>


            <div class="sidebar_widget">
                <h4>filter by price</h4>
                <div class="widget price-range">

                    <form method="GET" action="{{url('search')}}">
                        <ul>
                            <li class="range">
                                <div id="range-price"
                                     class="range-box ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"
                                         style="left: 8.33333%; width: 64.5833%;"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                          style="left: 8.33333%;"></span><span tabindex="0"
                                                                               class="ui-slider-handle ui-corner-all ui-state-default"
                                                                               style="left: 72.9167%;"></span></div>
                                <span>from:</span>
                                <input type="text" id="price" class="price-box" readonly="">
                                <input type="hidden" name="min_price"/>
                                <input type="hidden" name="max_price"/>
                            </li>

                            <li class="shop_btn_wrapper">
                                <ul>
                                    <li>
                                        <button>
                                            Filter
                                        </button>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </form>

                </div>
            </div>


        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="row">
                <div class="sidebar_shop_right">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        {{--                        <div class="sidebar_widget">--}}
                        {{--                            <div class="sc_shop_add">--}}
                        {{--                                <a href="#"><img src="images/shop/banner_shop.jpg" class="img-responsive"--}}
                        {{--                                                 alt="shop_img"></a>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        <div class="sidebar_widget">
                            <div class="filter-area">
                                {{--                                <div class="showpro">--}}
                                {{--                                    <p><span>Showing 1-9</span> of 256 Results</p>--}}
                                {{--                                </div>--}}
                                <select>
                                    <option>short by</option>
                                    <option>Laptop</option>
                                    <option>usb cable</option>
                                    <option>cpu</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="tab-content btc_shop_index_content_tabs_main">
                            <div id="grid" class="tab-pane fade in active">
                                <div class="row">
                                    @foreach($product as $r)
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="btc_shop_indx_cont_box_wrapper">
                                                <div class="btc_shop_indx_img_wrapper">
                                                    <ul>
                                                        <li class="btc_shop_price">new</li>
                                                    </ul>

                                                    @if ($r->images!=null && count($r->images)>0)

                                                        <img src="{{asset('storage/'.$r->images[0]->path)}}"
                                                             alt="shop_img"
                                                             class="img-responsive">
                                                    @else
                                                        <img src="{{asset('no-photo.jpg')}}" alt="shop_img"
                                                             class="img-responsive" style="height:300px"/>
                                                    @endif

                                                    <div class="cc_li_img_overlay">
                                                        <div class="cc_li_img_text">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>

                                                                <li><a href="#"><i class="fa fa-expand"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="btc_shop_indx_img_cont_wrapper">

                                                    <h1><a href="#">{{$r->title}}</a></h1>
                                                    <h5>{{formatMoney($r->price)}}</h5>
                                                    <div class="cc_li_cont_wrapper">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- blog_pagination_section start -->
                {{--                    <div class="shop_pagination_section">--}}
                {{--                        <ul>--}}
                {{--                            <li>--}}
                {{--                                <a href="#" class="prev"> previous</a>--}}
                {{--                            </li>--}}
                {{--                            <li><a href="#">01</a>--}}
                {{--                            </li>--}}
                {{--                            <li class="active_pagination"><a href="#">02</a>--}}
                {{--                            </li>--}}

                {{--                            <li><a href="#" class="hidden-xs hidden-sm">03</a>--}}
                {{--                            </li>--}}
                {{--                            <li><a href="#" class="hidden-xs hidden-sm">04</a>--}}
                {{--                            </li>--}}
                {{--                            <li><a href="#" class="next">next</a>--}}
                {{--                            </li>--}}
                {{--                        </ul>--}}
                {{--                    </div>--}}
                <!-- blog_pagination_section end -->
                    {{ $product->appends(request()->except('page'))->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
