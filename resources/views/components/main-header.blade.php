<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="{{ route('main.home') }}">{{ trans('app.app-name') }}</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ current_route('main.home') ? 'active' : '' }}"
                        href="{{ route('main.home') }}">Home</a></li>
                <li class="dropdown"><a
                        class="{{ current_route('main.about.organization') || current_route('main.about.history') || current_route('main.about.committee') ? 'active' : '' }}"
                        href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('main.about.organization') }}">Organization</a></li>
                        <li><a href="{{ route('main.about.history') }}">History</a></li>
                        <li><a href="{{ route('main.about.committee') }}">Committee</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto {{ current_route('main.news') ? 'active' : '' }}"
                        href="{{ route('main.news') }}">News</a></li>
                <li class="dropdown"><a
                        class="{{ current_route('main.join.form') || current_route('main.join.membership') || current_route('main.join.donate') ? 'active' : '' }}"
                        href="#"><span>Join Us</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('main.join.form') }}">Forms</a></li>
                        <li><a href="{{ route('main.join.membership') }}">Online Membership</a></li>
                        <li><a href="{{ route('main.join.donate') }}">Donate</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto {{ current_route('main.contact') ? 'active' : '' }}"
                        href="{{ route('main.contact') }}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
