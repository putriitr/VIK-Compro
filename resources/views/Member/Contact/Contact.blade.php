@php
$compro = \App\Models\CompanyParameter::first();
$brand = \App\Models\BrandPartner::where('type', 'brand', 'nama')->get();
@endphp

@extends('layouts.Member.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ __('messages.contact_us') }}</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">{{ __('messages.home') }}</a></li>
                    <li class="breadcrumb-item active text-secondary">{{ __('messages.contact_us') }}</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid contact overflow-hidden py-5">
        <div class="container py-5">
            <div class="row g-5 mb-5">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary pe-3">{{ __('messages.quick_access') }}</h5>
                    </div>
                    <h1 class="display-5 mb-4">{{ __('messages.contact_title') }}</h1>
                    <p class="mb-5">{{ __('messages.contact_desc') }}</p>
                    <div class="d-flex border-bottom mb-4 pb-4">
                        <i class="fas fa-map-marked-alt fa-4x text-primary bg-light p-3 rounded"></i>
                        <div class="ps-3">
                            <h5>{{ __('messages.location') }}</h5>
                            <p>{{ $compro->alamat }}</p>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-xl-6">
                            <div class="d-flex">
                                <i class="fas fa-tty fa-3x text-primary"></i>
                                <div class="ps-3">
                                    <h5 class="mb-3">{{ __('messages.contact_us') }}</h5>
                                    <div class="mb-3">
                                        <h6 class="mb-0">{{ __('messages.phone') }} :</h6>
                                        <a href="#" class="fs-5 text-primary">{{ $compro->no_wa}}</a>
                                    </div>
                                    <div class="mb-3">
                                        <h6 class="mb-0">Email :</h6>
                                        <a href="#" class="fs-5 text-primary">{{ $compro->email }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex">
                                <i class="fas fa-clone fa-3x text-primary"></i>
                                <div class="ps-3">
                                    <h5 class="mb-3">{{ __('messages.opening_time') }}</h5>
                                    <div class="mb-3">
                                        <h6 class="mb-0">{{ __('messages.mon_fri') }} :</h6>
                                        <a href="#" class="fs-5 text-primary">{{ __('messages.mon_fri1') }}</a>
                                    </div>
                                    <div class="mb-3">
                                        <h6 class="mb-0">{{ __('messages.sat') }} :</h6>
                                        <a href="#" class="fs-5 text-primary">{{ __('messages.sat1') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <div class="me-4">
                            <div class="bg-light d-flex align-items-center justify-content-center"
                                style="width: 90px; height: 90px; border-radius: 10px;"><i
                                    class="fas fa-share fa-3x text-primary"></i></div>
                        </div>
                        <div class="d-flex">
                            <a class="btn btn-secondary border-secondary me-2 p-0" href="">facebook <i
                                    class="fas fa-chevron-circle-right"></i></a>
                            <a class="btn btn-secondary border-secondary mx-2 p-0" href="">twitter <i
                                    class="fas fa-chevron-circle-right"></i></a>
                            <a class="btn btn-secondary border-secondary mx-2 p-0" href="">instagram <i
                                    class="fas fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary pe-3">{{ __('messages.connect') }}</h5>
                    </div>
                    <h1 class="display-5 mb-4">{{ __('messages.send_your_message') }}</h1>
                    <p class="mb-3">{{ __('messages.msg1') }} <strong>{{ __('messages.msg2') }}</strong></p>
                    <form action="" method="POST">
                        @csrf
                        <div class="row g-4">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" name="first_name" class="form-control" id="first_name"
                                        placeholder="Your First Name" required>
                                    <label for="first_name">{{ __('messages.first_name') }}</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" name="last_name" class="form-control" id="last_name"
                                        placeholder="Your Last Name" required>
                                    <label for="last_name">{{ __('messages.last_name') }}</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Your Email" required>
                                    <label for="email">{{ __('messages.your_email') }}</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" name="phone" class="form-control" id="phone"
                                        placeholder="Your Phone" required>
                                    <label for="phone">{{ __('messages.phone') }}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="subject" class="form-control" id="subject"
                                        placeholder="Subject" required>
                                    <label for="subject">{{ __('messages.your_subject') }}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="message" class="form-control" placeholder="Leave a message here" id="message"
                                        style="height: 160px" required></textarea>
                                    <label for="message">{{ __('messages.your_message') }}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100 py-3">{{ __('messages.send_message') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="office pt-5">
                <div class="col-12 pt-5 wow zoomIn" data-wow-delay="0.1s">
                    <div class="rounded h-100">
                        <iframe class="rounded w-100" style="height: 500px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3160.8915155125464!2d106.84145537499018!3d-6.183059193804441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5425a168055%3A0xc1d79fd15a17dd56!2sPT.%20Virtual%20Inter%20Komunika!5e1!3m2!1sid!2sid!4v1729498268321!5m2!1sid!2sid"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Contact End -->
@endsection
