<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('admin.partials.head')

</head>

<body>
    
    
    <!-- preloader area start -->
    @include('admin.partials.preloader')
    <!-- preloader area end -->


    <div class="main-wrapper">


        <!-- header area start -->
        @include('admin.partials.header')
        <!-- header area end -->

        <!-- Content Body Start -->
        @yield('content')
        <!-- Content Body End -->

      @include('admin.partials.footer')

    </div>

    
    @include('admin.partials.js')
</body>

</html>
<!-- Localized -->
