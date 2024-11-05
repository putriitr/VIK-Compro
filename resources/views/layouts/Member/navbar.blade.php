<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-5 text-center text-lg-start mb-lg-0">
                <div class="d-flex">
                    <a href="mailto:business@vik.co.id" class="text-muted me-4">
                        <i class="fas fa-envelope text-secondary me-2"></i>business@vik.co.id
                    </a>
                    <a href="tel:(021)23951673" class="text-muted me-0">
                        <i class="fas fa-phone-alt text-secondary me-2"></i>(021) 23951673
                    </a>
                </div>
            </div>
            <div class="col-lg-3 text-center mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href="#">
                        <i class="fab fa-twitter fw-normal text-secondary"></i>
                    </a>
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href="#">
                        <i class="fab fa-facebook-f fw-normal text-secondary"></i>
                    </a>
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href="#">
                        <i class="fab fa-linkedin-in fw-normal text-secondary"></i>
                    </a>
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href="#">
                        <i class="fab fa-instagram fw-normal text-secondary"></i>
                    </a>
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle" href="#">
                        <i class="fab fa-youtube fw-normal text-secondary"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="#footer" class="text-muted mx-2">{{ __('messages.quick_access') }}</a><small> / </small>
                    <a href="{{ route('contact')}}" class="text-muted ms-2">{{ __('messages.contact_us') }}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="{{ route('home')}}" class="navbar-brand p-0">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/logo-vik.png') }}" alt="Logo" class="me-3" style="width: 150px; height: auto;">
                    <img src="{{ asset('assets/img/catalogue.png') }}" alt="Logo" class="me-2"
                    style="height: auto; width: 180px;">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">{{ __('messages.home') }}</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">{{ __('messages.about') }}</a>
                    <a href="{{ route('product.index') }}" class="nav-item nav-link {{ request()->is('product') ? 'active' : '' }}">{{ __('messages.products') }}</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link {{ request()->is('activity') || request()->is('countries') || request()->is('training') ? 'active' : '' }}" data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">{{ __('messages.laman') }}</span>
                        </a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('member.activity') }}" class="dropdown-item {{ request()->is('activity') ? 'active' : '' }}">{{ __('messages.activity') }}</a>
                            <a href="countries.html" class="dropdown-item {{ request()->is('countries') ? 'active' : '' }}">{{ __('messages.meta') }}</a>
                        </div>
                    </div>

                    <!-- Portal -->
                    @auth
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown">{{ __('messages.portal') }}</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('portal') }}" class="nav-item nav-link {{ request()->is('portal') ? 'active' : '' }}">{{ __('messages.portal_member') }}</a>
                                <a href="{{ route('portal') }}" class="nav-item nav-link {{ request()->is('portal') ? 'active' : '' }}">{{ __('messages.portal_partner') }}</a>
                            </div>
                        </div>
                    @endauth

                    <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">{{ __('messages.contact_us') }}</a>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        @if (LaravelLocalization::getCurrentLocale() == 'id')
                            <img src="{{ asset('assets/img/flags/id.png') }}" alt="Bahasa Indonesia"
                                style="width: 25px; height: auto; margin-right: 5px;">
                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            <img src="{{ asset('assets/img/flags/us.png') }}" alt="English"
                                style="width: 25px; height: auto; margin-right: 5px;">
                        @else
                            {{ LaravelLocalization::getCurrentLocaleNative() }}
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-end m-0">
                        <a href="{{ LaravelLocalization::getLocalizedURL('id') }}" class="dropdown-item">
                            <img src="{{ asset('assets/img/flags/id.png') }}" alt="Bahasa Indonesia"
                                style="width: 20px; height: auto; margin-right: 5px;">
                            {{ __('messages.bahasa') }}
                        </a>
                        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}" class="dropdown-item">
                            <img src="{{ asset('assets/img/flags/us.png') }}" alt="English"
                                style="width: 20px; height: auto; margin-right: 5px;">
                            {{ __('messages.english') }}
                        </a>
                    </div>
                </div>

                <a href="{{ route('login') }}" class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">{{ __('messages.login') }}</a>
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h4 class="modal-title text-secondary mb-0" id="exampleModalLabel">Search by keyword</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="Type keywords here" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->
</body>
