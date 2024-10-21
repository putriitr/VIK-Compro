@extends('layouts.Member.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">My Products</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">Portal Member</a></li>
                    <li class="breadcrumb-item active text-secondary">My Products</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- My Products Start -->
    <div class="container-fluid contact overflow-hidden pb-5">
        <div class="container py-5">
            <div class="office pt-5">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="{{ asset('storage/company_1.jpg')}}" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column" style="align-items: left;">
                                <h4 class="mb-2">Product Name</h4>
                                <p class="mb-0">Purchase Date : 21-10-2024</p><br>
                                <a href="{{ route('detail-product')}}" class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">
                                    View Details <i class="fas fa-hand-point-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="{{ asset('storage/company_1.jpg')}}" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column">
                                <h4 class="mb-2">Product Name</h4>
                                <p class="mb-0">Purchase Date : 21-10-2024</p><br>
                                <a href="{{ route('myproducts')}}" class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">
                                    View Details <i class="fas fa-hand-point-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="{{ asset('storage/company_1.jpg')}}" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column">
                                <h4 class="mb-2">Product Name</h4>
                                <p class="mb-0">Purchase Date : 21-10-2024</p><br>
                                <a href="{{ route('myproducts')}}" class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">
                                    View Details <i class="fas fa-hand-point-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="{{ asset('storage/company_1.jpg')}}" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column">
                                <h4 class="mb-2">Product Name</h4>
                                <p class="mb-0">Purchase Date : 21-10-2024</p><br>
                                <a href="{{ route('myproducts')}}" class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">
                                    View Details <i class="fas fa-hand-point-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="{{ route('portal')}}"><i class="fas fa-arrow-left"></i> Back to Portal Member</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- My Products End -->
@endsection
