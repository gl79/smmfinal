<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Zeps Media</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('pages/img/favicon.ico') }}" rel="icon">
    <link href="{{ asset('pages/img/favicon.ico') }}" rel="apple-touch-icon">



    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('pages/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pages/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('pages/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pages/vendor/aos/aos.cs') }}s" rel="stylesheet">
    <link href="{{ asset('pages/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pages/vendor/drift-zoom/drift-basic.css') }}" rel="stylesheet">


    <!-- Main CSS File -->
    <link href="{{ asset('pages/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: eStore
  * Template URL: https://bootstrapmade.com/estore-bootstrap-ecommerce-template/
  * Updated: Apr 26 2025 with Bootstrap v5.3.5
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    @include('pages.header')

    <main class="main">
        @yield('content')
    </main>

    @include('pages.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('pages/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('pages/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('pages/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('pages/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('pages/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('pages/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('pages/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('pages/vendor/drift-zoom/Drift.min.js') }}"></script>
    <script src="{{ asset('pages/vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('pages/js/main.js') }}"></script>

</body>

</html>