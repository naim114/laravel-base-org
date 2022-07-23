<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('page-title') - {{ trans('app.app-name') }}</title>
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

    <!-- ======= Logged Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-person d-flex align-items-center"><a
                        href="mailto:contact@example.com">user@email.com</a></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#">Dashboard</a>
                <a href="#">Log Out</a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">BizLand<span>.</span></a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#">Home</a></li>
                    <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">About Organization</a></li>
                            <li><a href="#">History</a></li>
                            <li><a href="#">Committee</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#">News</a></li>
                    <li class="dropdown"><a href="#"><span>Join Us</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Forms</a></li>
                            <li><a href="#">Online Membership</a></li>
                            <li><a href="#">Donate</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>BizLand<span>.</span></h3>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Navigations</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">News</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Join Us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            @if (trans('app.privacy-policy') != null)
                                <li><i class="bx bx-chevron-right"></i> <a
                                        href="{{ trans('app.privacy-policy') }}">Privacy
                                        & Policy</a></li>
                            @endif
                            @if (trans('app.terms-conditions') != null)
                                <li><i class="bx bx-chevron-right"></i> <a
                                        href="{{ trans('app.terms-conditions') }}">Terms
                                        & Conditions</a></li>
                            @endif
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>{{ trans('app.copyright') }}</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://github.com/naim114">naim114</a>
            </div>
        </div>
    </footer><!-- End Footer -->

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
    <script src={{ asset('home/vendor/php-email-form/validate.js') }}></script>

    <!-- Template Main JS File -->
    <script src={{ asset('home/js/main.js') }}></script>

</body>

</html>
