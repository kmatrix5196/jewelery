@if (Request::is('/user/*'))
    @php ($url = 'user')
@elseif (Request::is('/company/*'))
    @php ($url = 'company')
@else
    @php ($url = 'guest')
@endif
@php ($a=0)
@auth('user')
@php ($a=1)
@endauth
@auth('company')
@php ($a=1)
@endauth
<!-- Start Header Area -->
<header class="header-area header-wide">
    <!-- main header start -->
    <div class="main-header d-none d-lg-block">
        <!-- header top start -->

        <!-- header top end -->

        <!-- header middle area start -->
        <div class="header-main-area sticky" style="background: #fafafa;">
            <div class="container">
                <div class="row align-items-center position-relative">

                    <!-- start logo area -->
                    <div class="col-lg-1">
                        <div class="logo">
                            <a href="index">                                
                                <img src="{{asset('img/logo/logo.png')}}" alt="Brand Logo">                             
                            </a>
                        </div>
                    </div>
                    <!-- start logo area -->

                    <!-- main menu area start -->
                    <div class="col-lg-7">
                        <div class="main-menu-area Royal_Crescent_Bold">
                            <div class="main-menu">
                                <!-- main menu navbar start -->
                                <nav class="desktop-menu">
                                    <ul>
                                        <li><a href="/home">Home </a>

                                        </li>
                                        <li class="position-static"><a href="/home/shop">Offers</a>

                                        </li>
                                        <li><a href="/home/premium_show">Premium Show </a>

                                        </li>
                                        <li><a href="/home/trade_show">Trade Show </a>

                                        </li>
                                        <li><a href="/home/supplier">Suppliers</a>

                                        </li>

                                        <li><a href="/home/contact-us">Contact us</a></li>
                                    </ul>
                                </nav>
                                <!-- main menu navbar end -->
                            </div>
                        </div>
                    </div>
                    <!-- main menu area end -->

                    <!-- right bar start -->
                    <div class="col-lg-4">
                        <div class="header-right d-flex align-items-center justify-content-xl-between justify-content-lg-end">
                            <div class="header-search-container">
                                <button class="search-trigger d-xl-none d-lg-block"><i class="pe-7s-search"></i></button>
                                <form class="header-search-box d-lg-none d-xl-block animated jackInTheBox">
                                    <input type="text" placeholder="Search entire store hire" class="header-search-field">
                                    <button class="header-search-btn"><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                            <div class="header-configure-area">
                                <ul class="nav justify-content-end">
                                    @auth("company")
                                    <li>
                                        <form action="{{route('company.chat')}}" method="post">
                                            @csrf
                                            <input type="text" value="{{Auth::guard('company')->user()->id}}" name="u_id" hidden="true">
                                            <a href="#"><button><img src="https://img.icons8.com/ios/30/000000/speech-bubble-with-dots.png">
                                            <div class="notification">3</div></button></a>
                                        </form>
                                    </li>
                                    @endauth
                                    @auth("user")
                                    <li>
                                        <a href="/home/wishlist">
                                        <img src="https://img.icons8.com/dotty/30/000000/like.png">
                                            <div class="notification">0</div>
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{route('user.chat')}}" method="post">
                                            @csrf
                                            <input type="text" value="{{Auth::guard('user')->user()->id}}" name="u_id" hidden="true">
                                            <a href="#"><button><img src="https://img.icons8.com/ios/30/000000/speech-bubble-with-dots.png">
                                            <div class="notification">3</div></button></a>
                                        </form>
                                    </li>

                                    <li>
                                        <a href="#" class="minicart-btn">
                                        <img src="https://img.icons8.com/ios/30/000000/shopping-mall.png">
                                            <div class="notification">2</div>
                                        </a>
                                    </li>
                                    @endauth
                                    
                                    
                                    <li class="user-hover">
                                        <a href="#">
                                        <img src="https://img.icons8.com/ios/32/000000/user-male-circle.png">
                                          <div class="notification">4</div>
                                        </a>

                                        <ul class="dropdown-list">
                                            @auth("company")
                                            <li><a href="/company/company_profile">Company Profile</a></li>
                                            <li><a href="/company/logout">Logout</a></li>

                                            @endauth
                                            @auth("user")
                                            <li><a href="/user/my_account">My Account</a></li>
                                            <li><a href="/user/logout">Logout</a></li>
                                            @endauth
                                            @if($a!=1)
                                            <li>
                                                <a href="/user/login">User Login /</a>
                                                <a href="/user/register">Register</a>
                                            </li>
                                            <li>
                                                <a href="/company/login">Company Login /</a>
                                                <a href="company/register">Register</a>
                                            </li>
                                            @endif

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- right bar end -->

                </div>
            </div>
        </div>
        <!-- header middle area end -->
    </div>
    <!-- main header start -->

    <!-- mobile header start -->
    <!-- mobile header start -->
    <div class="mobile-header d-lg-none d-md-block sticky">
        <!--mobile header top start -->
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="mobile-main-header">
                        <div class="col-sm-6">

                        </div>
                        <div class="mobile-menu-toggler">
                            
                            <div class="mini-cart-wrap">
                                <a href="/home/cart">
                                    <i class="pe-7s-shopbag"></i>
                                    <div class="notification">0</div>
                                </a>
                            </div>
                            <button class="mobile-menu-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile header top start -->
    </div>
    <!-- mobile header end -->
    <!-- mobile header end -->

    <!-- offcanvas mobile menu start -->
    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="pe-7s-close"></i>
            </div>

            <div class="off-canvas-inner">
                <!-- search box start -->
                <div class="search-box-offcanvas">
                    <form>
                        <input type="text" placeholder="Search Here...">
                        <button class="search-btn"><i class="pe-7s-search"></i></button>
                    </form>
                </div>
                <!-- search box end -->

                <!-- mobile menu start -->
                <div class="mobile-navigation">

                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li><a href="/home/index">Home </a>

                            </li>
                            <li class="position-static"><a href="/home/shop">Offers</a>

                            </li>
                            <li><a href="/home/premium_show">Premium Show </a>

                            </li>
                            <li><a href="/home/trade_show">Trade Show </a>

                            </li>
                            <li><a href="/home/company_profile">Suppliers</a>

                            </li>

                            <li><a href="/home/contact-us">Contact us</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->

                <div class="mobile-settings">
                    <ul class="nav">
                        <li>
                            <div class="dropdown mobile-top-dropdown">
                                <a href="#" class="dropdown-toggle" id="currency" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Currency
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="currency">
                                    <a class="dropdown-item" href="#">$ USD</a>
                                    <a class="dropdown-item" href="#">$ EURO</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown mobile-top-dropdown">
                                @auth("user")
                                <a href="/user/my_account" class="dropdown-toggle" id="myaccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    My Account
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="myaccount">
                                    <a class="dropdo
                                    wn-item" href="/user/my_account">My Profile</a><br>
                                    <a class="dropdo
                                    wn-item" href="/user/logout">Logout</a>
                                </div>
                                @endauth                                
                                @auth("company")
                                    <a href="/company/company_profile" class="dropdown-toggle" id="myaccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Company Profile
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="myaccount">
                                    <a class="dropdo
                                    wn-item" href="/company/company_profile">Company Profile</a><br>
                                    <a class="dropdo
                                    wn-item" href="/company/logout">Logout</a>
                                    
                                </div>
                                @endauth
                                @if($a!=1)
                                <a class="dropdown-item" href="/user/login">Login User</a>
                                <a class="dropdown-item" href="/user/register">Register User</a>
                                
                                <a class="dropdown-item" href="/company/login">Login Company</a>
                                <a class="dropdown-item" href="/company/register">Register Company</a>
                                @endif
                                
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <ul>
                            <li><i class="fa fa-mobile"></i>
                                <a href="#">0123456789</a>
                            </li>
                            <li><i class="fa fa-envelope-o"></i>
                                <a href="#">info@yourdomain.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="off-canvas-social-widget">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->
    <!-- offcanvas mobile menu end -->
</header>
<!-- end Header Area -->
