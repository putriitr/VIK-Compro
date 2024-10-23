@extends('layouts.Member.master')

@section('content')
    <!-- Services Start -->
    <div class="container-fluid service overflow-hidden pt-5">
        <div class="container py-5">
            {{-- <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">Our Products</h5>
                </div>
                <h1 class="display-5 mb-4">Product Categories</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at
                    atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam
                    necessitatibus saepe in ab? Repellat!</p>
            </div> --}}

            <div class="row g-4">
                <!-- Search Start -->
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div style="margin-top: 50px;">
                        <div
                            style="display: flex; align-items: center; border: 1px solid #ccc; border-radius: 25px; overflow: hidden;">
                            <input type="text" placeholder="Type Keywords Here .."
                                style="flex: 1; padding: 10px; border: none; outline: none;" />
                            <button
                                style="padding: 10px 15px; background-color: #6196FF; color: white; border: none; cursor: pointer;">
                                <i class="fa fa-search" style="margin: 0;"></i>
                            </button>
                        </div>
                    </div>
                    <div style="margin-top: 50px; width: 300px;">
                        <!-- Judul Kategori -->
                        <span style="font-size: 14px; font-weight: 500; display: block; margin-bottom: 10px;">Kategori Produk</span>

                        <!-- Kotak untuk Kategori -->
                        <div style="border: 1px solid #ccc; border-radius: 10px; overflow: hidden; padding: 10px;">
                            <!-- Kategori 1 -->
                            <div style="display: flex; align-items: center; border-bottom: 1px solid #ccc; padding: 8px;">
                                <i class="fa fa-bars" style="color: grey; margin-right: 10px; cursor: pointer;"></i>
                                <span style="flex: 1; font-size: 16px; font-weight: 500;">Alat Konstruksi</span>
                            </div>
                            <!-- Kategori 2 -->
                            <div style="display: flex; align-items: center; padding: 8px;">
                                <i class="fa fa-bars" style="color: grey; margin-right: 10px; cursor: pointer;"></i>
                                <span style="flex: 1; font-size: 16px; font-weight: 500;">Alat Konstruksi</span>
                            </div>
                            <!-- Kategori 3 -->
                            <div style="display: flex; align-items: center; border-bottom: 1px solid #ccc; padding: 8px;">
                                <i class="fa fa-bars" style="color: grey; margin-right: 10px; cursor: pointer;"></i>
                                <span style="flex: 1; font-size: 16px; font-weight: 500;">Alat Konstruksi</span>
                            </div>
                            <!-- Kategori 4 -->
                            <div style="display: flex; align-items: center; padding: 8px;">
                                <i class="fa fa-bars" style="color: grey; margin-right: 10px; cursor: pointer;"></i>
                                <span style="flex: 1; font-size: 16px; font-weight: 500;">Alat Konstruksi</span>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Search End -->

                <!-- Product Items Start -->
                <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4">
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
                            <h3 class="display-9 mb-0">Explore Our Products</h3>
                            <div class="col-lg-3 mt-n2">
                                <select class="form-select border-0 bg-light shadow-sm" style="border-radius: 10px; padding: 12px">
                                    <option selected>{{ __('messages.sort_by') }}</option>
                                    <option value="1">{{ __('messages.newest') }}</option>
                                    <option value="2">{{ __('messages.latest') }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="service-item">
                                <div class="service-inner position-relative" style="overflow: hidden; border-radius: 8px;">
                                    <div class="service-img">
                                        <img src="{{ asset('storage/company_1.jpg') }}" class="img-fluid w-100 rounded"
                                            alt="Image" style="transition: transform 0.3s ease-in-out;">
                                    </div>
                                </div>
                                <div class="service-title text-center mt-n4">
                                    <div class="bg-primary text-center rounded p-3"
                                        style="transform: translateX(0%); z-index: 1; width: 80%; margin: 0 auto;">
                                        <a href="#" class="h5 text-white mb-0" style="text-decoration: none;">Product
                                            Name</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="service-item">
                                <div class="service-inner position-relative" style="overflow: hidden; border-radius: 8px;">
                                    <div class="service-img">
                                        <img src="{{ asset('storage/company_1.jpg') }}" class="img-fluid w-100 rounded"
                                            alt="Image" style="transition: transform 0.3s ease-in-out;">
                                    </div>
                                </div>
                                <div class="service-title text-center mt-n4">
                                    <div class="bg-primary text-center rounded p-3"
                                        style="transform: translateX(0%); z-index: 1; width: 80%; margin: 0 auto;">
                                        <a href="#" class="h5 text-white mb-0" style="text-decoration: none;">Product
                                            Name</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="service-item">
                                <div class="service-inner position-relative" style="overflow: hidden; border-radius: 8px;">
                                    <div class="service-img">
                                        <img src="{{ asset('storage/company_1.jpg') }}" class="img-fluid w-100 rounded"
                                            alt="Image" style="transition: transform 0.3s ease-in-out;">
                                    </div>
                                </div>
                                <div class="service-title text-center mt-n4">
                                    <div class="bg-primary text-center rounded p-3"
                                        style="transform: translateX(0%); z-index: 1; width: 80%; margin: 0 auto;">
                                        <a href="#" class="h5 text-white mb-0" style="text-decoration: none;">Product
                                            Name</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Items End -->
            </div>

        </div>
    </div>
    <!-- Services End -->

    <style>
        .service-img:hover img {
            transform: scale(1.05);
        }
    </style>
@endsection
