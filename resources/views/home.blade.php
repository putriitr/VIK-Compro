@extends('layouts.Member.master')

@section('content')
    <!-- Menampilkan pesan error -->
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            <h4 class="alert-heading"><i class="fas fa-exclamation-triangle"></i> Ada Kesalahan:</h4>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Menampilkan pesan sukses -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            <h4 class="alert-heading"><i class="fas fa-check-circle"></i> Berhasil!</h4>
            <p>{{ session('success') }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Carousel Start -->
    <div class="carousel-header">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            @if ($sliders->isEmpty())
                <!-- Tampilkan Gambar Default Jika Tidak Ada Slider -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/img/bg-login.jpg') }}" alt="No Sliders Available" class="d-block w-100">
                        <div class="carousel-caption">
                            <div class="text-center p-4" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp"
                                    data-wow-delay="0.1s">
                                    No Sliders Available
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <ol class="carousel-indicators">
                    @foreach ($sliders as $key => $slider)
                        <li data-bs-target="#carouselId" data-bs-slide-to="{{ $key }}"
                            class="{{ $key == 0 ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner" role="listbox">
                    @foreach ($sliders as $key => $slider)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <img src="{{ asset($slider->gambar) }}" alt="{{ $slider->judul }}" class="d-block w-100">
                            <div class="carousel-caption">
                                <div class="text-center p-4" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp"
                                        data-wow-delay="0.1s">
                                        {{ $slider->subjudul }}</h4>
                                    <h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp"
                                        data-wow-delay="0.3s">
                                        {{ $slider->judul }}</h1>
                                    <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">
                                        {{ $slider->deskripsi }}</p>
                                    <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp"
                                        data-wow-delay="0.7s"
                                        href="{{ $slider->button_url }}">{{ $slider->button_text }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-secondary wow fadeInLeft" data-wow-delay="0.2s"
                        aria-hidden="false"></span>
                    <span class="visually-hidden-focusable">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-secondary wow fadeInRight" data-wow-delay="0.2s"
                        aria-hidden="false"></span>
                    <span class="visually-hidden-focusable">Next</span>
                </button>
            @endif
        </div>
    </div>
    <!-- Carousel End -->

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
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="bg-light rounded">
                        <img src="{{ asset('assets/img/company_1.jpg') }}" class="img-fluid w-100"
                            style="margin-bottom: -7px;" alt="Image">
                        {{-- <img src="{{ asset('storage/company_2.jpg') }}"
                            class="img-fluid w-100 border-bottom border-5 border-primary"
                            style="border-top-right-radius: 300px; border-top-left-radius: 300px;" alt="Image"> --}}
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h5 class="sub-title pe-3">{{ __('messages.about_us') }}</h5>
                    <h1 class="display-5 mb-4">{{ $company->nama_perusahaan ?? 'PT Virtual Inter Komunika' }}</h1>
                    <p class="mb-4">{{ $company->sejarah_singkat ?? ' ' }}</p>
                    <a href="{{ route('about') }}"
                        class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">{{ __('messages.show_more') }}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid service overflow-hidden pt-5">
        <div class="container py-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">{{ __('messages.find_products') }}</h5>
                </div>
                <h1 class="display-5 mb-4">{{ __('messages.our_products') }}</h1>
                <p class="mb-0">{{ __('messages.product_desc1') }}</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="{{ asset('assets/img/product-1.jpg') }}" class="img-fluid w-100 rounded"
                                    alt="Image">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                        <a href="#" class="h4 text-white mb-0">Product Name</a>
                                    </div>
                                </div>
                                <div class="service-content pb-4">
                                    <a href="#">
                                        <h4 class="text-white mb-4 py-3">Job Visa</h4>
                                    </a>
                                    <div class="px-4">
                                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione
                                            aspernatur autem velit.</p>
                                        <a class="btn btn-primary border-secondary rounded-pill py-3 px-5"
                                            href="#">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="{{ asset('assets/img/product-1.jpg') }}" class="img-fluid w-100 rounded"
                                    alt="Image">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                        <a href="#" class="h4 text-white mb-0">Product Name</a>
                                    </div>
                                </div>
                                <div class="service-content pb-4">
                                    <a href="#">
                                        <h4 class="text-white mb-4 py-3">Business Visa</h4>
                                    </a>
                                    <div class="px-4">
                                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione
                                            aspernatur autem velit.</p>
                                        <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5"
                                            href="#">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="{{ asset('assets/img/product-1.jpg') }}" class="img-fluid w-100 rounded"
                                    alt="Image">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                        <a href="#" class="h4 text-white mb-0">Product Name</a>
                                    </div>
                                </div>
                                <div class="service-content pb-4">
                                    <a href="#">
                                        <h4 class="text-white mb-4 py-3">Diplometic Visa</h4>
                                    </a>
                                    <div class="px-4">
                                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione
                                            aspernatur autem velit.</p>
                                        <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5"
                                            href="#">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4"
                        href="{{ route('product.index') }}">{{ __('messages.show_more') }}</a>
                </div>
            </div>
        </div>
    </div><br><br>
    <!-- Services End -->

    <!-- Brand Start -->
    <div id="brand" class="container-fluid feature pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h4 class="text-primary">{{ __('messages.our_brands1') }}</h4>
                <h1 class="display-5 mb-4">{{ __('messages.our_brands') }}</h1>
                {{-- <p class="mb-0">{{ __('messages.brands_desc1') }}</p> --}}
            </div>
            @if ($partners->isEmpty())
                <div class="carousel-container" style="overflow: hidden; position: relative; height: 150px;">
                    <div class="carousel-rows"
                        style="display: flex; align-items: center; justify-content: center; height: 100%; animation: marquee 35s linear infinite;">
                        <p class="text-dark text-center" style="letter-spacing: 2px; margin: 0;">
                            {{ __('messages.brand_not_available') }}
                        </p>
                    </div>
                </div>
            @else
                <div class="carousel-container">
                    <div class="carousel-rows">
                        @foreach ($partners as $partner)
                            <div class="brand-item">
                                <img src="{{ asset($partner->gambar) }}" class="img-fluid" alt="{{ $partner->nama }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Brand End -->

    <style>
        .carousel-container {
            position: relative;
            overflow-x: scroll;
            white-space: nowrap;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            /* Smooth scrolling for iOS */
        }

        .carousel-rows {
            display: inline-flex;
            /* Set animation for continuous scrolling */
            animation: marquee-horizontal 200s linear infinite;
        }

        .brand-item {
            width: 120px;
            /* Fixed width for brand item */
            height: 80px;
            /* Fixed height */
            margin: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            scroll-snap-align: start;
            /* For snap scrolling */
        }

        .brand-item img {
            width: 100px;
            height: 50px;
            object-fit: cover;
        }

        /* Horizontal marquee animation */
        @keyframes marquee-horizontal {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const carouselContainer = document.querySelector(".carousel-container");
            const carouselRows = document.querySelector(".carousel-rows");

            // Enable dragging functionality
            let isDragging = false;
            let startX, scrollLeft;

            carouselContainer.addEventListener("mousedown", (e) => {
                isDragging = true;
                startX = e.pageX - carouselContainer.offsetLeft;
                scrollLeft = carouselContainer.scrollLeft;
            });

            carouselContainer.addEventListener("mouseleave", () => {
                isDragging = false;
            });

            carouselContainer.addEventListener("mouseup", () => {
                isDragging = false;
            });

            carouselContainer.addEventListener("mousemove", (e) => {
                if (!isDragging) return;
                e.preventDefault();
                const x = e.pageX - carouselContainer.offsetLeft;
                const walk = (x - startX) * 3; // Adjust scroll speed
                carouselContainer.scrollLeft = scrollLeft - walk;
            });

            // Touch events for mobile
            carouselContainer.addEventListener("touchstart", (e) => {
                isDragging = true;
                startX = e.touches[0].pageX - carouselContainer.offsetLeft;
                scrollLeft = carouselContainer.scrollLeft;
            });

            carouselContainer.addEventListener("touchend", () => {
                isDragging = false;
            });

            carouselContainer.addEventListener("touchmove", (e) => {
                if (!isDragging) return;
                e.preventDefault();
                const x = e.touches[0].pageX - carouselContainer.offsetLeft;
                const walk = (x - startX) * 3;
                carouselContainer.scrollLeft = scrollLeft - walk;
            });
        });
    </script>
@endsection
