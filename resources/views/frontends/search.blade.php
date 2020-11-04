@extends('layouts.frontend')
@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="sidebar_widget">
                <h4>Search Feed</h4>
                <form class="search_form" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="sidebar_widget">
                <h4>Categories</h4>
                <div class="accordion_wrapper">
                    <div class="panel-group" id="accordion_wrapperLeft">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion_wrapperLeft"
                                       href="#collapseSevenLeftTwo" aria-expanded="false">
                                        smartphones
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseSevenLeftTwo" class="panel-collapse collapse" aria-expanded="false"
                                 role="tablist">
                                <div class="panel-body">
                                    <ul>
                                        <li>
                                            <i class="fa fa-angle-right"></i> samsung (2)
                                        </li>
                                        <li>
                                            <i class="fa fa-angle-right"></i> nokia (21)
                                        </li>
                                        <li><i class="fa fa-angle-right"></i> oppo(10)</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <!-- /.panel-default -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion_wrapperLeft"
                                       href="#collapseSevenLeftone" aria-expanded="false">
                                        tablets

                                    </a>
                                </h2>
                            </div>
                            <div id="collapseSevenLeftone" class="panel-collapse collapse in" aria-expanded="false"
                                 role="tablist">
                                <div class="panel-body">
                                    <ul>
                                        <li><i class="fa fa-angle-right"></i> samsung (20)</li>
                                        <li>
                                            <i class="fa fa-angle-right"></i> lenovo(5)
                                        </li>
                                        <li><i class="fa fa-angle-right"></i> panasonic (10)</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <!-- /.panel-default -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion_wrapperLeft"
                                       href="#collapseSevenLeftThree" aria-expanded="false">
                                        Accessories (145)
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseSevenLeftThree" class="panel-collapse collapse" aria-expanded="false"
                                 role="tablist">
                                <div class="panel-body">
                                    <ul>
                                        <li><i class="fa fa-angle-right"></i> powerbank (2)</li>
                                        <li>
                                            <i class="fa fa-angle-right"></i> memeory card (4)
                                        </li>
                                        <li><i class="fa fa-angle-right"></i>usb cable(10)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion_wrapperLeft"
                                       href="#collapseSevenLeftFour" aria-expanded="false">
                                        gadgets (21)
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseSevenLeftFour" class="panel-collapse collapse" aria-expanded="false"
                                 role="tablist">
                                <div class="panel-body">
                                    <ul>
                                        <li><i class="fa fa-angle-right"></i> power bank(2)</li>
                                        <li>
                                            <i class="fa fa-angle-right"></i> usb cable(5)
                                        </li>
                                        <li><i class="fa fa-angle-right"></i>hard disk (10)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion_wrapperLeft"
                                       href="#collapseSevenLeftFive" aria-expanded="false">
                                        electronic(41)
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseSevenLeftFive" class="panel-collapse collapse" aria-expanded="false"
                                 role="tablist">
                                <div class="panel-body">
                                    <ul>
                                        <li><i class="fa fa-angle-right"></i> hard disk (2)</li>
                                        <li>
                                            <i class="fa fa-angle-right"></i> Mobile Kit (45)
                                        </li>
                                        <li><i class="fa fa-angle-right"></i>usb cable (10)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-default -->
                    </div>
                    <!--end of /.panel-group-->
                </div>
                <!--end of accordion_wrapper-->
            </div>
            <div class="sidebar_widget">
                <h4>offer products</h4>
                <div class="latest_post_wrapper">

                    <div class="blog_wrapper2">
                        <div class="blog_image">
                            <img src="images/blog/blog-5/blog_img2.jpg" class="img-responsive" alt="blog_img2">
                        </div>
                        <div class="blog_text">
                            <h5><a href="#">EOS 450D Camera</a></h5>
                            <div class="blog_date">$ 200 - $ 150</div>
                        </div>
                    </div>
                    <div class="blog_wrapper3">
                        <div class="blog_image">
                            <img src="images/blog/blog-5/blog_img3.jpg" class="img-responsive" alt="blog_img3">
                        </div>
                        <div class="blog_text">
                            <h5><a href="#">EOS 450D Camera</a></h5>
                            <div class="blog_date">$ 200 - $ 150</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar_widget">
                <h4>filter by price</h4>
                <div class="widget price-range">
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
                        </li>
                        <li class="shop_btn_wrapper">
                            <ul>
                                <li><a href="#">filter</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar_widget">
                <h4>discount</h4>
                <div class="archives_wrapper">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-caret-right" aria-hidden="true"></i> 10% off or more
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-caret-right" aria-hidden="true"></i> 20% off or more
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-caret-right" aria-hidden="true"></i> 70% off or more
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-caret-right" aria-hidden="true"></i> 75% off or more
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="sidebar_widget">
                <div class="sc_shop_add">
                    <a href="#"><img src="images/shop/add.jpg" class="img-responsive" alt="shop_img"></a>
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
                                <div class="showpro">
                                    <p><span>Showing 1-9</span> of 256 Results</p>
                                </div>
                                <select>
                                    <option>short by</option>
                                    <option>Laptop</option>
                                    <option>usb cable</option>
                                    <option>cpu</option>
                                </select>
                                <div class="list-grid">
                                    <ul class="list-inline nav nav-pills">
                                        <li class="active"><a data-toggle="pill" href="#grid"><i
                                                    class="fa fa-th-large"></i></a></li>
                                        <li><a data-toggle="pill" href="#list"><i class="fa fa-list"></i></a></li>
                                    </ul>
                                </div>

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
                            <div id="list" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="btc_shop_indx_cont_list_box_wrapper">
                                            <div class="btc_shop_list_img_wrapper">
                                                <ul>
                                                    <li class="btc_shop_list_price">new</li>
                                                </ul>
                                                <img src="images/shop/li_img1.jpg" alt="shop_img"
                                                     class="img-responsive">
                                            </div>
                                            <div class="btc_shop_list_img_cont_wrapper">

                                                <h1><a href="#">{{$r->title}}</a></h1>
                                                <h2>$ 156</h2>
                                                <del>$ 250</del>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do enim
                                                    ad minimveniam, quis do enim ad minimven trud exercitation
                                                    ullamco.</p>
                                                <div class="cc_shop_list">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="btc_shop_list_bottom_social_wrapper ">
                                                    <ul>
                                                        <li class="shop_list_first_btn"><a href="#"><i
                                                                    class="fa fa-heart"></i>wishlist</a></li>
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i>add to
                                                                cart</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="btc_shop_indx_cont_list_box_wrapper">
                                            <div class="btc_shop_list_img_wrapper">

                                                <img src="images/shop/li_img2.jpg" alt="shop_img"
                                                     class="img-responsive">
                                            </div>
                                            <div class="btc_shop_list_img_cont_wrapper">

                                                <h1><a href="#">SUNSHINE IN MY SOUL</a></h1>
                                                <h2>$ 156</h2>
                                                <del>$ 250</del>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do enim
                                                    ad minimveniam, quis do enim ad minimven trud exercitation
                                                    ullamco.</p>
                                                <div class="cc_shop_list">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="btc_shop_list_bottom_social_wrapper ">
                                                    <ul>
                                                        <li class="shop_list_first_btn"><a href="#"><i
                                                                    class="fa fa-heart"></i>wishlist</a></li>
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i>add to
                                                                cart</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="btc_shop_indx_cont_list_box_wrapper">
                                            <div class="btc_shop_list_img_wrapper">

                                                <img src="images/shop/li_img3.jpg" alt="shop_img"
                                                     class="img-responsive">
                                            </div>
                                            <div class="btc_shop_list_img_cont_wrapper">

                                                <h1><a href="#">Black Dress</a></h1>
                                                <h2>$ 156</h2>
                                                <del>$ 250</del>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do enim
                                                    ad minimveniam, quis do enim ad minimven trud exercitation
                                                    ullamco.</p>
                                                <div class="cc_shop_list">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="btc_shop_list_bottom_social_wrapper ">
                                                    <ul>
                                                        <li class="shop_list_first_btn"><a href="#"><i
                                                                    class="fa fa-heart"></i>wishlist</a></li>
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i>add to
                                                                cart</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="btc_shop_indx_cont_list_box_wrapper">
                                            <div class="btc_shop_list_img_wrapper">

                                                <img src="images/shop/li_img4.jpg" alt="shop_img"
                                                     class="img-responsive">
                                            </div>
                                            <div class="btc_shop_list_img_cont_wrapper">

                                                <h1><a href="#">SPRING FASHION GIRL</a></h1>
                                                <h2>$ 156</h2>
                                                <del>$ 250</del>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do enim
                                                    ad minimveniam, quis do enim ad minimven trud exercitation
                                                    ullamco.</p>
                                                <div class="cc_shop_list">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="btc_shop_list_bottom_social_wrapper ">
                                                    <ul>
                                                        <li class="shop_list_first_btn"><a href="#"><i
                                                                    class="fa fa-heart"></i>wishlist</a></li>
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i>add to
                                                                cart</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="btc_shop_indx_cont_list_box_wrapper">
                                            <div class="btc_shop_list_img_wrapper">
                                                <ul>
                                                    <li class="btc_shop_price ">new</li>
                                                </ul>
                                                <img src="images/shop/li_img5.jpg" alt="shop_img"
                                                     class="img-responsive">
                                            </div>
                                            <div class="btc_shop_list_img_cont_wrapper">

                                                <h1><a href="#">AMAZING SUMMER</a></h1>
                                                <h2>$ 156</h2>
                                                <del>$ 250</del>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do enim
                                                    ad minimveniam, quis do enim ad minimven trud exercitation
                                                    ullamco.</p>
                                                <div class="cc_shop_list">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="btc_shop_list_bottom_social_wrapper ">
                                                    <ul>
                                                        <li class="shop_list_first_btn"><a href="#"><i
                                                                    class="fa fa-heart"></i>wishlist</a></li>
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i>add to
                                                                cart</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="btc_shop_indx_cont_list_box_wrapper">
                                            <div class="btc_shop_list_img_wrapper">
                                                <ul>
                                                    <li class="btc_shop_price btc_stock">out of stock</li>
                                                </ul>
                                                <img src="images/shop/li_img6.jpg" alt="shop_img"
                                                     class="img-responsive">
                                            </div>
                                            <div class="btc_shop_list_img_cont_wrapper">

                                                <h1><a href="#">CREPE FROCK</a></h1>
                                                <h2>$ 156</h2>
                                                <del>$ 250</del>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do enim
                                                    ad minimveniam, quis do enim ad minimven trud exercitation
                                                    ullamco.</p>
                                                <div class="cc_shop_list">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="btc_shop_list_bottom_social_wrapper ">
                                                    <ul>
                                                        <li class="shop_list_first_btn"><a href="#"><i
                                                                    class="fa fa-heart"></i>wishlist</a></li>
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i>add to
                                                                cart</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="btc_shop_indx_cont_list_box_wrapper">
                                            <div class="btc_shop_list_img_wrapper">
                                                <ul>
                                                    <li class="btc_shop_price btc_stock">out of stock</li>
                                                </ul>
                                                <img src="images/shop/li_img7.jpg" alt="shop_img"
                                                     class="img-responsive">
                                            </div>
                                            <div class="btc_shop_list_img_cont_wrapper">

                                                <h1><a href="#">WOMEN'S A-LINE</a></h1>
                                                <h2>$ 156</h2>
                                                <del>$ 250</del>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do enim
                                                    ad minimveniam, quis do enim ad minimven trud exercitation
                                                    ullamco.</p>
                                                <div class="cc_shop_list">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="btc_shop_list_bottom_social_wrapper ">
                                                    <ul>
                                                        <li class="shop_list_first_btn"><a href="#"><i
                                                                    class="fa fa-heart"></i>wishlist</a></li>
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i>add to
                                                                cart</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- blog_pagination_section start -->
                    <div class="shop_pagination_section">
                        <ul>
                            <li>
                                <a href="#" class="prev"> previous</a>
                            </li>
                            <li><a href="#">01</a>
                            </li>
                            <li class="active_pagination"><a href="#">02</a>
                            </li>

                            <li><a href="#" class="hidden-xs hidden-sm">03</a>
                            </li>
                            <li><a href="#" class="hidden-xs hidden-sm">04</a>
                            </li>
                            <li><a href="#" class="next">next</a>
                            </li>
                        </ul>
                    </div>
                    <!-- blog_pagination_section end -->
                </div>
            </div>
        </div>
    </div>
@endsection
