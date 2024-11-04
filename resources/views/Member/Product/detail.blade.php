@extends('layouts.Member.master')

@section('content')
    <!-- Services Start -->
    <div class="container-fluid service overflow-hidden pt-5">
        <div class="container py-5">
            <div class="row g-4">
                <!-- Product Items Start -->
                <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -30px;">
                    <div class="row g-4">
                        <div class="col-lg-7">
                            <div class="service-item">
                                <div class="service-inner position-relative" style="overflow: hidden; border-radius: 8px;">
                                    <div class="service-img">
                                        <img src="{{ asset('assets/img/product-1.jpg') }}" class="img-fluid w-100 rounded"
                                            alt="Image">
                                    </div>
                                    <!-- Gambar kecil di bawah gambar utama -->
                                    <div style="display: flex; margin-top: 15px;">
                                        <img src="{{ asset('assets/img/product-1.jpg') }}" class="img-fluid"
                                            style="border-radius: 8px; width: 20%; margin-right: 5px;" alt="Small Image 1">
                                        <img src="{{ asset('assets/img/product-1.jpg') }}" class="img-fluid"
                                            style="border-radius: 8px; width: 20%; margin-right: 5px;" alt="Small Image 2">
                                        <img src="{{ asset('assets/img/product-1.jpg') }}" class="img-fluid"
                                            style="border-radius: 8px; width: 20%;" alt="Small Image 3">
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('product') }}"
                                class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0"
                                style="margin-top: 20px;"><i class="fas fa-arrow-left"></i> Back to Product Page</a>
                        </div>

                        <div class="col-lg-5">
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
                                        Ini adalah deskripsi singkat produk yang memberikan gambaran mengenai fitur dan
                                        manfaat dari produk tersebut.
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
                <!-- Product Items End -->

                <!-- Sidebar Start -->
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div style="margin-top: -60px;">
                        <div
                            style="display: flex; align-items: center; border: 1px solid #ccc; border-radius: 25px; overflow: hidden;">
                            <input type="text" placeholder="Type Keywords Here .."
                                style="flex: 1; padding: 10px; border: none; outline: none;" />
                            <button
                                style="padding: 10px 15px; background-color: #003A66; color: white; border: none; cursor: pointer;">
                                <i class="fa fa-search" style="margin: 0;"></i>
                            </button>
                        </div>
                    </div>
                    <div style="margin-top: 50px; width: 300px;">
                        <span style="font-size: 14px; font-weight: 500; display: block; margin-bottom: 10px;">Kategori
                            Produk</span>
                        <div style="">
                            <div style="display: flex; align-items: center; border-bottom: 1px solid #ccc; padding: 10px;">
                                <i class="fa fa-vial" style="color: #003A66; margin-right: 10px; cursor: pointer;"></i>
                                <span style="flex: 1; font-size: 16px; font-weight: 500;">Labware</span>
                            </div>
                            <div style="display: flex; align-items: center; border-bottom: 1px solid #ccc; padding: 10px;">
                                <i class="fa fa-flask" style="color: #003A66; margin-right: 10px; cursor: pointer;"></i>
                                <span style="flex: 1; font-size: 16px; font-weight: 500;">Bahan Kimia</span>
                            </div>
                            <div style="display: flex; align-items: center; border-bottom: 1px solid #ccc; padding: 10px;">
                                <i class="fa fa-tint" style="color: #003A66; margin-right: 10px; cursor: pointer;"></i>
                                <span style="flex: 1; font-size: 16px; font-weight: 500;">Pipet Laboratorium</span>
                            </div>
                            <div style="display: flex; align-items: center; border-bottom: 1px solid #ccc; padding: 10px;">
                                <i class="fa fa-balance-scale"
                                    style="color: #003A66; margin-right: 10px; cursor: pointer;"></i>
                                <span style="flex: 1; font-size: 16px; font-weight: 500;">Alat Ukur</span>
                            </div>
                            <div style="display: flex; align-items: center; border-bottom: 1px solid #ccc; padding: 10px;">
                                <i class="fa fa-tools" style="color: #003A66; margin-right: 10px; cursor: pointer;"></i>
                                <span style="flex: 1; font-size: 16px; font-weight: 500;">Peralatan Umum</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar End -->
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
