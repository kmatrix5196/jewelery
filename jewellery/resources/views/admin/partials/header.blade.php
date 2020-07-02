Header Section Start -->

@if(Auth::check())
@auth("admin")
	@php ($user = 'admin')
@endauth
@auth("writer")
	@php ($user = 'writer')
@endauth
@else
	@php redirect()->route('admin.login');
@endif
<div class="header-section">
	<div class="container-fluid">
		<div class="row justify-content-between align-items-center">

			<!-- Header Logo (Header Left) Start -->
			<div class="header-logo col-auto">
				<a href="index">                                
					<img src="{{asset('img/logo/logo.png')}}" alt="Brand Logo">                             
				</a>

			</div><!-- Header Logo (Header Left) End -->

			<!-- Header Right Start -->
			<div class="header-right flex-grow-1 col-auto">
				<div class="row justify-content-between align-items-center">

					<!-- Side Header Toggle & Search Start -->
					<div class="col-auto">
						<div class="row align-items-center">

							<!--Side Header Toggle-->
							<div class="col-auto"><button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button></div>

							<!--Header Search-->
							<div class="col-auto">

								<div class="header-search">

									<button class="header-search-open d-block d-xl-none"><i class="zmdi zmdi-search"></i></button>

									<div class="header-search-form">
										<form action="#">
											<input type="text" placeholder="Search Here">
											<button><i class="zmdi zmdi-search"></i></button>
										</form>
										<button class="header-search-close d-block d-xl-none"><i class="zmdi zmdi-close"></i></button>
									</div>

								</div>
							</div>

						</div>
					</div><!-- Side Header Toggle & Search End -->

					<!-- Header Notifications Area Start -->
					<div class="col-auto">

						<ul class="header-notification-area">
							<!--Notification-->
							<li class="adomx-dropdown col-auto">
								<a class="toggle" href="#"><i class="zmdi zmdi-notifications"></i><span class="badge"></span></a>
								<!-- <div class="notification" id="chat_notification"></div></button></a> -->

								<!-- Dropdown -->
								<div class="adomx-dropdown-menu dropdown-menu-notifications">
									<div class="head">
										<h5 class="title">You have 4 new notification.</h5>
									</div>
									<div class="body custom-scroll">
										<ul>
											<li>
												<a href="#">
													<i class="zmdi zmdi-notifications-none"></i>
													<p>There are many variations of pages available.</p>
													<span>11.00 am   Today</span>
												</a>
												<button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
											</li>
											<li>
												<a href="#">
													<i class="zmdi zmdi-block"></i>
													<p>There are many variations of pages available.</p>
													<span>11.00 am   Today</span>
												</a>
												<button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
											</li>
											<li>
												<a href="#">
													<i class="zmdi zmdi-info-outline"></i>
													<p>There are many variations of pages available.</p>
													<span>11.00 am   Today</span>
												</a>
												<button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
											</li>
											<li>
												<a href="#">
													<i class="zmdi zmdi-shield-security"></i>
													<p>There are many variations of pages available.</p>
													<span>11.00 am   Today</span>
												</a>
												<button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
											</li>
											<li>
												<a href="#">
													<i class="zmdi zmdi-notifications-none"></i>
													<p>There are many variations of pages available.</p>
													<span>11.00 am   Today</span>
												</a>
												<button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
											</li>
											<li>
												<a href="#">
													<i class="zmdi zmdi-block"></i>
													<p>There are many variations of pages available.</p>
													<span>11.00 am   Today</span>
												</a>
												<button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
											</li>
											<li>
												<a href="#">
													<i class="zmdi zmdi-info-outline"></i>
													<p>There are many variations of pages available.</p>
													<span>11.00 am   Today</span>
												</a>
												<button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
											</li>
											<li>
												<a href="#">
													<i class="zmdi zmdi-shield-security"></i>
													<p>There are many variations of pages available.</p>
													<span>11.00 am   Today</span>
												</a>
												<button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
											</li>
										</ul>
									</div>
									<div class="footer">
										<a href="#" class="view-all">view all</a>
									</div>
								</div>

							</li>

							<!--User-->
							<li class="adomx-dropdown col-auto">
								<a class="toggle" href="#">
									<span class="user">
										<span class="avatar">
											<img src="{{asset('images/admin.png')}}" alt="">
											<span class="status"></span>
										</span>
										<span class="name">
											@auth("writer")
											{{ucfirst(Auth::guard('writer')->user()->name)}}
											@endauth
											@auth("admin")
											{{ucfirst(Auth::guard('admin')->user()->name)}}
											@endauth
										</span>
									</span>
								</a>

								<!-- Dropdown -->
								<div class="adomx-dropdown-menu dropdown-menu-user">
									<div class="head">
										<h5 class="name"><a href="#">HEX Creative</a></h5>
										<a class="mail" href="#">Hello 
											@auth("writer")
												{{Auth::guard('writer')->user()->email}}
											@endauth

											@auth("admin")
												{{Auth::guard('admin')->user()->email}}
											@endauth</a>
									</div>
									<div class="body">
										<ul>
											<li><a href="#"><i class="zmdi zmdi-account"></i>Profile</a></li>
											<li><a href="#"><i class="zmdi zmdi-email-open"></i>Inbox</a></li>
											<li><a href="#"><i class="zmdi zmdi-wallpaper"></i>Activity</a></li>
										</ul>
										<ul>
											<li><a href="#"><i class="zmdi zmdi-settings"></i>Setting</a></li>
											<li>
												<a href="@auth('writer'){{ route('writer.logout') }}@endauth
				@auth('admin'){{ route('admin.logout') }}@endauth""><i class="zmdi zmdi-lock-open"></i>
												{{ __('Sign Out') }}</a>
											</li>
										</ul>

									</div>
								</div>

							</li>

						</ul>

					</div><!-- Header Notifications Area End -->

				</div>
			</div><!-- Header Right End -->

		</div>
	</div>
</div><!-- Header Section End -->
<!-- Side Header Start -->
<div class="side-header show">
	<button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
	<!-- Side Header Inner Start -->
	<div class="side-header-inner custom-scroll">

		<nav class="side-header-menu" id="side-header-menu">
			<ul>
				<li>

					@auth("writer")
					<a href="/
					writer/index"><i class="ti-home"></i> <span>
					{{ __('Writer Dashboard') }}
					@endauth
				@auth("admin")
				<a href="/
					admin/index"><i class="ti-home"></i> <span>
					{{ __('Admin Dashboard') }}@endauth</span></a>

				</li>
				<li class="has-sub-menu"><a href="#"><i class="ti-home"></i> <span>Manage Products</span><span class="menu-expand"><i class="zmdi zmdi-chevron-down"></i></span></a>
					<ul class="side-header-sub-menu" style="display: none;">
						<li><a href="/{{$user}}/product/view"><i class=" ti-list"></i> <span>Product Lists</span></a></li>
						<li><a href="/{{$user}}/product/add"><i class="fa fa-plus"></i><span>Add Product</span></a></li>
					  <!--   <li><a href="/{{$user}}/products/edit"><i class="fa fa-edit"></i> <span>Edit Product</span></a></li> -->
					</ul>
				</li>
				<li class="has-sub-menu"><a href="#"><i class="ti-home"></i> <span>Manage Blogs</span><span class="menu-expand"><i class="zmdi zmdi-chevron-down"></i></span></a>
					<ul class="side-header-sub-menu" style="display: none;">
						<li><a href="/{{$user}}/blog/view"><i class=" ti-list"></i> <span>Blog Lists</span></a></li>
						<li><a href="/{{$user}}/blog/add"><i class="fa fa-plus"></i><span>Add Blog</span></a></li>
					  <!--   <li><a href="/{{$user}}/products/edit"><i class="fa fa-edit"></i> <span>Edit Product</span></a></li> -->
					</ul>
				</li>
				@auth("admin")
				<li class="has-sub-menu"><a href="#"><i class="ti-home"></i> <span>Manage Premium Show</span><span class="menu-expand"><i class="zmdi zmdi-chevron-down"></i></span></a>
					<ul class="side-header-sub-menu" style="display: none;">
						<li><a href="/{{$user}}/premium/view"><i class=" ti-list"></i> <span>Premium Show Lists</span></a></li>
						<li><a href="/{{$user}}/premium/add"><i class="fa fa-plus"></i><span>Add Premium Show</span></a></li>
						<!--   <li><a href="/{{$user}}/products/edit"><i class="fa fa-edit"></i> <span>Edit Product</span></a></li> -->
					</ul>
				</li>
				 <li class="has-sub-menu"><a href="#"><i class="ti-home"></i> <span>Manage Writer</span><span class="menu-expand"><i class="zmdi zmdi-chevron-down"></i></span></a>
					<ul class="side-header-sub-menu" style="display: none;">
						<li><a href="/{{$user}}/writer/view"><i class=" ti-list"></i> <span>Writer Lists</span></a></li>
						<li><a href="/{{$user}}/writer/add"><i class="fa fa-plus"></i><span>Add Writer</span></a></li>
					</ul>
				</li>
				<li><a href="/{{$user}}/order_lists"><i class="fa fa-th-list"></i> <span>Order Lists</span></a></li>
				<li><a href="/{{$user}}/user_lists"><i class="fa fa-users"></i> <span>Users Lists</span></a></li>
				<li><a href="/admin/company_lists"><i class="fa fa-building"></i> <span>Company Lists</span></a></li>
				@endauth
				@auth("admin")
				<li>
					
					<form action="{{route('admin.chat')}}" id="chat" method="post">
                        @csrf
                        <input type="text" value="{{Auth::guard('admin')->user()->id}}" name="u_id" hidden="true">
                        
                    </form>
                    <a href="#" onclick="document.getElementById('chat').submit();"><i class="fa fa-comments-o"></i> <span>ChatBox</span></a>
                <li>
                @endauth

				<li><a href="/{{$user}}/table-data-table"><i class="ti-layout"></i> <span>Data Table</span></a></li>
				<li><a href="/{{$user}}/profile"><i class="fa fa-user-circle"></i> <span>My Profile</span></a></li>
			</ul>
		</nav>

	</div><!-- Side Header Inner End -->
</div><!-- Side Header End