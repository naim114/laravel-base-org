<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="{{ route('home') }}">BizLand<span>.</span></a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ current_route('home') ? 'active' : '' }}"
                        href="{{ route('home') }}">Home</a></li>
                <li class="dropdown"><a
                        class="{{ current_route('about.organization') || current_route('about.history') || current_route('about.committee') ? 'active' : '' }}"
                        href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('about.organization') }}">Organization</a></li>
                        <li><a href="{{ route('about.history') }}">History</a></li>
                        <li><a href="{{ route('about.committee') }}">Committee</a></li>
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
                <li><a class="nav-link scrollto" href="#">Shop</a></li>
                <li><a class="nav-link scrollto" href="#">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
