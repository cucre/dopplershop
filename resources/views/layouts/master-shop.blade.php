<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Doppler Shop">
    <meta name="keywords" content="shop, e-commerce, modern, flat style, responsive, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, clean">
    <meta name="author" content="CMA">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="/shop/css/vendor.min.css">
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="/shop/css/styles.min.css">

    @stack('customcss')

    <!-- Modernizr-->
    <script src="/shop/js/modernizr.min.js"></script>
  </head>
  <!-- Body-->
  <body>
    <!-- Header-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="site-header navbar-sticky">
      <!-- Topbar-->
      @include('layouts.topbar')
      <!-- Navbar-->
      @include('layouts.navbar')
    </header>
    <!-- Page Content-->

    @yield('content')
    
    @include('layouts.footer')

    <!-- Back To Top Button-->
    <a class="scroll-to-top-btn" href="#"><i class="icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>

    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="/shop/js/vendor.min.js"></script>
    <script src="/shop/js/scripts.min.js"></script>
    @stack('customjs')
    
  </body>
</html>