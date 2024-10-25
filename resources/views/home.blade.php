@extends('layouts.Member.master')

@section('content')
    <!-- Carousel Start -->
    <div class="carousel-header">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            @if ($sliders->isEmpty())
                <!-- Tampilkan Gambar Default Jika Tidak Ada Slider -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/img/bg-login.jpg') }}" alt="No Sliders Available"
                            class="d-block w-100">
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
                            <img src="{{ asset('assets/img/slider/' . $slider->gambar) }}" alt="{{ $slider->judul }}"
                                class="d-block w-100">
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
                        <img src="{{ asset('storage/company_1.jpg') }}" class="img-fluid w-100"
                            style="margin-bottom: -7px;" alt="Image">
                        {{-- <img src="{{ asset('storage/company_2.jpg') }}"
                            class="img-fluid w-100 border-bottom border-5 border-primary"
                            style="border-top-right-radius: 300px; border-top-left-radius: 300px;" alt="Image"> --}}
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h5 class="sub-title pe-3">About the company</h5>
                    <h1 class="display-5 mb-4">PT Virtual Inter Komunika</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt architecto
                        consectetur iusto perferendis blanditiis assumenda dignissimos, commodi fuga culpa earum
                        explicabo libero sint est mollitia saepe! Sequi asperiores rerum nemo!</p>
                    <a href=""
                        class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">More
                        Details</a>
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
                    <h5 class="sub-title text-primary px-3">Our Products</h5>
                </div>
                <h1 class="display-5 mb-4">Company Products</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at
                    atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam
                    necessitatibus saepe in ab? Repellat!</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="{{ asset('storage/company_1.jpg') }}" class="img-fluid w-100 rounded"
                                    alt="Image">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                        <a href="#" class="h4 text-white mb-0">Job Visa</a>
                                    </div>
                                    <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4"
                                        href="#">Explore More</a>
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
                                <img src="{{ asset('storage/company_1.jpg') }}" class="img-fluid w-100 rounded"
                                    alt="Image">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                        <a href="#" class="h4 text-white mb-0">Business Visa</a>
                                    </div>
                                    <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4"
                                        href="#">Explore More</a>
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
                                <img src="{{ asset('storage/company_1.jpg') }}" class="img-fluid w-100 rounded"
                                    alt="Image">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                        <a href="#" class="h4 text-white mb-0">Diplometic Visa</a>
                                    </div>
                                    <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4"
                                        href="#">Explore More</a>
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
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="{{ asset('storage/company_1.jpg') }}" class="img-fluid w-100 rounded"
                                    alt="Image">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                        <a href="#" class="h4 text-white mb-0">Students Visa</a>
                                    </div>
                                    <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4"
                                        href="#">Explore More</a>
                                </div>
                                <div class="service-content pb-4">
                                    <a href="#">
                                        <h4 class="text-white mb-4 py-3">Students Visa</h4>
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
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-img">
                                <img src="{{ asset('storage/company_1.jpg') }}" class="img-fluid w-100 rounded"
                                    alt="Image">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                        <a href="#" class="h4 text-white mb-0">Residence Visa</a>
                                    </div>
                                    <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4"
                                        href="#">Explore More</a>
                                </div>
                                <div class="service-content pb-4">
                                    <a href="#">
                                        <h4 class="text-white mb-4 py-3">Residence Visa</h4>
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
                                <img src="{{ asset('storage/company_1.jpg') }}" class="img-fluid w-100 rounded"
                                    alt="Image">
                            </div>
                            <div class="service-title">
                                <div class="service-title-name">
                                    <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                        <a href="#" class="h4 text-white mb-0">Tourist Visa</a>
                                    </div>
                                    <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4"
                                        href="#">Explore More</a>
                                </div>
                                <div class="service-content pb-4">
                                    <a href="#">
                                        <h4 class="text-white mb-4 py-3">Tourist Visa</h4>
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
            </div>
        </div>
    </div>
    <!-- Services End -->
@endsection
