<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>{{ trans('app.app-name') }}</h3>
                    <p>
                        {{ $address }}<br><br>
                        <strong>Phone:</strong> {{ $phone }}<br>
                        <strong>Email:</strong> {{ $email }}<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Navigations</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('main.home') }}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('main.about.organization') }}">About
                                us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('main.news') }}">News</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('main.join.form') }}">Join Us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('main.contact') }}">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        @if (null !== Auth::user())
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('logout') }}">Logout</a></li>
                        @else
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('login') }}">Login</a></li>
                        @endif
                        @if (trans('app.privacy-policy') != null)
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ trans('app.privacy-policy') }}">Privacy
                                    & Policy</a></li>
                        @endif
                        @if (trans('app.terms-conditions') != null)
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ trans('app.terms-conditions') }}">Terms
                                    & Conditions</a></li>
                        @endif

                        @foreach ($useful_links as $link)
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="{{ $link->url }}">{{ $link->display_name }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>
                    <div class="social-links mt-3">
                        @isset($twitter)
                            <a href="{{ $twitter }}" class="twitter"><i class="bx bxl-twitter"></i></a>
                        @endisset
                        @isset($facebook)
                            <a href="{{ $facebook }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                        @endisset
                        @isset($instagram)
                            <a href="{{ $instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                        @endisset
                        @isset($linkedin)
                            <a href="{{ $linkedin }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        @endisset
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
