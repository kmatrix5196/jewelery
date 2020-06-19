	@extends('client.layouts.default')
	@section('title','Jewellery Home')
	@section('content')
	@php ($a=0)
	@auth('company')
	@php ($a=1)
	@endauth

		<!-- hero slider area start -->
		<section class="slider-area">
			<div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
				<!-- single slider item start -->
				<div class="hero-single-slide hero-overlay">
					<div class="hero-slider-item bg-img" data-bg="{{asset('img/sample/slider1.jpg')}}">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="hero-slider-content slide-1">
										<h2 class="slide-title">Caption<span>Collection</span></h2>
										<h4 class="slide-desc">Description</h4>
										<a href="/home/shop" class="btn btn-hero">Shop Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- single slider item start -->

				<!-- single slider item start -->
				<div class="hero-single-slide hero-overlay">
					<div class="hero-slider-item bg-img" data-bg="{{asset('img/sample/slider2.jpg')}}">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="hero-slider-content slide-2 float-md-right float-none">
										<h2 class="slide-title" ><p style="color:black">Caption</p><span style="color:black">Collection</span></h2>
										<h4 class="slide-desc" style="color:black">Description</h4>
										<a href="/home/shop" class="btn btn-hero" >Shop Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- single slider item start -->

				<!-- single slider item start -->
				<div class="hero-single-slide hero-overlay">
					<div class="hero-slider-item bg-img" data-bg="{{asset('img/sample/slider3.jpg')}}">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="hero-slider-content slide-3">
										<h2 class="slide-title">Caption<span>Collection</span></h2>
										<h4 class="slide-desc">Description</h4>
										<a href="/home/shop" class="btn btn-hero">Shop Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- single slider item end -->
			</div>
		</section>
		<!-- hero slider area end -->

		<!-- twitter feed area start -->
		<div class="twitter-feed">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="twitter-feed-content text-center">
							<p></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- twitter feed area end -->


		<!-- banner statistics area start -->
		<div class="banner-statistics-area">
			<div class="container">
				<div class="row row-20 mtn-20">
					<div class="col-sm-6">
						<figure class="banner-statistics mt-20">
							<a href="/home/shop/category/Necklaces">
								<img src="{{asset('img/sample/necklace.jpg')}}" alt="product banner">
							</a>
							<div class="banner-content text-right">
								<h5 class="banner-text1">Necklaces</h5>
								<h2 class="banner-text2">Caption<span>Title</span></h2>
								<a href="/home/shop/category/Necklaces" class="btn btn-text">Shop Now</a>
							</div>
						</figure>
					</div>
					<div class="col-sm-6">
						<figure class="banner-statistics mt-20">
							<a href="/home/shop/category/Barcelets">
								<img src="{{asset('img/sample/ring.jpg')}}" alt="product banner">
							</a>
							<div class="banner-content text-right">
								<h5 class="banner-text1">Barcelets</h5>
								<h2 class="banner-text2">Caption<span>Title</span></h2>
								<a href="/home/shop/category/Barcelets" class="btn btn-text">Shop Now</a>
							</div>
						</figure>
					</div>
					<div class="col-sm-6">
						<figure class="banner-statistics mt-20">
							<a href="/home/shop/category/Rings">
								<img src="{{asset('img/sample/banner-top.jpg')}}" alt="product banner">
							</a>
							<div class="banner-content text-right">
								<h5 class="banner-text1">Rings</h5>
								<h2 class="banner-text2">Caption<span>Title</span></h2>
								<a href="/home/shop/category/Rings" class="btn btn-text">Shop Now</a>
							</div>
						</figure>
					</div>
					<div class="col-sm-6">
						<figure class="banner-statistics mt-20">
							<a href="/home/shop/category/Earrings">
								<img src="{{asset('img/sample/earrings.jpg')}}" alt="product banner">
							</a>
							<div class="banner-content text-right">
								<h5 class="banner-text1">Earrings</h5>
								<h2 class="banner-text2">Caption<span>Title</span></h2>
								<a href="/home/shop/category/Earrings" class="btn btn-text">Shop Now</a>
							</div>
						</figure>
					</div>
				</div>
			</div>
		</div>
		<!-- banner statistics area end -->

		<!-- product area start -->

		<!-- product area end -->   

		<!-- product banner statistics area start -->

		<!-- product banner statistics area end -->

		<!-- featured product area start -->
		<section class="feature-product section-padding">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- section title start -->
						<div class="section-title text-center">
							<h2 class="title bowly-font"><span class="lgo-clr">Featured </span>products</h2>

						</div>
						<!-- section title start -->
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						
						   
							@isset($temp_products)
							@foreach ($temp_products as $temp_product)
							<div class="col-4">
							<!-- product item start -->
							<div class="product-item">
								<figure class="product-thumb">
									<a href="/home/shop/{{$temp_product['id']}}">
										<img class="pri-img" src="{{asset($temp_product['url'])}}" alt="product">
										<img class="sec-img" src="{{asset($temp_product['url'])}}" alt="product">
									</a>
									<div class="product-badge">
									</div>
									<div class="button-group">
										@auth('user')
										<a href="/home/shop/add_to_wishlist/{{$temp_product['id']}}" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
										@endauth
                                        <a href="quick_view" data-toggle="modal" data-target="#quick_view_{{$temp_product['id']}}" span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                                         @auth('user')<a href="#" data-toggle="tooltip" data-placement="left" title="Message" onclick="createCon({{$temp_product['id']}},{{$temp_product['company_id']}})"><i class="pe-7s-chat"></i></a>@endauth
									</div>
									@if($a==0)
									<div class="cart-hover">
										<a href="/home/shop/{{$temp_product['id']}}"><button class="btn btn-cart">add to cart</button></a>
									</div>
									@endif
								</figure>
								<div class="product-caption text-center">


									<h6 class="product-name">
										<a href="/home/shop/{{$temp_product['id']}}">{{$temp_product['name']}}</a>
									</h6>
									<div class="price-box">
										 @if($temp_product['discount']=='')
                                            <span class="price-regular">${{number_format($temp_product['price'],2)}}</span>
                                            
                                            @else
                                            <span class="price-regular">${{number_format($temp_product['discount'],2)}}</span>
                                            <span class="price-old"><del>${{number_format($temp_product['price'],2)}}</del></span>
                                            @endif
									</div>
								</div>
							</div>
							<!-- product item end -->
							</div>
							@endforeach
							@endisset
						
					</div>
				</div>
			</div>
		</section>
		<!-- featured product area end -->

		<!-- testimonial area start -->

		<!-- testimonial area end -->

		<!-- group product start -->

		<section class="group-product-area section-padding">
			<div class="container">
				<div class="row">
					<!-- <div class="col-lg-6">
						<div class="group-product-banner">
							<figure class="banner-statistics">
								<a href="shop">
									<img src="{{asset('img/sample/img-bottom-banner.jpg')}}" alt="product banner">
								</a>
								<div class="banner-content banner-content_style3 text-center">
									<h2 class="banner-text2 bowly-font">Best Selling Companies</h2>
									<a href="shop" class="btn btn-text">Shop Now</a>
								</div>
							</figure>
						</div>
					</div> -->
					
					<div class="col-lg-4">
						<div class="categories-group-wrapper">
							<!-- section title start -->
							<div class="section-title-append">
								<h4>New Arrival products</h4>
								<div class="slick-append"></div>
							</div>
							<!-- section title start -->

							<!-- group list carousel start -->
							
							<div class="group-list-item-wrapper">
								<div class="group-list-carousel">
									@isset($temp_products)
									@foreach ($temp_products as $temp_product)
									<!-- group list item start -->
									<div class="group-slide-item">
										<div class="group-item">
											<div class="group-item-thumb">
												<a href="/home/shop/{{$temp_product['id']}}">
													<img src="{{asset($temp_product['url'])}}" alt="">
												</a>
											</div>
											<div class="group-item-desc">
												<h5 class="group-product-name">
													<a href="/home/shop/{{$temp_product['id']}}">{{$temp_product['name']}}</a>
												</h5>
												<div class="price-box">
													@if($temp_product['discount']=='')
                                            <span class="price-regular">${{number_format($temp_product['price'],2)}}</span>
                                            
                                            @else
                                            <span class="price-regular">${{number_format($temp_product['discount'],2)}}</span>
                                            <span class="price-old"><del>${{number_format($temp_product['price'],2)}}</del></span>
                                            @endif
												</div>
											</div>
										</div>
									</div>
									<!-- group list item end -->
									@endforeach
									@endisset
								</div>
							</div>
							<!-- group list carousel start -->
						</div>
					</div>
					
					<div class="col-lg-4">
						<div class="categories-group-wrapper">
							<!-- section title start -->
							<div class="section-title-append">
								<h4>Best Design Products</h4>
								<div class="slick-append"></div>
							</div>
							<!-- section title start -->

							<!-- group list carousel start -->
							<div class="group-list-item-wrapper">
								<div class="group-list-carousel">
									@isset($design_products)
									@foreach($design_products as $design_product)
									<!-- group list item start -->
									<div class="group-slide-item">
										<div class="group-item">
											<div class="group-item-thumb">
												<a href="/home/shop/{{$design_product['id']}}">
													<img src="{{asset($design_product['url'])}}" alt="">
												</a>
											</div>
											<div class="group-item-desc">
												<h5 class="group-product-name"><a href="/home/shop/{{$design_product['id']}}">
													{{$design_product['name']}}</a></h5>
												<div class="price-box">
													 @if($design_product['discount']=='')
                                            <span class="price-regular">${{number_format($design_product['price'],2)}}</span>
                                            
                                            @else
                                            <span class="price-regular">${{number_format($design_product['discount'],2)}}</span>
                                            <span class="price-old"><del>${{number_format($design_product['price'],2)}}</del></span>
                                            @endif
												</div>
											</div>
										</div>
									</div>
									@endforeach
									@endisset
									<!-- group list item end -->

									
								</div>
							</div>
							<!-- group list carousel start -->
						</div>
					</div>
					<div class="col-lg-4">
						<div class="categories-group-wrapper">
							<!-- section title start -->
							<div class="section-title-append">
								<h4>Value Products</h4>
								<div class="slick-append"></div>
							</div>
							<!-- section title start -->

							<!-- group list carousel start -->
							<div class="group-list-item-wrapper">
								<div class="group-list-carousel">
									@isset($value_products)
									@foreach($value_products as $value_product)
									<!-- group list item start -->
									<div class="group-slide-item">
										<div class="group-item">
											<div class="group-item-thumb">
												<a href="/home/shop/{{$value_product['id']}}">
													<img src="{{asset($value_product['url'])}}" alt="">
												</a>
											</div>
											<div class="group-item-desc">
												<h5 class="group-product-name"><a href="/home/shop/{{$value_product['id']}}">
													{{$value_product['name']}}</a></h5>
												<div class="price-box">
													@if($value_product['discount']=='')
                                            <span class="price-regular">${{number_format($value_product['price'],2)}}</span>
                                            
                                            @else
                                            <span class="price-regular">${{number_format($value_product['discount'],2)}}</span>
                                            <span class="price-old"><del>${{number_format($value_product['price'],2)}}</del></span>
                                            @endif
												</div>
											</div>
										</div>
									</div>
									@endforeach
									@endisset
									<!-- group list item end -->

									
								</div>
							</div>
							<!-- group list carousel start -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- group product end -->
	@endsection
