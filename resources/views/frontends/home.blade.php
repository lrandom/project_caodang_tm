@extends('layouts.frontend')

@section('content')
    <div class="shop_full_width">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sidebar_widget">
                <div class="sc_shop_add sc_shop_fullwidth">
                    <a href="#"><img src="images/shop/banner_shop.jpg" class="img-responsive" alt="shop_img"/></a>
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


                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="tab-content btc_shop_index_content_tabs_main">
                <div id="grid" class="tab-pane fade in active">
                    <div class="row">

                        @foreach ($products as $item)
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a href="{{url('product-detail/'.$item->id)}}">
                                    <div class="btc_shop_indx_cont_box_wrapper">
                                        <div class="btc_shop_indx_img_wrapper">
                                            <ul>
                                                <li class="btc_shop_price">new</li>
                                            </ul>


                                            @if ($item->images!=null && count($item->images)>0)
                                                <img src="{{asset('storage/'.$item->images[0]->path)}}" alt="shop_img"
                                                     class="img-responsive" style="height:300px"/>
                                            @else
                                                <img src="{{asset('no-photo.jpg')}}" alt="shop_img"
                                                     class="img-responsive"
                                                     style="height:300px"/>
                                            @endif
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

                                            <h1><a href="#" class="truncate">{{$item->title}}</a></h1>
                                            <h5>{{$item->price}}</h5>
                                            <div class="cc_li_cont_wrapper">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach


                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- blog_pagination_section start -->
        <div class="shop_pagination_section">
            {{ $products->links() }}

        </div>
        <!-- blog_pagination_section end -->
    </div>
@endsection
