<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('page-title') | {{ trans('app.app-name') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset(trans('app.favicon')) }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href={{ asset('home/vendor/aos/aos.css') }} rel="stylesheet">
    <link href={{ asset('home/vendor/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('home/vendor/bootstrap-icons/bootstrap-icons.css') }} rel="stylesheet">
    <link href={{ asset('home/vendor/boxicons/css/boxicons.min.css') }} rel="stylesheet">
    <link href={{ asset('home/vendor/glightbox/css/glightbox.min.css') }} rel="stylesheet">
    <link href={{ asset('home/vendor/swiper/swiper-bundle.min.css') }} rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href={{ asset('home/css/style.css') }} rel="stylesheet">

    @yield('custom-head')
</head>

<body>

    @include('components.main-top-bar')
    @include('components.main-header')
    @yield('content')
    @include('components.main-footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src={{ asset('home/vendor/purecounter/purecounter_vanilla.js') }}></script>
    <script src={{ asset('home/vendor/aos/aos.js') }}></script>
    <script src={{ asset('home/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('home/vendor/glightbox/js/glightbox.min.js') }}></script>
    <script src={{ asset('home/vendor/isotope-layout/isotope.pkgd.min.js') }}></script>
    <script src={{ asset('home/vendor/swiper/swiper-bundle.min.js') }}></script>
    <script src={{ asset('home/vendor/waypoints/noframework.waypoints.js') }}></script>

    <!-- Template Main JS File -->
    <script src={{ asset('home/js/main.js') }}></script>

    @yield('scripts')

</body>

</html>
