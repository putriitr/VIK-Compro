@extends('layouts.Member.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Product Detail</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">Portal Member</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">My Products</a></li>
                    <li class="breadcrumb-item active text-secondary">Product Detail</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Services Start -->
    <div class="container-fluid service overflow-hidden pt-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-inner d-flex">
                            <div class="service-img me-3">
                                <img src="{{ asset('storage/company_1.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-inner">
                            <div class="service-content bg-primary text-white p-4" style="border-radius: 15px;">
                                <div class="office-content">
                                    <h2 class="mb-3 text-white">Product Name</h2>
                                    <div class="d-flex mb-2">
                                        <span class="label me-2">Brand  :</span>
                                        <span class="value">Samsung</span>
                                    </div>
                                    <div class="d-flex mb-2">
                                        <span class="label me-2">Category  :</span>
                                        <span class="value">Electronics</span>
                                    </div>
                                    <div class="d-flex">
                                        <span class="label me-2">Usage:</span>
                                        <span class="value justify-text-align">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque
                                            sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam
                                            necessitatibus saepe in ab.</span>
                                    </div>
                                    <div class="d-flex mb-2">
                                        <span class="label me-2">E-katalog  :</span>
                                        <span class="value">Click Here <i class="fas fa-hand-point-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="col-12 text-left">
                            <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="{{ route('portal')}}"><i class="fas fa-arrow-left"></i> Back to Portal Member</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Services End -->
@endsection
