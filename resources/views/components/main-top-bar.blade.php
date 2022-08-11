@if (null !== Auth::user())
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-person d-flex align-items-center"><a
                        href="mailto:contact@example.com">{{ Auth::user()->username }}</a></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="{{ route('dashboard') }}">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </section>
@else
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div>
                <a>Welcome to <span>{{ trans('app.app-name') }}</span></a>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="{{ route('login') }}">Login</a>
            </div>
        </div>
    </section>
@endif
