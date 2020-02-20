    @extends('client.layouts.default')
    @section('content')
    <main>
        <!-- breadcrumb area start -->
        @include('client.partials.breadcrumb')
        <!-- breadcrumb area end -->

        <!-- page main wrapper start -->
        <div class="shop-main-wrapper section-padding pb-0">
            <div class="container">
                <div class="row">
                    @isset($temp_product)
                    @section('title',$temp_product['name'])
                    <!-- product details wrapper start -->
                    <div class="col-lg-12 order-1 order-lg-2">
                        <!-- product details inner end -->
                        <div class="product-details-inner">                            
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="product-large-slider">
                                        @isset($gallerymain)
                                        <div class="pro-large-img img-zoom">
                                            <img src="{{asset($gallerymain['url'])}}" alt="product-details" />
                                        </div>
                                        @endisset
                                        <div class="pro-large-img img-zoom">
                                            <img src="{{asset($temp_product['url'])}}" alt="product-details" />
                                        </div>
                                        <div class="pro-large-img img-zoom">
                                            <img src="{{asset($temp_product['url'])}}" alt="product-details" />
                                        </div>
                                        <div class="pro-large-img img-zoom">
                                            <img src="{{asset($temp_product['url'])}}" alt="product-details" />
                                        </div>
                                        <div class="pro-large-img img-zoom">
                                            <img src="{{asset($temp_product['url'])}}" alt="product-details" />
                                        </div>
                                    </div>
                                    <div class="pro-nav slick-row-10 slick-arrow-style">
                                        <div class="pro-nav-thumb">
                                            <img src="{{asset($temp_product['url'])}}" alt="product-details" />
                                        </div>
                                        <div class="pro-nav-thumb">
                                            <img src="{{asset($temp_product['url'])}}" alt="product-details" />
                                        </div>
                                        <div class="pro-nav-thumb">
                                            <img src="{{asset($temp_product['url'])}}" alt="product-details" />
                                        </div>
                                        <div class="pro-nav-thumb">
                                            <img src="{{asset($temp_product['url'])}}" alt="product-details" />
                                        </div>
                                        <div class="pro-nav-thumb">
                                            <img src="{{asset($temp_product['url'])}}" alt="product-details" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="product-details-des">
                                        <div class="manufacturer-name">
                                            <a href="">{{$temp_product['c_name']}}</a>
                                        </div>
                                        <h3 class="product-name">{{$temp_product['name']}}</h3>
                                        
                                        <div class="price-box">
                                            @if($temp_product['discount']=='')
                                            <span class="price-regular">${{number_format($temp_product['price'],2)}}</span>
                                            
                                            @else
                                            <span class="price-regular">${{number_format($temp_product['price'],2)}}</span>
                                            <span class="price-old"><del>${{number_format($temp_product['discount'],2)}}</del></span>
                                            @endif
                                        </div>

                                        <p class="pro-desc">{{$temp_product['description']}}</p>
                                            
                                        <div class="quantity-cart-box d-flex align-items-center">
                                            <h6 class="option-title">qty:</h6>
                                            <div class="quantity">
                                                <div class="pro-qty"><input type="text" value="1" min="0"></div>
                                            </div>
                                            <div class="action_link">
                                                <a class="btn btn-cart2" href="#">Add to cart</a>
                                            </div>
                                        </div>

                                        
                                        <div class="useful-links">

                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="pe-7s-like"></i>wishlist</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details inner end -->

                        <!-- product details reviews start -->
                        <div class="product-details-reviews section-padding pb-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="product-review-info">
                                        <ul class="nav review-tab">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#tab_one">description</a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_two">information</a>
                                            </li>
                                            
                                        </ul>
                                        <div class="tab-content reviews-tab">
                                            <div class="tab-pane fade show active" id="tab_one">
                                                <div class="tab-one">
                                                    <p>{{$temp_product['description']}}</p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab_two">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                      <tr>{{$temp_product['additional_information']}}</tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details reviews end -->
                    </div>
                    <!-- product details wrapper end -->
                    @endisset
                </div>
            </div>
        </div>
        <!-- page main wrapper end -->

        <!-- related products area start -->
        <section class="related-products section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- section title start -->
                        <div class="section-title text-center">
                            <h2 class="title">Related Products</h2>
                            <p class="sub-title">Add related products to weekly lineup</p>
                        </div>
                        <!-- section title start -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-carousel-4 slick-row-10 slick-arrow-style">
                            @isset($temp_products)
                            @foreach ($temp_products as $temp_product)
                            <!-- product item start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="product-details">
                                        <img class="pri-img" src="{{asset($temp_product['thumbnail'])}}" alt="product">
                                        <img class="sec-img" src="{{asset($temp_product['thumbnail'])}}" alt="product">
                                    </a>
                                    <div class="product-badge">
                                        <div class="product-label new">
                                            <span>new</span>
                                        </div>

                                    </div>
                                    <div class="button-group">
                                        <a href="wishlist" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                                        <a href="chat" data-toggle="tooltip" data-placement="left" title="Message"><i class="pe-7s-chat"></i></a>
                                    </div>
                                    <div class="cart-hover">
                                        <button class="btn btn-cart">add to cart</button>
                                    </div>
                                </figure>
                                <div class="product-caption text-center">
                                    <div class="product-identity">
                                        <p class="manufacturer-name"><a href="product-details">Gold</a></p>
                                    </div>
                                    
                                    <h6 class="product-name">
                                        <a href="product-details">{{$temp_product['name']}}</a>
                                    </h6>
                                    <div class="price-box">
                                        <span class="price-regular">${{number_format($temp_product['price'],2)}}</span>
                                        <span class="price-old"><del>${{number_format($temp_product['discount'],2)}}</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- product item end -->
                            @endforeach
                            @endisset    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- related products area end -->
    </main>
    @endsection