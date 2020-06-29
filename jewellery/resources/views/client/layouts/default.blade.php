<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="csrf-token" content="{{ csrf_token() }}" />

<head>
	@include('client.partials.head')

</head>

<body>
	@include('sweetalert::alert')
	<!-- preloader area start -->
	@include('client.partials.preloader')
	<!-- preloader area end -->

	<!-- header area start -->
	@include('client.partials.header')
	<!-- header area end -->
		@yield('content')

	<!-- Quick view modal start -->
	@include('client.partials.modal')
	<!-- Quick view modal end -->
	
	<!-- Scroll to top start -->
	<div class="scroll-top not-visible">
		<i class="fa fa-angle-up"></i>
	</div>
	<!-- Scroll to Top End -->

	<!-- footer area start -->
	@include('client.partials.footer')
	<!-- footer area end -->

	

	<!-- offcanvas mini cart start -->
	@include('client.partials.mini_cart')
	<!-- offcanvas mini cart end -->

	@include('client.partials.js')

</body>
</html>