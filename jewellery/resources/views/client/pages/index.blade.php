	@extends('client.layouts.default')
	@section('title','Jewellery Home')
	@section('content')

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
										<a href="shop" class="btn btn-hero">Shop Now</a>
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
										<a href="shop" class="btn btn-hero" >Shop Now</a>
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
										<a href="shop" class="btn btn-hero">Shop Now</a>
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
							<a href="shop">
								<img src="{{asset('img/sample/necklace.jpg')}}" alt="product banner">
							</a>
							<div class="banner-content text-right">
								<h5 class="banner-text1">Category</h5>
								<h2 class="banner-text2">Caption<span>Title</span></h2>
								<a href="shop" class="btn btn-text">Shop Now</a>
							</div>
						</figure>
					</div>
					<div class="col-sm-6">
						<figure class="banner-statistics mt-20">
							<a href="shop">
								<img src="{{asset('img/sample/ring.jpg')}}" alt="product banner">
							</a>
							<div class="banner-content text-right">
								<h5 class="banner-text1">Category</h5>
								<h2 class="banner-text2">Caption<span>Title</span></h2>
								<a href="shop" class="btn btn-text">Shop Now</a>
							</div>
						</figure>
					</div>
					<div class="col-sm-6">
						<figure class="banner-statistics mt-20">
							<a href="shop">
								<img src="{{asset('img/sample/banner-top.jpg')}}" alt="product banner">
							</a>
							<div class="banner-content text-right">
								<h5 class="banner-text1">Category</h5>
								<h2 class="banner-text2">Caption<span>Title</span></h2>
								<a href="shop" class="btn btn-text">Shop Now</a>
							</div>
						</figure>
					</div>
					<div class="col-sm-6">
						<figure class="banner-statistics mt-20">
							<a href="shop">
								<img src="{{asset('img/sample/earrings.jpg')}}" alt="product banner">
							</a>
							<div class="banner-content text-right">
								<h5 class="banner-text1">Category</h5>
								<h2 class="banner-text2">Caption<span>Title</span></h2>
								<a href="shop" class="btn btn-text">Shop Now</a>
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
						<div class="product-carousel-4_2 slick-row-10 slick-arrow-style">
						   

							<!-- product item start -->
							<div class="product-item">
								<figure class="product-thumb">
									<a href="product-details">
										<img class="pri-img" src="{{asset('img/sample/product-sample.jpg')}}" alt="product">
										<img class="sec-img" src="{{asset('img/sample/product-sample.jpg')}}" alt="product">
									</a>
									<div class="product-badge">
									</div>
									<div class="button-group">
										<a href="wishlist" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
										<a href="shop" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
										<a href="chat" data-toggle="tooltip" data-placement="left" title="Message"><i class="pe-7s-chat"></i></a>
									</div>
									<div class="cart-hover">
										<button class="btn btn-cart">add to cart</button>
									</div>
								</figure>
								<div class="product-caption text-center">


									<h6 class="product-name">
										<a href="product-details">Title</a>
									</h6>
									<div class="price-box">
										<span class="price-regular">$60.00</span>
										<span class="price-old"><del>$70.00</del></span>
									</div>
								</div>
							</div>
							<!-- product item end -->
							<!-- product item start -->
							<div class="product-item">
								<figure class="product-thumb">
									<a href="product-details">
										<img class="pri-img" src="{{asset('img/sample/product-sample.jpg')}}" alt="product">
										<img class="sec-img" src="{{asset('img/sample/product-sample.jpg')}}" alt="product">
									</a>
									<div class="product-badge">
									</div>
									<div class="button-group">
										<a href="wishlist" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
										<a href="shop" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
										<a href="chat" data-toggle="tooltip" data-placement="left" title="Message"><i class="pe-7s-chat"></i></a>
									</div>
									<div class="cart-hover">
										<button class="btn btn-cart">add to cart</button>
									</div>
								</figure>
								<div class="product-caption text-center">


									<h6 class="product-name">
										<a href="product-details">Title</a>
									</h6>
									<div class="price-box">
										<span class="price-regular">$60.00</span>
										<span class="price-old"><del>$70.00</del></span>
									</div>
								</div>
							</div>
							<!-- product item end -->
							<!-- product item start -->
							<div class="product-item">
								<figure class="product-thumb">
									<a href="product-details">
										<img class="pri-img" src="{{asset('img/sample/product-sample.jpg')}}" alt="product">
										<img class="sec-img" src="{{asset('img/sample/product-sample.jpg')}}" alt="product">
									</a>
									<div class="product-badge">
									</div>
									<div class="button-group">
										<a href="wishlist" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
										<a href="shop" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
										<a href="chat" data-toggle="tooltip" data-placement="left" title="Message"><i class="pe-7s-chat"></i></a>
									</div>
									<div class="cart-hover">
										<button class="btn btn-cart">add to cart</button>
									</div>
								</figure>
								<div class="product-caption text-center">


									<h6 class="product-name">
										<a href="product-details">Title</a>
									</h6>
									<div class="price-box">
										<span class="price-regular">$60.00</span>
										<span class="price-old"><del>$70.00</del></span>
									</div>
								</div>
							</div>
							<!-- product item end -->
							<!-- product item start -->
							<div class="product-item">
								<figure class="product-thumb">
									<a href="product-details">
										<img class="pri-img" src="{{asset('img/sample/product-sample.jpg')}}" alt="product">
										<img class="sec-img" src="{{asset('img/sample/product-sample.jpg')}}" alt="product">
									</a>
									<div class="product-badge">
									</div>
									<div class="button-group">
										<a href="wishlist" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
										<a href="shop" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
										<a href="chat" data-toggle="tooltip" data-placement="left" title="Message"><i class="pe-7s-chat"></i></a>
									</div>
									<div class="cart-hover">
										<button class="btn btn-cart">add to cart</button>
									</div>
								</figure>
								<div class="product-caption text-center">


									<h6 class="product-name">
										<a href="product-details">Title</a>
									</h6>
									<div class="price-box">
										<span class="price-regular">$60.00</span>
										<span class="price-old"><del>$70.00</del></span>
									</div>
								</div>
							</div>
							<!-- product item end -->
							<!-- product item start -->
							<div class="product-item">
								<figure class="product-thumb">
									<a href="product-details">
										<img class="pri-img" src="{{asset('img/sample/product-sample.jpg')}}" alt="product">
										<img class="sec-img" src="{{asset('img/sample/product-sample.jpg')}}" alt="product">
									</a>
									<div class="product-badge">
									</div>
									<div class="button-group">
										<a href="wishlist" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
										<a href="shop" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
										<a href="chat" data-toggle="tooltip" data-placement="left" title="Message"><i class="pe-7s-chat"></i></a>
									</div>
									<div class="cart-hover">
										<button class="btn btn-cart">add to cart</button>
									</div>
								</figure>
								<div class="product-caption text-center">


									<h6 class="product-name">
										<a href="product-details">Title</a>
									</h6>
									<div class="price-box">
										<span class="price-regular">$60.00</span>
										<span class="price-old"><del>$70.00</del></span>
									</div>
								</div>
							</div>
							<!-- product item end -->
							<!-- product item start -->
							<div class="product-item">
								<figure class="product-thumb">
									<a href="product-details">
										<img class="pri-img" src="{{asset('img/sample/product-sample.jpg')}}" alt="product">
										<img class="sec-img" src="{{asset('img/sample/product-sample.jpg')}}" alt="product">
									</a>
									<div class="product-badge">
									</div>
									<div class="button-group">
										<a href="wishlist" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
										<a href="shop" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
										<a href="chat" data-toggle="tooltip" data-placement="left" title="Message"><i class="pe-7s-chat"></i></a>
									</div>
									<div class="cart-hover">
										<button class="btn btn-cart">add to cart</button>
									</div>
								</figure>
								<div class="product-caption text-center">


									<h6 class="product-name">
										<a href="product-details">Title</a>
									</h6>
									<div class="price-box">
										<span class="price-regular">$60.00</span>
										<span class="price-old"><del>$70.00</del></span>
									</div>
								</div>
							</div>
							<!-- product item end -->
							<!-- product item start -->
							<div class="product-item">
								<figure class="product-thumb">
									<a href="product-details">
										<img class="pri-img" src="{{asset('img/sample/product-sample.jpg')}}" alt="product">
										<img class="sec-img" src="{{asset('img/sample/product-sample.jpg')}}" alt="product">
									</a>
									<div class="product-badge">
									</div>
									<div class="button-group">
										<a href="wishlist" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
										<a href="shop" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
										<a href="chat" data-toggle="tooltip" data-placement="left" title="Message"><i class="pe-7s-chat"></i></a>
									</div>
									<div class="cart-hover">
										<button class="btn btn-cart">add to cart</button>
									</div>
								</figure>
								<div class="product-caption text-center">


									<h6 class="product-name">
										<a href="product-details">Title</a>
									</h6>
									<div class="price-box">
										<span class="price-regular">$60.00</span>
										<span class="price-old"><del>$70.00</del></span>
									</div>
								</div>
							</div>
							<!-- product item end -->

							<!-- product item start -->
							<div class="product-item">
								<figure class="product-thumb">
									<a href="product-details">
										<img class="pri-img" src="{{asset('img/sample/product-sample.jpg')}}" alt="product">
										<img class="sec-img" src="{{asset('img/sample/product-sample.jpg')}}" alt="product">
									</a>
									<div class="product-badge">
									</div>
									<div class="button-group">
										<a href="wishlist" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
										<a href="shop" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
										<a href="chat" data-toggle="tooltip" data-placement="left" title="Message"><i class="pe-7s-chat"></i></a>
									</div>
									<div class="cart-hover">
										<button class="btn btn-cart">add to cart</button>
									</div>
								</figure>
								<div class="product-caption text-center">


									<h6 class="product-name">
										<a href="product-details">Title</a>
									</h6>
									<div class="price-box">
										<span class="price-regular">$60.00</span>
										<span class="price-old"><del>$70.00</del></span>
									</div>
								</div>
							</div>
							<!-- product item end -->  <!-- product item start -->
							  <div class="product-item">
								  <figure class="product-thumb">
									  <a href="product-details">
										  <img class="pri-img" src="{{asset('img/sample/product-sample.jpg')}}" alt="product">
										  <img class="sec-img" src="{{asset('img/sample/product-sample.jpg')}}" alt="product">
									  </a>
									  <div class="product-badge">
									  </div>
									  <div class="button-group">
										  <a href="wishlist" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
										  <a href="shop" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
										  <a href="chat" data-toggle="tooltip" data-placement="left" title="Message"><i class="pe-7s-chat"></i></a>
									  </div>
									  <div class="cart-hover">
										  <button class="btn btn-cart">add to cart</button>
									  </div>
								  </figure>
								  <div class="product-caption text-center">


									  <h6 class="product-name">
										  <a href="product-details">Title</a>
									  </h6>
									  <div class="price-box">
										  <span class="price-regular">$60.00</span>
										  <span class="price-old"><del>$70.00</del></span>
									  </div>
								  </div>
							  </div>
							  <!-- product item end -->

						</div>
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
					<div class="col-lg-6">
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
					</div>
					<div class="col-lg-3">
						<div class="categories-group-wrapper">
							<!-- section title start -->
							<div class="section-title-append">
								<h4>New Arrival product</h4>
								<div class="slick-append"></div>
							</div>
							<!-- section title start -->

							<!-- group list carousel start -->
							<div class="group-list-item-wrapper">
								<div class="group-list-carousel">
									<!-- group list item start -->
									<div class="group-slide-item">
										<div class="group-item">
											<div class="group-item-thumb">
												<a href="product-details">
													<img src="{{asset('img/sample/product-sample.jpg')}}" alt="">
												</a>
											</div>
											<div class="group-item-desc">
												<h5 class="group-product-name"><a href="product-details">
														Title</a></h5>
												<div class="price-box">
													<span class="price-regular">$50.00</span>
													<span class="price-old"><del>$29.99</del></span>
												</div>
											</div>
										</div>
									</div>
									<!-- group list item end -->

									<!-- group list item start -->
									<div class="group-slide-item">
										<div class="group-item">
											<div class="group-item-thumb">
												<a href="product-details">
													<img src="{{asset('img/sample/product-sample.jpg')}}" alt="">
												</a>
											</div>
											<div class="group-item-desc">
												<h5 class="group-product-name"><a href="product-details">
													Title</a></h5>
												<div class="price-box">
													<span class="price-regular">$55.00</span>
													<span class="price-old"><del>$30.00</del></span>
												</div>
											</div>
										</div>
									</div>
									<!-- group list item end -->

									<!-- group list item start -->
									<div class="group-slide-item">
										<div class="group-item">
											<div class="group-item-thumb">
												<a href="product-details">
													<img src="{{asset('img/sample/product-sample.jpg')}}" alt="">
												</a>
											</div>
											<div class="group-item-desc">
												<h5 class="group-product-name"><a href="product-details">
													Title</a></h5>
												<div class="price-box">
													<span class="price-regular">$45.00</span>
													<span class="price-old"><del>$25.00</del></span>
												</div>
											</div>
										</div>
									</div>
									<!-- group list item end -->

									<!-- group list item start -->
									<div class="group-slide-item">
										<div class="group-item">
											<div class="group-item-thumb">
												<a href="product-details">
													<img src="{{asset('img/sample/product-sample.jpg')}}" alt="">
												</a>
											</div>
											<div class="group-item-desc">
												<h5 class="group-product-name"><a href="product-details">
														Title</a></h5>
												<div class="price-box">
													<span class="price-regular">$50.00</span>
													<span class="price-old"><del>$29.99</del></span>
												</div>
											</div>
										</div>
									</div>
									<!-- group list item end -->

									<!-- group list item start -->
									<div class="group-slide-item">
										<div class="group-item">
											<div class="group-item-thumb">
												<a href="product-details">
													<img src="{{asset('img/sample/product-sample.jpg')}}" alt="">
												</a>
											</div>
											<div class="group-item-desc">
												<h5 class="group-product-name"><a href="product-details">
														Title</a></h5>
												<div class="price-box">
													<span class="price-regular">$90.00</span>
													<span class="price-old"><del>$100.</del></span>
												</div>
											</div>
										</div>
									</div>
									<!-- group list item end -->

									<!-- group list item start -->
									<div class="group-slide-item">
										<div class="group-item">
											<div class="group-item-thumb">
												<a href="product-details">
													<img src="{{asset('img/sample/product-sample.jpg')}}" alt="">
												</a>
											</div>
											<div class="group-item-desc">
												<h5 class="group-product-name"><a href="product-details">
													Title</a></h5>
												<div class="price-box">
													<span class="price-regular">$20.00</span>
													<span class="price-old"><del>$30.00</del></span>
												</div>
											</div>
										</div>
									</div>
									<!-- group list item end -->

									<!-- group list item start -->
									<div class="group-slide-item">
										<div class="group-item">
											<div class="group-item-thumb">
												<a href="product-details">
													<img src="{{asset('img/sample/product-sample.jpg')}}" alt="">
												</a>
											</div>
											<div class="group-item-desc">
												<h5 class="group-product-name"><a href="product-details">
													Title</a></h5>
												<div class="price-box">
													<span class="price-regular">$55.00</span>
													<span class="price-old"><del>$30.00</del></span>
												</div>
											</div>
										</div>
									</div>
									<!-- group list item end -->

									<!-- group list item start -->
									<div class="group-slide-item">
										<div class="group-item">
											<div class="group-item-thumb">
												<a href="product-details">
													<img src="{{asset('img/sample/product-sample.jpg')}}" alt="">
												</a>
											</div>
											<div class="group-item-desc">
												<h5 class="group-product-name"><a href="product-details">
														Title</a></h5>
												<div class="price-box">
													<span class="price-regular">$45.00</span>
													<span class="price-old"><del>$25.00</del></span>
												</div>
											</div>
										</div>
									</div>
									<!-- group list item end -->
								</div>
							</div>
							<!-- group list carousel start -->
						</div>
					</div>
					<div class="col-lg-3">
						<div class="categories-group-wrapper">
							<!-- section title start -->
							<div class="section-title-append">
								<h4>Best Seller product</h4>
								<div class="slick-append"></div>
							</div>
							<!-- section title start -->

							<!-- group list carousel start -->
							<div class="group-list-item-wrapper">
								<div class="group-list-carousel">
									<!-- group list item start -->
									<div class="group-slide-item">
										<div class="group-item">
											<div class="group-item-thumb">
												<a href="product-details">
													<img src="{{asset('img/sample/product-sample.jpg')}}" alt="">
												</a>
											</div>
											<div class="group-item-desc">
												<h5 class="group-product-name"><a href="product-details">
													Title</a></h5>
												<div class="price-box">
													<span class="price-regular">$50.00</span>
													<span class="price-old"><del>$29.99</del></span>
												</div>
											</div>
										</div>
									</div>
									<!-- group list item end -->

									<!-- group list item start -->
									<div class="group-slide-item">
										<div class="group-item">
											<div class="group-item-thumb">
												<a href="product-details">
													<img src="{{asset('img/sample/product-sample.jpg')}}" alt="">
												</a>
											</div>
											<div class="group-item-desc">
												<h5 class="group-product-name"><a href="product-details">
														Title</a></h5>
												<div class="price-box">
													<span class="price-regular">$55.00</span>
													<span class="price-old"><del>$30.00</del></span>
												</div>
											</div>
										</div>
									</div>
									<!-- group list item end -->

									<!-- group list item start -->
									<div class="group-slide-item">
										<div class="group-item">
											<div class="group-item-thumb">
												<a href="product-details">
													<img src="{{asset('img/sample/product-sample.jpg')}}" alt="">
												</a>
											</div>
											<div class="group-item-desc">
												<h5 class="group-product-name"><a href="product-details">
														Title</a></h5>
												<div class="price-box">
													<span class="price-regular">$45.00</span>
													<span class="price-old"><del>$25.00</del></span>
												</div>
											</div>
										</div>
									</div>
									<!-- group list item end -->

									<!-- group list item start -->
									<div class="group-slide-item">
										<div class="group-item">
											<div class="group-item-thumb">
												<a href="product-details">
													<img src="{{asset('img/sample/product-sample.jpg')}}" alt="">
												</a>
											</div>
											<div class="group-item-desc">
												<h5 class="group-product-name"><a href="product-details">
													Title</a></h5>
												<div class="price-box">
													<span class="price-regular">$50.00</span>
													<span class="price-old"><del>$29.99</del></span>
												</div>
											</div>
										</div>
									</div>
									<!-- group list item end -->

									<!-- group list item start -->
									<div class="group-slide-item">
										<div class="group-item">
											<div class="group-item-thumb">
												<a href="product-details">
													<img src="{{asset('img/sample/product-sample.jpg')}}" alt="">
												</a>
											</div>
											<div class="group-item-desc">
												<h5 class="group-product-name"><a href="product-details">
													Title</a></h5>
												<div class="price-box">
													<span class="price-regular">$90.00</span>
													<span class="price-old"><del>$100.</del></span>
												</div>
											</div>
										</div>
									</div>
									<!-- group list item end -->

									<!-- group list item start -->
									<div class="group-slide-item">
										<div class="group-item">
											<div class="group-item-thumb">
												<a href="product-details">
													<img src="{{asset('img/sample/product-sample.jpg')}}" alt="">
												</a>
											</div>
											<div class="group-item-desc">
												<h5 class="group-product-name"><a href="product-details">
													Title</a></h5>
												<div class="price-box">
													<span class="price-regular">$20.00</span>
													<span class="price-old"><del>$30.00</del></span>
												</div>
											</div>
										</div>
									</div>
									<!-- group list item end -->

									<!-- group list item start -->
									<div class="group-slide-item">
										<div class="group-item">
											<div class="group-item-thumb">
												<a href="product-details">
													<img src="{{asset('img/sample/product-sample.jpg')}}" alt="">
												</a>
											</div>
											<div class="group-item-desc">
												<h5 class="group-product-name"><a href="product-details">
													Title</a></h5>
												<div class="price-box">
													<span class="price-regular">$55.00</span>
													<span class="price-old"><del>$30.00</del></span>
												</div>
											</div>
										</div>
									</div>
									<!-- group list item end -->

									<!-- group list item start -->
									<div class="group-slide-item">
										<div class="group-item">
											<div class="group-item-thumb">
												<a href="product-details">
													<img src="{{asset('img/sample/product-sample.jpg')}}" alt="">
												</a>
											</div>
											<div class="group-item-desc">
												<h5 class="group-product-name"><a href="product-details">
													Title</a></h5>
												<div class="price-box">
													<span class="price-regular">$45.00</span>
													<span class="price-old"><del>$25.00</del></span>
												</div>
											</div>
										</div>
									</div>
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
