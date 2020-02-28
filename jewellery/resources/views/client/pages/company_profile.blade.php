@extends('client.layouts.default')
@section('title','Company Profile')
@section('content')
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">
                                   <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                              width="30" height="30"
                                                              viewBox="0 0 172 172"
                                                              style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M94.0625,24.28723c-1.04141,0 -2.08229,0.37111 -2.82135,1.11017l-72.2948,72.15832c-1.6125,1.6125 -1.6125,4.1672 0,5.64532l11.42188,11.42188c0.80625,0.80625 1.74635,1.20728 2.82135,1.20728c1.075,0 2.1521,-0.40103 2.82397,-1.20728l58.04895,-57.91772l43,43v54.15417c-3.89687,1.34375 -6.85417,4.70313 -7.7948,8.73438h-16.3927v-55.09375c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125h-29.5625c-2.28437,0 -4.03125,1.74688 -4.03125,4.03125v55.09375h-24.1875v-36.28125c0,-2.28437 -1.74687,-4.03125 -4.03125,-4.03125c-2.28438,0 -4.03125,1.74688 -4.03125,4.03125v9.94427c-6.58438,1.6125 -11.68958,6.71927 -13.03333,13.30365c-6.58438,1.34375 -11.82552,6.58333 -13.30365,13.03333h-11.28803c-2.28438,0 -4.03125,1.74687 -4.03125,4.03125c0,2.28438 1.74687,4.03125 4.03125,4.03125h127.65625c2.28438,0 4.03125,-1.74687 4.03125,-4.03125v-1.34375c0,-2.28438 1.74687,-4.03125 4.03125,-4.03125c2.28438,0 4.03125,1.74687 4.03125,4.03125v1.34375c0,2.28438 1.74687,4.03125 4.03125,4.03125h4.03125c2.28438,0 4.03125,-1.74687 4.03125,-4.03125c0,-2.28438 -1.74687,-4.03125 -4.03125,-4.03125h-0.2677c-0.94063,-4.03125 -3.89792,-7.39062 -7.7948,-8.73437v-46.09167l6.8526,6.85522c0.80625,0.80625 1.74635,1.20728 2.82135,1.20728c1.075,0 2.1521,-0.40103 2.82397,-1.20728l11.42188,-11.42187c1.6125,-1.6125 1.6125,-4.1672 0,-5.64532l-72.16095,-72.15832c-0.73906,-0.73906 -1.77994,-1.11017 -2.82135,-1.11017zM94.0625,33.99792l66.51563,66.51563l-5.6427,5.6427l-58.05157,-57.9151c-0.80625,-0.80625 -1.74635,-1.2099 -2.82135,-1.2099c-1.075,0 -2.0151,0.40365 -2.82135,1.2099l-58.05157,57.9151l-5.6427,-5.6427zM86,135.71875c2.28437,0 4.03125,1.74687 4.03125,4.03125c0,2.28438 -1.74688,4.03125 -4.03125,4.03125c-2.28437,0 -4.03125,-1.74687 -4.03125,-4.03125c0,-2.28438 1.74688,-4.03125 4.03125,-4.03125zM43,144.72083v17.87292h-17.87292c1.47813,-3.225 4.70417,-5.375 8.46667,-5.375c2.28437,0 4.03125,-1.74687 4.03125,-4.03125c0,-3.7625 2.15,-6.98855 5.375,-8.46667zM166.625,162.59375c-2.2264,0 -4.03125,1.80485 -4.03125,4.03125c0,2.2264 1.80485,4.03125 4.03125,4.03125c2.2264,0 4.03125,-1.80485 4.03125,-4.03125c0,-2.2264 -1.80485,-4.03125 -4.03125,-4.03125z"></path></g></g></svg>
                                                            </a></li>
                            <li class="breadcrumb-item active" aria-current="page">company profile</li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- compare main wrapper start -->
    @isset($company)
    <div class="compare-page-wrapper section-padding" style="padding-bottom:140px;">
        <div class="container">
            <div class="section-bg-color">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-thumb"><br><br><br>
                            <img src="{{asset($company->profile_pic)}}" alt="about thumb">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-content">
                            <h3 class="about-title bowly-font" style="color:#c29958;">{{$company->name}}</h3>
                            <button class="btn btn-zg2">Chat Now</button>
                            <br>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Compare Page Content Start -->
                        <div class="compare-page-content-wrap">
                            <div class="compare-table table-responsive">
                                <table class="table table-bordered mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="first-column HEX Creative-font">Business Type</td>
                                            <td class="first-column">{{$company->business_type}}</td>
                                        </tr>
                                        <tr>
                                            <td class="first-column HEX Creative-font">Main Product</td>
                                            <td class="pro-price">{{$company->main_product}}</td>
                                        </tr>
                                        <tr>
                                            <td class="first-column HEX Creative-font">Location</td>
                                            <td class="first-column">{{$company->location}}</td>
                                        </tr>
                                        <tr>
                                            <td class="first-column HEX Creative-font">Year Estsblished</td>
                                            <td class="pro-color">{{$company->year_established}}</td>
                                        </tr>
                                        <tr>
                                            <td class="first-column HEX Creative-font">Email</td>
                                            <td class="pro-color">{{$company->email}}</td>
                                        </tr>
                                        <tr>
                                            <td class="first-column HEX Creative-font">Phone</td>
                                            <td class="pro-color">{{$company->phone}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                        <!-- Compare Page Content End -->
                </div>
            </div>
        </div>
    </div>
    @endisset
    <!-- compare main wrapper end -->
    <br><br><br>
    <!-- section title start -->
    <div class="section-title text-center">
        <h2 class="title bowly-font"><span class="lgo-clr">Company </span>products</h2>
    </div>
    <!-- section title start -->

    <!-- product start -->
    @isset($products)

    <div class="shop-main-wrapper section-padding" style="padding-top:40px;">
        <div class="container">

            <div class="row">
                <!-- shop main wrapper start -->
                <div class="col-4">
                    <div class="shop-product-wrapper">

                        <!-- product item list wrapper start -->
                        <div class="shop-product-wrap grid-view row mbn-30">

                            <!-- product single item start -->
                            <div class="col-md-4 col-sm-6 col-lg-4">
                              @foreach($products as $product)
                                <!-- product grid start -->
                                <div class="product-item">
                                    <figure class="product-thumb">
                                        <a href="/home/shop/{{$product['id']}}">
                                            <img class="pri-img" src="{{asset($product['url'])}}" alt="product">
                                            <img class="sec-img" src="{{asset($product['url'])}}" alt="product">
                                        </a>
                                        <div class="product-badge">
                                        </div>
                                        <div class="button-group">
                                            @auth('user')
                                            <a href="/home/shop/add_to_wishlist/{{$product['id']}}" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                            @endauth
                                            <a href="quick_view" data-toggle="modal" data-target="#quick_view_{{$product['id']}}" span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                                            @auth('user')
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Message" onclick="createCon({{$product['id']}},{{$product['company_id']}})"><i class="pe-7s-chat"></i></a>
                                            @endauth
                                        </div>
                                        <div class="cart-hover">
                                            <a href="/home/shop/{{$product['id']}}"><button class="btn btn-cart">add to cart</button></a>
                                        </div>
                                    </figure>
                                    <div class="product-caption text-center">


                                        <h6 class="product-name">
                                            <a href="product-details">{{$product['name']}}</a>
                                        </h6>
                                        <div class="price-box">
                                            @if($product['discount']=='')
                                        <span class="price-regular">${{number_format($product['price'],2)}}</span>

                                        @else
                                        <span class="price-regular">${{number_format($product['discount'],2)}}</span>
                                        <span class="price-old"><del>${{number_format($product['price'],2)}}</del></span>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid end -->
                                @endforeach
                          @endisset
                                </div>

                <!-- shop main wrapper end -->
                            </div>
                        </div>

    </div>
    <!-- product end -->
</main>
@endsection
