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
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -30px;">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="service-item">
                                <div class="service-inner position-relative" style="overflow: hidden; border-radius: 8px;">
                                    <div class="service-img">
                                        <img src="{{ asset('assets/img/product-1.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                                    </div>
                                    <!-- Gambar kecil di bawah gambar utama -->
                                    <div style="display: flex; margin-top: 15px;">
                                        <img src="{{ asset('assets/img/product-1.jpg') }}" class="img-fluid" style="border-radius: 8px; width: 20%; margin-right: 5px;" alt="Small Image 1">
                                        <img src="{{ asset('assets/img/product-1.jpg') }}" class="img-fluid" style="border-radius: 8px; width: 20%; margin-right: 5px;" alt="Small Image 2">
                                        <img src="{{ asset('assets/img/product-1.jpg') }}" class="img-fluid" style="border-radius: 8px; width: 20%;" alt="Small Image 3">
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('product')}}" class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0" style="margin-top: 20px;"><i class="fas fa-arrow-left"></i> Back to My Products</a>
                        </div>

                        <div class="col-lg-6">
                            <div class="service-item"
                                style="border-radius: 10px; padding: 20px; background-color: #f9f9f9;">
                                <div class="service-title">
                                    <!-- Nama Produk -->
                                    <a href="#" class="h5 text-dark mb-3"
                                        style="text-decoration: none; font-weight: bold;">Nama Produk</a>
                                    <!-- Deskripsi Produk -->
                                    <p style="font-size: 14px; color: #666; margin-top: 10px;"><strong>Deskripsi :</strong>
                                    </p>
                                    <p style="font-size: 14px; color: #666; margin-bottom: 15px; text-align: justify;">
                                        Ini adalah deskripsi singkat produk yang memberikan gambaran mengenai fitur dan manfaat dari produk tersebut.
                                    </p>
                                    <!-- Merek -->
                                    <div style="display: flex; font-size: 14px; color: #666; margin-bottom: 5px;">
                                        <p style="flex: 0 0 100px; margin: 0;"><strong>Merek</strong></p>
                                        <p style="flex: 1; margin: 0;">Nama Merek</p>
                                    </div>
                                    <!-- Kategori -->
                                    <div style="display: flex; font-size: 14px; color: #666; margin-bottom: 5px;">
                                        <p style="flex: 0 0 100px; margin: 0;"><strong>Kategori</strong></p>
                                        <p style="flex: 1; margin: 0;">Nama Kategori</p>
                                    </div>
                                    <!-- Link e-Katalog -->
                                    <div style="display: flex; font-size: 14px; color: #666; margin-bottom: 15px;">
                                        <p style="flex: 0 0 100px; margin: 0;"><strong>E-Katalog</strong></p>
                                        <p style="flex: 1; margin: 0;">
                                            <a href="#"
                                                style="font-size: 14px; color: #6196FF; text-decoration: underline;">Lihat
                                                Disini</a>
                                        </p>
                                    </div>
                                    <!-- Spesifikasi Produk -->
                                    <p style="font-size: 14px; color: #666; margin-bottom: 5px;"><strong>Spesifikasi
                                            :</strong></p>
                                    <ul
                                        style="font-size: 14px; color: #666; padding-left: 20px; margin-top: 5px; list-style-type: none;">
                                        <li style="margin-bottom: 5px; position: relative; padding-left: 20px;">
                                            <span style="position: absolute; left: 0; top: 0;">&#9656;</span> Spesifikasi 1
                                        </li>
                                        <li style="margin-bottom: 5px; position: relative; padding-left: 20px;">
                                            <span style="position: absolute; left: 0; top: 0;">&#9656;</span> Spesifikasi 2
                                        </li>
                                        <li style="margin-bottom: 5px; position: relative; padding-left: 20px;">
                                            <span style="position: absolute; left: 0; top: 0;">&#9656;</span> Spesifikasi 3
                                        </li>
                                        <li style="position: relative; padding-left: 20px;">
                                            <span style="position: absolute; left: 0; top: 0;">&#9656;</span> Spesifikasi 4
                                        </li>
                                    </ul>

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
