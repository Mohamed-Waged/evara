<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title','Evara')</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/front/imgs/theme/favicon.svg')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/front/css/main.css')}}">

</head>


<body>
    @yield('model')
    @yield('quick_view')

    @include('frontend.layouts.inc.header')
    
    @yield('mobile_header')

    <main class="main single-page">

        @yield('content')

    </main>

    @include('frontend.layouts.inc.footer')

    @yield('preloader')

    <!-- Vendor JS-->
    <script src="{{ asset('admin/assets/front/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('admin/assets/front/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('admin/assets/front/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('admin/assets/front/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/front/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('admin/assets/front/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('admin/assets/front/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('admin/assets/front/js/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset('admin/assets/front/js/plugins/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('admin/assets/front/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('admin/assets/front/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/front/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('admin/assets/front/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('admin/assets/front/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('admin/assets/front/js/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset('admin/assets/front/js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('admin/assets/front/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('admin/assets/front/js/plugins/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('admin/assets/front/js/plugins/jquery.theia.sticky.js') }}"></script>
    <script src="{{ asset('admin/assets/front/js/plugins/jquery.elevatezoom.js') }}"></script>
    <!-- Template  JS -->
    <script src="{{ asset('admin/assets/front/js/main.js') }}"></script>
    <script src="{{ asset('admin/assets/front/js/shop.js') }}"></script>
</body>

</html>
