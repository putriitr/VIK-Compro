@extends('layouts.Member.master')

@section('content')
<!-- Counter Facts Start -->
<div class="container-fluid service py-5"
    style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.7)), url('{{ asset('assets/img/company_1.jpg') }}'); background-size: cover; background-position: center;">
    <h1 class="display-5 mb-4 text-center">Member Portal</h1>
    <p class="mb-0 text-center">{{ __('messages.portal_desc') }}</p>
    <div class="container py-5">
        <div class="row g-4 justify-content-center">
            @php
                $cards = [
                    ['icon' => 'fas fa-box', 'title' => __('messages.my_product'), 'route' => route('portal.user-product')],
                    ['icon' => 'fas fa-book', 'title' => __('messages.user_manual'), 'route' => route('portal.instructions')],
                    ['icon' => 'fas fa-file-alt', 'title' => __('messages.doc_cert'), 'route' => route('portal.document')],
                    ['icon' => 'fas fa-video', 'title' => __('messages.tutor'), 'route' => route('portal.tutorials')],
                    ['icon' => 'fas fa-ticket-alt', 'title' => __('messages.ticketing'), 'route' => '#'],
                    ['icon' => 'fas fa-question-circle', 'title' => __('messages.qna'), 'route' => route('portal.qna')],
                ];
            @endphp

            @foreach ($cards as $index => $card)
                <div class="col-12 col-sm-6 col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="{{ 0.1 * ($index + 1) }}s">
                    <div class="card bg-light text-center border-0 shadow-lg rounded-4">
                        <div class="card-body py-5">
                            <div class="counter-icon mb-4 text-primary fs-1">
                                <i class="{{ $card['icon'] }}"></i>
                            </div>
                            <h3 class="card-title mb-4">{{ $card['title'] }}</h3>
                            <a href="{{ $card['route'] }}" class="btn btn-primary px-4 rounded-pill">
                                {{ __('messages.more') }} <i class="fas fa-hand-point-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Counter Facts End -->
@endsection
