@extends('layouts.Member.master')

@section('content')
    <!-- Counter Facts Start -->
    <div class="container-fluid counter-facts py-5">
        <h1 class="display-5 mb-4 text-center">Member Portal</h1>
        <p class="mb-0 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque
            sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus
            saepe in ab? Repellat!</p>
        <div class="container py-5">
            <div class="row">
                <div class="row g-4 justify-content-center">
                    <div class="col-12 col-sm-6 col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-box"></i>
                            </div>
                            <div class="counter-content">
                                <h3>{{ __('messages.my_product') }}</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="{{ route('portal.user-product') }}"
                                        class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">
                                        {{ __('messages.see') }} <i class="fas fa-hand-point-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="counter-content">
                                <h3>{{ __('messages.user_manual') }}</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="{{ route('portal.instructions') }}"
                                        class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">
                                        {{ __('messages.see') }} <i class="fas fa-hand-point-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="counter-content">
                                <h3>{{ __('messages.doc_cert') }}</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="{{ route('portal.document') }}"
                                        class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">
                                        {{ __('messages.see') }} <i class="fas fa-hand-point-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-center" style="margin-top: 40px;">
                    <div class="col-12 col-sm-6 col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-video"></i>
                            </div>
                            <div class="counter-content">
                                <h3>{{ __('messages.tutor') }}</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="{{ route('portal.tutorials') }}"
                                        class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">
                                        {{ __('messages.see') }} <i class="fas fa-hand-point-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-ticket-alt"></i>
                            </div>
                            <div class="counter-content">
                                <h3>{{ __('messages.ticketing') }}</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href=""
                                        class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">
                                        {{ __('messages.see') }} <i class="fas fa-hand-point-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-question-circle"></i>
                            </div>
                            <div class="counter-content">
                                <h3>{{ __('messages.qna') }}</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="{{ route('portal.qna') }}"
                                        class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">
                                        {{ __('messages.see') }} <i class="fas fa-hand-point-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Facts End -->
@endsection
