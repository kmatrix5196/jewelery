<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	@include('partials.head')
</head>

<body>
	<!-- preloader area start -->
	@include('partials.preloader')
	<!-- preloader area end -->

	<!-- header area start -->
	@include('partials.header')
	<!-- header area end -->
	<main>
		@yield('content')
	</main>

	<!-- Quick view modal start -->
	@include('partials.modal')
	<!-- Quick view modal end -->
	
	<!-- Scroll to top start -->
	<div class="scroll-top not-visible">
		<i class="fa fa-angle-up"></i>
	</div>
	<!-- Scroll to Top End -->

	<!-- footer area start -->
	@include('partials.footer')
	<!-- footer area end -->

	

	<!-- offcanvas mini cart start -->
	@include('partials.mini_cart')
	<!-- offcanvas mini cart end -->

	@include('partials.js')

</body>
</html>