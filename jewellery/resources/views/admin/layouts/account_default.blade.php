<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('admin.partials.head')

</head>

<body>
   


    <div class="main-wrapper">
        <!-- Content Body Start -->
        @yield('content')
        <!-- Content Body End -->
    </div>

    
    @include('admin.partials.js')
</body>

</html>
<!-- Localized -->
