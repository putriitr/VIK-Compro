<body>
    @php
        // Fetch the first record from the company_parameter table
        $compro = \App\Models\CompanyParameter::first();
    @endphp

    @php
        $activeMetas = \App\Models\Meta::where('start_date', '<=', today())
            ->where('end_date', '>=', today())
            ->get()
            ->groupBy('type');

        $brand = \App\Models\BrandPartner::where('type', 'brand', 'nama')->get();
    @endphp

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-5 text-center text-lg-start mb-lg-0">
                <div class="d-flex">
                    <a href="mailto:business@vik.co.id" class="text-muted me-4">
                        <i class="fas fa-envelope text-secondary me-2"></i>{{ $compro->email }}
                    </a>
                    <a href="tel:(021)23951673" class="text-muted me-0">
                        <i class="fas fa-phone-alt text-secondary me-2"></i>{{ $compro->no_wa }}
                    </a>
                </div>
            </div>
            <div class="col-lg-3 text-center mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href="#">
                        <i class="fab fa-facebook-f fw-normal text-secondary"></i>
                    </a>
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href="#">
                        <i class="fab fa-linkedin-in fw-normal text-secondary"></i>
                    </a>
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href="#">
                        <i class="fab fa-instagram fw-normal text-secondary"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="#footer" class="text-muted mx-2">{{ __('messages.quick_access') }}</a><small> / </small>
                    <a href="{{ route('contact') }}" class="text-muted ms-2">{{ __('messages.contact_us') }}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="{{ route('home') }}" class="navbar-brand p-0">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/logo-vik.png') }}" alt="Logo" class="me-3"
                        style="width: 150px; height: auto;">
                    <img src="{{ asset('assets/img/catalogue.png') }}" alt="Logo" class="me-2"
                        style="height: auto; width: 180px;">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('home') }}"
                        class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">{{ __('messages.home') }}</a>
                    <a href="{{ route('about') }}"
                        class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">{{ __('messages.about') }}</a>
                    <a href="{{ route('product.index') }}"
                        class="nav-item nav-link {{ request()->is('product') ? 'active' : '' }}">{{ __('messages.products') }}</a>
                    <div class="nav-item dropdown">
                        <a href="#"
                            class="nav-link {{ request()->is('activity') || request()->is('countries') || request()->is('training') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">{{ __('messages.laman') }}</span>
                        </a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('member.activity') }}"
                                class="dropdown-item {{ request()->is('activity') ? 'active' : '' }}">{{ __('messages.activity') }}</a>
                            @foreach ($activeMetas as $type => $metas)
                                <div class="nav-item dropdown">
                                    @foreach ($metas as $meta)
                                        <a href="{{ route('member.meta.index') }}"
                                            class="dropdown-item">{{ __('messages.meta') }}</a>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Portal -->
                    @auth
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="memberDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('messages.portal') }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="memberDropdown">
                                <li>
                                    <a href="{{ route('portal') }}"
                                        class="dropdown-item">{{ __('messages.portal_member') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('vendor.portal') }}"
                                        class="dropdown-item">{{ __('messages.portal_vendor') }}</a>
                                </li>
                            </ul>
                        </div>
                    @endauth

                    <a href="{{ route('contact') }}"
                        class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">{{ __('messages.contact_us') }}</a>
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

                <!-- Shopping Cart Icon -->
                @auth
                    @if (Auth::user()->type === 'distributor')
                        <div class="nav-item">
                            <a href="{{ route('quotations.cart') }}" class="nav-link">
                                <i class="fas fa-shopping-cart"></i>
                                <span id="cart-count" class="badge bg-primary rounded-pill">
                                    {{ session('quotation_cart') ? count(session('quotation_cart')) : 0 }}
                                </span>
                            </a>

                        </div>
                    @endif
                @endauth

                @if (auth()->check())
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" id="companyDropdown" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <small><i
                                    class="fa fa-user text-primary me-2"></i>{{ auth()->user()->nama_perusahaan }}</small>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="companyDropdown">
                            <!-- Show Profile -->
                            <li>
                                <a class="dropdown-item"
                                    href="{{ auth()->user()->type === 'member' ? route('profile.show') : route('distributor.profile.show') }}">
                                    <i class="fa fa-user me-2"></i>Profil
                                </a>
                            </li>

                            <!-- Logout -->
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out-alt me-2"></i>{{ __('messages.logout') }}
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Logout Form -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}">
                        <small class="btn btn-primary rounded-pill text-white py-1 px-1">
                            <i class="fa fa-sign-in-alt text-white me-2"></i>{{ __('messages.masuk') }}
                        </small>
                    </a>
                @endif
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
                        <input type="search" class="form-control p-3" placeholder="Type keywords here"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            const currentPath = window.location.pathname;

            // Loop through all nav links to activate the correct link based on the current path
            navLinks.forEach(link => {
                const linkPath = new URL(link.href).pathname;
                // Check if the current link matches the current page path
                if (linkPath === currentPath) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });

            // Handle dropdowns separately
            const dropdowns = document.querySelectorAll('.nav-item.dropdown');
            dropdowns.forEach(dropdown => {
                const toggleLink = dropdown.querySelector('.nav-link.dropdown-toggle');
                const subLinks = dropdown.querySelectorAll('.dropdown-menu .dropdown-item');
                let isDropdownActive = false;

                // Check each sublink to see if it matches the current path
                subLinks.forEach(subLink => {
                    const subLinkPath = new URL(subLink.href).pathname;
                    if (subLinkPath === currentPath) {
                        subLink.classList.add('active');
                        isDropdownActive = true;
                    } else {
                        subLink.classList.remove('active');
                    }
                });

                // Only set the parent dropdown link as active if one of its sub-links is active
                if (isDropdownActive) {
                    toggleLink.classList.add('active');
                } else {
                    toggleLink.classList.remove('active');
                }
            });
        });
    </script>
</body>
