<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> 091273614</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> ducnhat1708@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo pull-left">
                        <a href="{{url('/')}}"><img src="{{asset('frontEnd/images/home/lg.png')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h1 class="title_name"> Shop văn phòng phẩm</h1>
                </div>
                <div class="col-sm-3">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{url('shopping-cart')}}"><i class="fa fa-shopping-cart"><span class="badge badge-pill badge-success">{{Session:: has('cart') ? Session::get('cart')->totalQty : ''}}</span></i> Cart</a></li>
                            @if(Auth::check())
                                <li><a href="{{url('/myaccount')}}"><i class="fa fa-user"></i> My Account</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-lock"></i> Logout </a>
                                </li>
                            @else
                                <li><a href="{{url('/login_page')}}"><i class="fa fa-lock"></i> Login</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{url('/')}}" class="active">Trang chủ</a></li>
                            <li class="dropdown"><a href="#">Mua sắm<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{url('/list-products')}}">Sản phẩm</a></li>
                                    <li><a href="{{url('/myaccount')}}">Tài khoản</a></li>
                                    <li><a href="{{url('/shopping-cart')}}">Cart</a></li>
                                </ul>
                            </li>
                            <li><a href="#" target="_blank">Liên lạc</a></li>
                        </ul>
                    </div>
                </div>
            <form class="form-inline ml-auto" action="{{route('search')}}" method="GET" role="search">
                <div class="col-sm-3">
                        <div class="md-form my-0">
                        <input class="form-control" name="key" value="" type="text" placeholder="Search" aria-label="Search">
                        </div>
                </div>
                <div class="col-sm-1">
                    <input type="submit" value="Tìm kiếm" class="btn btn-info">
                </div>
            </form>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->