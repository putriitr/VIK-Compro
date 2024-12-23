@extends('layouts.Member.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb"
        style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.7)), url('{{ asset('assets/img/company_1.jpg') }}'); background-size: cover; height: 350px;">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ __('messages.about_us') }}</h3>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">{{ __('messages.home') }}</a>
                </li>
                <li class="breadcrumb-item active text-secondary">{{ __('messages.about_us') }}</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="bg-light rounded">
                        <img src="{{ asset('assets/img/company_2.jpg') }}" class="img-fluid w-100"
                            style="margin-bottom: -2px;" alt="Image">
                        {{-- <img src="{{ asset('assets/img/company_2.jpg') }}"
                            class="img-fluid w-100 border-bottom border-5 border-primary"
                            style="border-top-right-radius: 300px; border-top-left-radius: 300px;" alt="Image"> --}}
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h5 class="sub-title pe-3">{{ __('messages.about_us') }}</h5>
                    <h1 class="display-5 mb-4">{{ $company->nama_perusahaan ?? '' }}</h1>
                    <p class="mb-4">{{ $company->sejarah_singkat ?? ' ' }}</p>
                    <div class="row gy-4 align-items-center">
                        <div class="col-12 col-sm-6 d-flex align-items-center">
                            <i class="fas fa-passport fa-3x text-secondary me-3"></i>
                            <div>
                                <h6 class="mb-1">{{ __('messages.NIB') }}</h6>
                                <p class="mb-0">{{ $company->nomor_induk_berusaha }}</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 d-flex align-items-center">
                            <i class="fas fa-passport fa-3x text-secondary me-3"></i>
                            <div>
                                <h5 class="mb-1">{{ __('messages.SK') }}</h5>
                                <p class="mb-0">{{ $company->surat_keterangan }}</p>
                            </div>
                        </div>
                        <div class="col-4 col-md-3">
                            <div class="bg-light text-center rounded p-3">
                                <div class="mb-2">
                                    <i class="fas fa-ticket-alt fa-4x text-primary"></i>
                                </div>
                                <h1 class="display-5 fw-bold mb-2">2</h1>
                                <p class="text-muted mb-0">Years of Experience</p>
                            </div>
                        </div>
                        <div class="col-8 col-md-9">
                            <div class="mb-5">
                                <p class="text-primary h6 mb-3"><i
                                        class="fa fa-check-circle text-secondary me-2"></i>{{ __('messages.service1') }}
                                </p>
                                <p class="text-primary h6 mb-3"><i
                                        class="fa fa-check-circle text-secondary me-2"></i>{{ __('messages.service2') }}
                                </p>
                                <p class="text-primary h6 mb-3"><i
                                        class="fa fa-check-circle text-secondary me-2"></i>{{ __('messages.service3') }}
                                </p>
                            </div>
                            <div class="d-flex flex-wrap">
                                <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                                    <a href="" class="position-relative wow tada" data-wow-delay=".9s">
                                        <i class="fa fa-phone-alt text-primary fa-3x"></i>
                                        <div class="position-absolute" style="top: 0; left: 25px;">
                                            <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <span class="text-primary">{{ __('messages.have_ques') }}</span>
                                    <span class="text-secondary fw-bold fs-5"
                                        style="letter-spacing: 2px;">{{ $company->no_telepon ?? '' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Training Start -->
    <div class="container-fluid training overflow-hidden bg-light py-5">
        <div class="container py-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">{{ __('messages.tujuan_kami') }}</h5>
                </div>
                <h1 class="display-5 mb-4">{{ __('messages.visi_misi_perusahaan') }}</h1>
                <p class="mb-0">{{ __('messages.visi_misi_desc') }}</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-1 col-lg-1 col-xl-1 wow fadeInUp" data-wow-delay="0.1s"></div>
                <div class="col-lg-5 col-lg-5 col-xl-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="{{ asset('assets/img/visi (2).jpg') }}" class="img-fluid w-100 rounded"
                                alt="Image" style="width: 100%; height: 300px;">
                            <div class="training-title-name">
                                <a href="#" class="h1 text-white mb-0">{{ __('messages.company_visi') }}</a>
                            </div>
                        </div>
                        <div class="training-content bg-secondary rounded-bottom p-4">
                            <a href="#">
                                <h4 class="text-white">{{ __('messages.visi') }}</h4>
                            </a>
                            <p class="text-white-50">{{ $company->visimisi_1 }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-lg-5 col-xl-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="{{ asset('assets/img/visi (1).jpg') }}" class="img-fluid w-100 rounded"
                                alt="Image" style="width: 100%; height: 300px;">
                            <div class="training-title-name">
                                <a href="#" class="h1 text-white mb-0">{{ __('messages.company_misi') }}</a>
                            </div>
                        </div>
                        <div class="training-content bg-secondary rounded-bottom p-4">
                            <a href="#">
                                <h4 class="text-white">{{ __('messages.misi') }}</h4>
                            </a>
                            <p class="text-white-50">{{ $company->visimisi_2 }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-lg-1 col-xl-1 wow fadeInUp" data-wow-delay="0.1s"></div>
            </div>
        </div>
    </div>
    <!-- Training End -->

    <!-- Features Start -->
    <div class="container-fluid features overflow-hidden py-5">
        <div class="container">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">{{ __('messages.com_serv1') }}</h5>
                </div>
                <h1 class="display-5 mb-4">{{ __('messages.com_serv2') }}</h1>
                <p class="mb-0">{{ __('messages.com_serv3') }}</p>
            </div>
            <div class="row g-4 justify-content-center text-center">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item text-center p-4">
                        <div class="feature-icon p-3 mb-4">
                            <i class="fas fa-headset fa-4x text-primary"></i>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-3">{{ __('messages.layanan1') }}</h5>
                            <p class="mb-3">{{ __('messages.layanan1_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-item text-center p-4">
                        <div class="feature-icon p-3 mb-4">
                            <i class="fas fa-box fa-4x text-primary"></i>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-3">{{ __('messages.layanan2') }}</h5>
                            <p class="mb-3">{{ __('messages.layanan2_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-item text-center p-4">
                        <div class="feature-icon p-3 mb-4">
                            <i class="fas fa-tools fa-4x text-primary"></i>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-3">{{ __('messages.layanan3') }}</h5>
                            <p class="mb-3">{{ __('messages.layanan3_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="feature-item text-center p-4">
                        <div class="feature-icon p-3 mb-4">
                            <i class="fas fa-file-alt fa-4x text-primary"></i>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-3">{{ __('messages.layanan4') }}</h5>
                            <p class="mb-3">{{ __('messages.layanan4_desc') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->
@endsection
