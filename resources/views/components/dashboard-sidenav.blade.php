<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    @if (has_permission('dashboard'))
                        <div class="sb-sidenav-menu-heading">{{ trans('app.dashboard') }}</div>
                    @endif
                    @if (has_permission('dashboard'))
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            {{ trans('app.dashboard') }}
                        </a>
                    @endif

                    {{-- Account --}}
                    <div class="sb-sidenav-menu-heading">{{ trans('app.account') }}</div>

                    <a class="nav-link" href="{{ route('profile') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                        {{ trans('app.profile') }}
                    </a>

                    <a class="nav-link" href="{{ route('activity') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                        {{ trans('app.activity') }}
                    </a>

                    {{-- Main Pages --}}
                    @if (has_permission('main.manage'))
                        <div class="sb-sidenav-menu-heading">Main Pages</div>

                        <a class="nav-link" href="{{ route('main.settings.home') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            {{ trans('app.home') }}
                        </a>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseAbout" aria-expanded="false" aria-controls="collapseAbout">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            About Us
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseAbout" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link"
                                    href="{{ route('main.settings.organization') }}">{{ trans('app.about.org') }}</a>
                                <a class="nav-link"
                                    href="{{ route('main.settings.history') }}">{{ trans('app.about.history') }}</a>
                                <a class="nav-link"
                                    href="{{ route('main.settings.comittee') }}">{{ trans('app.about.committee') }}</a>
                            </nav>
                        </div>

                        <a class="nav-link" href="{{ route('main.settings.news') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                            {{ trans('app.news') }}
                        </a>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseJoin" aria-expanded="false" aria-controls="collapseJoin">
                            <div class="sb-nav-link-icon"><i class="fas fa-sign-in-alt"></i></div>
                            Join Us
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseJoin" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link"
                                    href="{{ route('main.settings.form') }}">{{ trans('app.join.forms') }}</a>
                                <a class="nav-link"
                                    href="{{ route('main.settings.donate') }}">{{ trans('app.join.donate') }}</a>
                            </nav>
                        </div>

                        <a class="nav-link" href="{{ route('main.settings.contact') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                            {{ trans('app.contact') }}
                        </a>
                    @endif

                    {{-- Administrations --}}
                    @if (has_permission('users.manage') ||
                        has_permission('users.activity') ||
                        has_permission('roles.manage') ||
                        has_permission('permissions.manage'))
                        <div class="sb-sidenav-menu-heading">{{ trans('app.administration') }}</div>
                    @endif

                    @if (has_permission('users.manage'))
                        <a class="nav-link" href="{{ route('users') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            {{ trans('app.users') }}
                        </a>
                    @endif

                    @if (has_permission('users.activity'))
                        <a class="nav-link" href="{{ route('users.users_activity') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-list-ul"></i></div>
                            {{ trans('app.activity-log') }}
                        </a>
                    @endif

                    @if (has_permission('roles.manage') || has_permission('permissions.manage'))
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseRole" aria-expanded="false" aria-controls="collapseRole">
                            <div class="sb-nav-link-icon"><i class="fas fa-lock"></i></div>
                            {{ trans('app.roles-permissions') }}
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>

                        <div class="collapse" id="collapseRole" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                @if (has_permission('roles.manage'))
                                    <a class="nav-link" href="{{ route('roles') }}">{{ trans('app.roles') }}</a>
                                @endif
                                @if (has_permission('permissions.manage'))
                                    <a class="nav-link"
                                        href="{{ route('permissions') }}">{{ trans('app.permissions') }}</a>
                                @endif
                            </nav>
                        </div>
                    @endif

                    {{-- Settings --}}
                    @if (has_permission('settings.general'))
                        <div class="sb-sidenav-menu-heading">{{ trans('app.settings') }}</div>
                    @endif

                    @if (has_permission('settings.general'))
                        <a class="nav-link" href="{{ route('settings') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                            {{ trans('app.general') }}
                        </a>
                    @endif
                </div>
            </div>
            <div class="sb-sidenav-footer bg-dark">
                <div class="small">Logged in as:</div>
                @yield('user-name')
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid p-4">
                <h1 class="mt-4">@yield('page-title')</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">
                        @yield('breadcrumb')
                    </li>
                </ol>
                @include('components.alerts')
                @yield('content')
            </div>
        </main>
        @include('components.dashboard-footer')
    </div>
</div>
