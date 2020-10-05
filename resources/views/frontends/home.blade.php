@extends('layouts.frontend')

@section('content')
<div class="shop_full_width">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="sidebar_widget">
            <div class="sc_shop_add sc_shop_fullwidth">
                <a href="#"><img src="images/shop/banner_shop.jpg" class="img-responsive" alt="shop_img" /></a>
            </div>
        </div>
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
                        <li class="active"><a data-toggle="pill" href="#grid"><i class="fa fa-th-large"></i></a></li>
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
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="btc_shop_indx_cont_box_wrapper">
                            <div class="btc_shop_indx_img_wrapper">
                                <ul>
                                    <li class="btc_shop_price">new</li>
                                </ul>
                                <img src="images/shop/li_img1.jpg" alt="shop_img" class="img-responsive" />
                                <div class="cc_li_img_overlay">
                                    <div class="cc_li_img_text">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>

                                            <li><a href="#"><i class="fa fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="btc_shop_indx_img_cont_wrapper">

                                <h1><a href="#">WESTERN WEAR RED</a></h1>
                                <h5>$  156</h5>
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

                </div>
            </div>
            <div id="list" class="tab-pane fade">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="btc_shop_indx_cont_list_box_wrapper shop_fullwidth_list_wrapper">
                            <div class="btc_shop_list_img_wrapper">
                                <ul>
                                    <li class="btc_shop_list_price">new</li>
                                </ul>
                                <img src="images/shop/li_img1.jpg" alt="shop_img" class="img-responsive" />
                            </div>
                            <div class="btc_shop_list_img_cont_wrapper">

                                <h1><a href="#">WESTERN WEAR RED</a></h1>
                                <h2>$  156</h2>
                                <del>$ 250</del>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do enim ad minimveniam, quis do enim ad minimven trud exercitation ullamco.</p>
                                <div class="cc_shop_list">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="btc_shop_list_bottom_social_wrapper ">
                                    <ul>
                                        <li class="shop_list_first_btn"><a href="#"><i class="fa fa-heart"></i>wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i>add to cart</a></li>

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
@endsection