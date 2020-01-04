<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">


    <!-- CSS
	============================================ -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Pe-icon-7-stroke CSS -->
    <link rel="stylesheet" href="assets/css/vendor/pe-icon-7-stroke.css">
    <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <!-- Slick slider css -->
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <!-- Nice Select css -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <!-- jquery UI css -->
    <link rel="stylesheet" href="assets/css/plugins/jqueryui.min.css">
    <!-- main style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    
    <link rel="stylesheet" href="assets/css/preloader.css">
</head>

<body>

        <!-- Preloader Start -->
        <?php include'php/preloader.php';?>
        <!-- Preloader End -->

        <!-- Start Header Area -->
        <?php include'php/header.php';?>
        <!-- end Header Area -->

        <!-- mobile header start -->
        <!-- mobile header start -->
        <div class="mobile-header d-lg-none d-md-block sticky">
            <!--mobile header top start -->
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mobile-main-header">
                            <div class="mobile-logo">
                                <a href="index.php">
                                    <img src="assets/img/logo/logo.png" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="mobile-menu-toggler">
                                <div class="mini-cart-wrap">
                                    <a href="cart.php">
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
                                <li class="menu-item-has-children"><a href="index.php">Home</a>
                                    <ul class="dropdown">
                                        <li><a href="index.php">Home version 01</a></li>
                                        <li><a href="index-2.php">Home version 02</a></li>
                                        <li><a href="index-3.php">Home version 03</a></li>
                                        <li><a href="index-4.php">Home version 04</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">pages</a>
                                    <ul class="megamenu dropdown">
                                        <li class="mega-title menu-item-has-children"><a href="#">column 01</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.php">shop grid left
                                                        sidebar</a></li>
                                                <li><a href="shop-grid-right-sidebar.php">shop grid right
                                                        sidebar</a></li>
                                                <li><a href="shop-list-left-sidebar.php">shop list left sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.php">shop list right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title menu-item-has-children"><a href="#">column 02</a>
                                            <ul class="dropdown">
                                                <li><a href="product-details.php">product details</a></li>
                                                <li><a href="product-details-affiliate.php">product
                                                        details
                                                        affiliate</a></li>
                                                <li><a href="product-details-variable.php">product details
                                                        variable</a></li>
                                                <li><a href="product-details-group.php">product details
                                                        group</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title menu-item-has-children"><a href="#">column 03</a>
                                            <ul class="dropdown">
                                                <li><a href="cart.php">cart</a></li>
                                                <li><a href="checkout.php">checkout</a></li>
                                                <li><a href="compare.php">compare</a></li>
                                                <li><a href="wishlist.php">wishlist</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title menu-item-has-children"><a href="#">column 04</a>
                                            <ul class="dropdown">
                                                <li><a href="my-account.php">my-account</a></li>
                                                <li><a href="login-register.php">login-register</a></li>
                                                <li><a href="about-us.php">about us</a></li>
                                                <li><a href="contact-us.php">contact us</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children "><a href="#">shop</a>
                                    <ul class="dropdown">
                                        <li class="menu-item-has-children"><a href="#">shop grid layout</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.php">shop grid left sidebar</a></li>
                                                <li><a href="shop-grid-right-sidebar.php">shop grid right sidebar</a></li>
                                                <li><a href="shop-grid-full-3-col.php">shop grid full 3 col</a></li>
                                                <li><a href="shop-grid-full-4-col.php">shop grid full 4 col</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">shop list layout</a>
                                            <ul class="dropdown">
                                                <li><a href="shop-list-left-sidebar.php">shop list left sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.php">shop list right sidebar</a></li>
                                                <li><a href="shop-list-full-width.php">shop list full width</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">products details</a>
                                            <ul class="dropdown">
                                                <li><a href="product-details.php">product details</a></li>
                                                <li><a href="product-details-affiliate.php">product details affiliate</a></li>
                                                <li><a href="product-details-variable.php">product details variable</a></li>
                                                <li><a href="product-details-group.php">product details group</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children "><a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="blog-left-sidebar.php">blog left sidebar</a></li>
                                        <li><a href="blog-list-left-sidebar.php">blog list left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.php">blog right sidebar</a></li>
                                        <li><a href="blog-list-right-sidebar.php">blog list right sidebar</a></li>
                                        <li><a href="blog-grid-full-width.php">blog grid full width</a></li>
                                        <li><a href="blog-details.php">blog details</a></li>
                                        <li><a href="blog-details-left-sidebar.php">blog details left sidebar</a></li>
                                        <li><a href="blog-details-audio.php">blog details audio</a></li>
                                        <li><a href="blog-details-video.php">blog details video</a></li>
                                        <li><a href="blog-details-image.php">blog details image</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.php">Contact us</a></li>
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
                                    <a href="#" class="dropdown-toggle" id="myaccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        My Account
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="myaccount">
                                        <a class="dropdown-item" href="my-account.php">my account</a>
                                        <a class="dropdown-item" href="login-register.php"> login</a>
                                        <a class="dropdown-item" href="login-register.php">register</a>
                                    </div>
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


    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">
                                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                      width="30" height="30"
                                      viewBox="0 0 172 172"
                                      style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M94.0625,24.28723c-1.04141,0 -2.08229,0.37111 -2.82135,1.11017l-72.2948,72.15832c-1.6125,1.6125 -1.6125,4.1672 0,5.64532l11.42188,11.42188c0.80625,0.80625 1.74635,1.20728 2.82135,1.20728c1.075,0 2.1521,-0.40103 2.82397,-1.20728l58.04895,-57.91772l43,43v54.15417c-3.89687,1.34375 -6.85417,4.70313 -7.7948,8.73438h-16.3927v-55.09375c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125h-29.5625c-2.28437,0 -4.03125,1.74688 -4.03125,4.03125v55.09375h-24.1875v-36.28125c0,-2.28437 -1.74687,-4.03125 -4.03125,-4.03125c-2.28438,0 -4.03125,1.74688 -4.03125,4.03125v9.94427c-6.58438,1.6125 -11.68958,6.71927 -13.03333,13.30365c-6.58438,1.34375 -11.82552,6.58333 -13.30365,13.03333h-11.28803c-2.28438,0 -4.03125,1.74687 -4.03125,4.03125c0,2.28438 1.74687,4.03125 4.03125,4.03125h127.65625c2.28438,0 4.03125,-1.74687 4.03125,-4.03125v-1.34375c0,-2.28438 1.74687,-4.03125 4.03125,-4.03125c2.28438,0 4.03125,1.74687 4.03125,4.03125v1.34375c0,2.28438 1.74687,4.03125 4.03125,4.03125h4.03125c2.28438,0 4.03125,-1.74687 4.03125,-4.03125c0,-2.28438 -1.74687,-4.03125 -4.03125,-4.03125h-0.2677c-0.94063,-4.03125 -3.89792,-7.39062 -7.7948,-8.73437v-46.09167l6.8526,6.85522c0.80625,0.80625 1.74635,1.20728 2.82135,1.20728c1.075,0 2.1521,-0.40103 2.82397,-1.20728l11.42188,-11.42187c1.6125,-1.6125 1.6125,-4.1672 0,-5.64532l-72.16095,-72.15832c-0.73906,-0.73906 -1.77994,-1.11017 -2.82135,-1.11017zM94.0625,33.99792l66.51563,66.51563l-5.6427,5.6427l-58.05157,-57.9151c-0.80625,-0.80625 -1.74635,-1.2099 -2.82135,-1.2099c-1.075,0 -2.0151,0.40365 -2.82135,1.2099l-58.05157,57.9151l-5.6427,-5.6427zM86,135.71875c2.28437,0 4.03125,1.74687 4.03125,4.03125c0,2.28438 -1.74688,4.03125 -4.03125,4.03125c-2.28437,0 -4.03125,-1.74687 -4.03125,-4.03125c0,-2.28438 1.74688,-4.03125 4.03125,-4.03125zM43,144.72083v17.87292h-17.87292c1.47813,-3.225 4.70417,-5.375 8.46667,-5.375c2.28437,0 4.03125,-1.74687 4.03125,-4.03125c0,-3.7625 2.15,-6.98855 5.375,-8.46667zM166.625,162.59375c-2.2264,0 -4.03125,1.80485 -4.03125,4.03125c0,2.2264 1.80485,4.03125 4.03125,4.03125c2.2264,0 4.03125,-1.80485 4.03125,-4.03125c0,-2.2264 -1.80485,-4.03125 -4.03125,-4.03125z"></path></g></g></svg>
                                    </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">checkout</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- checkout main wrapper start -->
        <div class="checkout-page-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Checkout Login Coupon Accordion Start -->
                        <div class="checkoutaccordion" id="checkOutAccordion">
                            <div class="card">
                                <h6>Returning Customer? <span data-toggle="collapse" data-target="#logInaccordion">Click
                                            Here To Login</span></h6>
                                <div id="logInaccordion" class="collapse" data-parent="#checkOutAccordion">
                                    <div class="card-body">
                                        <p>If you have shopped with us before, please enter your details in the boxes
                                            below. If you are a new customer, please proceed to the Billing &amp;
                                            Shipping section.</p>
                                        <div class="login-reg-form-wrap mt-20">
                                            <div class="row">
                                                <div class="col-lg-7 m-auto">
                                                    <form action="#" method="post">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="single-input-item">
                                                                    <input type="email" placeholder="Enter your Email" required />
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="single-input-item">
                                                                    <input type="password" placeholder="Enter your Password" required />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="single-input-item">
                                                            <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                                                <div class="remember-meta">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="rememberMe" required />
                                                                        <label class="custom-control-label" for="rememberMe">Remember
                                                                            Me</label>
                                                                    </div>
                                                                </div>

                                                                <a href="#" class="forget-pwd">Forget Password?</a>
                                                            </div>
                                                        </div>

                                                        <div class="single-input-item">
                                                            <button class="btn btn-sqr">Login</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <h6>Have A Coupon? <span data-toggle="collapse" data-target="#couponaccordion">Click
                                            Here To Enter Your Code</span></h6>
                                <div id="couponaccordion" class="collapse" data-parent="#checkOutAccordion">
                                    <div class="card-body">
                                        <div class="cart-update-option">
                                            <div class="apply-coupon-wrapper">
                                                <form action="#" method="post" class=" d-block d-md-flex">
                                                    <input type="text" placeholder="Enter Your Coupon Code" required />
                                                    <button class="btn btn-sqr">Apply Coupon</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Checkout Login Coupon Accordion End -->
                    </div>
                </div>
                <div class="row">
                    <!-- Checkout Billing Details -->
                    <div class="col-lg-6">
                        <div class="checkout-billing-details-wrap">
                            <h5 class="checkout-title">Billing Details</h5>
                            <div class="billing-form-wrap">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-input-item">
                                                <label for="f_name" class="required">First Name</label>
                                                <input type="text" id="f_name" placeholder="First Name" required />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="single-input-item">
                                                <label for="l_name" class="required">Last Name</label>
                                                <input type="text" id="l_name" placeholder="Last Name" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single-input-item">
                                        <label for="email" class="required">Email Address</label>
                                        <input type="email" id="email" placeholder="Email Address" required />
                                    </div>

                                    <div class="single-input-item">
                                        <label for="com-name">Company Name</label>
                                        <input type="text" id="com-name" placeholder="Company Name" />
                                    </div>

                                    <div class="single-input-item">
                                        <label for="country" class="required">Country</label>
                                        <select name="country nice-select" id="country">
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="India">India</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="England">England</option>
                                            <option value="London">London</option>
                                            <option value="London">London</option>
                                            <option value="Chaina">China</option>
                                        </select>
                                    </div>

                                    <div class="single-input-item">
                                        <label for="street-address" class="required mt-20">Street address</label>
                                        <input type="text" id="street-address" placeholder="Street address Line 1" required />
                                    </div>

                                    <div class="single-input-item">
                                        <input type="text" placeholder="Street address Line 2 (Optional)" />
                                    </div>

                                    <div class="single-input-item">
                                        <label for="town" class="required">Town / City</label>
                                        <input type="text" id="town" placeholder="Town / City" required />
                                    </div>

                                    <div class="single-input-item">
                                        <label for="state">State / Divition</label>
                                        <input type="text" id="state" placeholder="State / Divition" />
                                    </div>

                                    <div class="single-input-item">
                                        <label for="postcode" class="required">Postcode / ZIP</label>
                                        <input type="text" id="postcode" placeholder="Postcode / ZIP" required />
                                    </div>

                                    <div class="single-input-item">
                                        <label for="phone">Phone</label>
                                        <input type="text" id="phone" placeholder="Phone" />
                                    </div>

                                    <div class="checkout-box-wrap">
                                        <div class="single-input-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="create_pwd">
                                                <label class="custom-control-label" for="create_pwd">Create an
                                                    account?</label>
                                            </div>
                                        </div>
                                        <div class="account-create single-form-row">
                                            <p>Create an account by entering the information below. If you are a
                                                returning customer please login at the top of the page.</p>
                                            <div class="single-input-item">
                                                <label for="pwd" class="required">Account Password</label>
                                                <input type="password" id="pwd" placeholder="Account Password" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="checkout-box-wrap">
                                        <div class="single-input-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ship_to_different">
                                                <label class="custom-control-label" for="ship_to_different">Ship to a
                                                    different address?</label>
                                            </div>
                                        </div>
                                        <div class="ship-to-different single-form-row">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="single-input-item">
                                                        <label for="f_name_2" class="required">First Name</label>
                                                        <input type="text" id="f_name_2" placeholder="First Name" required />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="single-input-item">
                                                        <label for="l_name_2" class="required">Last Name</label>
                                                        <input type="text" id="l_name_2" placeholder="Last Name" required />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="single-input-item">
                                                <label for="email_2" class="required">Email Address</label>
                                                <input type="email" id="email_2" placeholder="Email Address" required />
                                            </div>

                                            <div class="single-input-item">
                                                <label for="com-name_2">Company Name</label>
                                                <input type="text" id="com-name_2" placeholder="Company Name" />
                                            </div>

                                            <div class="single-input-item">
                                                <label for="country_2" class="required">Country</label>
                                                <select name="country" id="country_2">
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="India">India</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="England">England</option>
                                                    <option value="London">London</option>
                                                    <option value="London">London</option>
                                                    <option value="Chaina">Chaina</option>
                                                </select>
                                            </div>

                                            <div class="single-input-item">
                                                <label for="street-address_2" class="required mt-20">Street address</label>
                                                <input type="text" id="street-address_2" placeholder="Street address Line 1" required />
                                            </div>

                                            <div class="single-input-item">
                                                <input type="text" placeholder="Street address Line 2 (Optional)" />
                                            </div>

                                            <div class="single-input-item">
                                                <label for="town_2" class="required">Town / City</label>
                                                <input type="text" id="town_2" placeholder="Town / City" required />
                                            </div>

                                            <div class="single-input-item">
                                                <label for="state_2">State / Divition</label>
                                                <input type="text" id="state_2" placeholder="State / Divition" />
                                            </div>

                                            <div class="single-input-item">
                                                <label for="postcode_2" class="required">Postcode / ZIP</label>
                                                <input type="text" id="postcode_2" placeholder="Postcode / ZIP" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single-input-item">
                                        <label for="ordernote">Order Note</label>
                                        <textarea name="ordernote" id="ordernote" cols="30" rows="3" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Order Summary Details -->
                    <div class="col-lg-6">
                        <div class="order-summary-details">
                            <h5 class="checkout-title">Your Order Summary</h5>
                            <div class="order-summary-content">
                                <!-- Order Summary Table -->
                                <div class="order-summary-table table-responsive text-center">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Products</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="product-details.php">Suscipit Vestibulum <strong> × 1</strong></a>
                                                </td>
                                                <td>$165.00</td>
                                            </tr>
                                            <tr>
                                                <td><a href="product-details.php">Ami Vestibulum suscipit <strong> × 4</strong></a>
                                                </td>
                                                <td>$165.00</td>
                                            </tr>
                                            <tr>
                                                <td><a href="product-details.php">Vestibulum suscipit <strong> × 2</strong></a>
                                                </td>
                                                <td>$165.00</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>Sub Total</td>
                                                <td><strong>$400</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td class="d-flex justify-content-center">
                                                    <ul class="shipping-type">
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="flatrate" name="shipping" class="custom-control-input" checked />
                                                                <label class="custom-control-label" for="flatrate">Flat
                                                                    Rate: $70.00</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="freeshipping" name="shipping" class="custom-control-input" />
                                                                <label class="custom-control-label" for="freeshipping">Free
                                                                    Shipping</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Total Amount</td>
                                                <td><strong>$470</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- Order Payment Method -->
                                <div class="order-payment-method">
                                    <div class="single-payment-method show">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="cashon" name="paymentmethod" value="cash" class="custom-control-input" checked />
                                                <label class="custom-control-label" for="cashon">Cash On Delivery</label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="cash">
                                            <p>Pay with cash upon delivery.</p>
                                        </div>
                                    </div>
                                    <div class="single-payment-method">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="directbank" name="paymentmethod" value="bank" class="custom-control-input" />
                                                <label class="custom-control-label" for="directbank">Direct Bank
                                                    Transfer</label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="bank">
                                            <p>Make your payment directly into our bank account. Please use your Order
                                                ID as the payment reference. Your order will not be shipped until the
                                                funds have cleared in our account..</p>
                                        </div>
                                    </div>
                                    <div class="single-payment-method">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="checkpayment" name="paymentmethod" value="check" class="custom-control-input" />
                                                <label class="custom-control-label" for="checkpayment">Pay with
                                                    Check</label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="check">
                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State
                                                / County, Store Postcode.</p>
                                        </div>
                                    </div>
                                    <div class="single-payment-method">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="paypalpayment" name="paymentmethod" value="paypal" class="custom-control-input" />
                                                <label class="custom-control-label" for="paypalpayment">Paypal <img src="assets/img/paypal-card.jpg" class="img-fluid paypal-card" alt="Paypal" /></label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="paypal">
                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a
                                                PayPal account.</p>
                                        </div>
                                    </div>
                                    <div class="summary-footer-area">
                                        <div class="custom-control custom-checkbox mb-20">
                                            <input type="checkbox" class="custom-control-input" id="terms" required />
                                            <label class="custom-control-label" for="terms">I have read and agree to
                                                the website <a href="index.php">terms and conditions.</a></label>
                                        </div>
                                        <button type="submit" class="btn btn-sqr">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout main wrapper end -->
    </main>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->

    <!-- footer area start -->
    <?php include'php/footer.php'; ?>
    <!-- footer area end -->

    <!-- Quick view modal start -->
    <?php include'php/modal.php';?>
    <!-- Quick view modal end -->

    <!-- offcanvas mini cart start -->
    <div class="offcanvas-minicart-wrapper">
        <div class="minicart-inner">
            <div class="offcanvas-overlay"></div>
            <div class="minicart-inner-content">
                <div class="minicart-close">
                    <i class="pe-7s-close"></i>
                </div>
                <div class="minicart-content-box">
                    <div class="minicart-item-wrapper">
                        <ul>
                            <li class="minicart-item">
                                <div class="minicart-thumb">
                                    <a href="product-details.php">
                                        <img src="assets/img/sample/product-sample.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="minicart-content">
                                    <h3 class="product-name">
                                        <a href="product-details.php">Dozen White Botanical Linen Dinner Napkins</a>
                                    </h3>
                                    <p>
                                        <span class="cart-quantity">1 <strong>&times;</strong></span>
                                        <span class="cart-price">$100.00</span>
                                    </p>
                                </div>
                                <button class="minicart-remove"><i class="pe-7s-close"></i></button>
                            </li>
                            <li class="minicart-item">
                                <div class="minicart-thumb">
                                    <a href="product-details.php">
                                        <img src="assets/img/sample/product-sample.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="minicart-content">
                                    <h3 class="product-name">
                                        <a href="product-details.php">Dozen White Botanical Linen Dinner Napkins</a>
                                    </h3>
                                    <p>
                                        <span class="cart-quantity">1 <strong>&times;</strong></span>
                                        <span class="cart-price">$80.00</span>
                                    </p>
                                </div>
                                <button class="minicart-remove"><i class="pe-7s-close"></i></button>
                            </li>
                        </ul>
                    </div>

                    <div class="minicart-pricing-box">
                        <ul>
                            <li>
                                <span>sub-total</span>
                                <span><strong>$300.00</strong></span>
                            </li>
                            <li>
                                <span>Eco Tax (-2.00)</span>
                                <span><strong>$10.00</strong></span>
                            </li>
                            <li>
                                <span>VAT (20%)</span>
                                <span><strong>$60.00</strong></span>
                            </li>
                            <li class="total">
                                <span>total</span>
                                <span><strong>$370.00</strong></span>
                            </li>
                        </ul>
                    </div>

                    <div class="minicart-button">
                        <a href="cart.php"><i class="fa fa-shopping-cart"></i> View Cart</a>
                        <a href="cart.php"><i class="fa fa-share"></i> Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas mini cart end -->

   

    <?php  include'php/js.php'; ?>
</body>

</html>
<!-- Localized -->
