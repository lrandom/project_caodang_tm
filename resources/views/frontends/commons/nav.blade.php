<?php
use App\FilterType;$products = \Cart::session('cart')->getContent();
$totalProduct = 0;
foreach ($products as $r) {
    $totalProduct += $r->quantity;
}
?>
<nav class="navbar mega-menu navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
        <div class="navbar-header hidden-xs hidden-sm">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('imgs/logo.png')}}" alt=""></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active dropdown">
                    <a href="{{url('/')}}">
                        Home
                    </a>
                </li>

                <?php
                $filterTypes = FilterType::with('filtersValue')->where('type', '1')->get();
                ?>
                @foreach($filterTypes as $r)
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">
                            {{$r->name}}
                        </a>
                        <ul class="dropdown-menu">
                            @foreach($r->filtersValue as $filterValue)
                                <li>
                                    <a href="#">
                                        {{$filterValue->name}}
                                        <span>
                                            <i class="fa fa-caret-right"></i>
                                        </span>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </li>
            @endforeach


            <!-- Cart Option -->
                <li class="dropdown cart_dropdown_wrapper">
                    <a href="{{url('cart')}}"><i
                            class="fa fa-shopping-cart"></i>
                        <span id="cart-badge" class="badge badge-warning">{{$totalProduct}}</span>
                    </a>
                </li>
                <!-- /.Cart Option -->
            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>
