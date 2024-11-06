@extends('layouts.Member.master')

@section('content')
    <div class="container-fluid country overflow-hidden py-5">
        <div class="container py-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 100px;">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">{{ __('messages.company_activity') }}</h5>
                </div>
                <h1 class="display-5 mb-4">{{ __('messages.activity') }}</h1>
                <p class="mb-0">{{ __('messages.activity_desc') }}</p>
            </div>
            <div class="row mb-4" style="margin-top: 50px; margin-bottom: 50px;">
                <!-- Showing X-Y of Z -->
                <div class="col-md-4 d-flex align-items-center">
                    @if ($activities->count() > 0)
                        <p class="mb-0">Menampilkan {{ $activities->firstItem() }} - {{ $activities->lastItem() }} dari
                            {{ $activities->total() }} </p>
                    @else
                        <p class="mb-0">Tidak ada aktivitas yang tersedia.</p>
                    @endif
                </div>
                <!-- Show per Page and Sort By -->
                <div class="col-md-8 d-flex justify-content-end align-items-center">
                    <div class="d-flex align-items-center">
                        <label for="sort-by" class="mb-0 me-4" style="display: inline-block; white-space: nowrap;">
                            Urut berdasarkan :
                        </label>
                        <select id="sort-by" class="form-select form-select-sm">
                            <option value="newest">Terbaru</option>
                            <option value="latest">Terlama</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    {{ $activities->links() }}
                </div>
            </div>
            <div class="row g-4 text-center mb-4 justify-content-center align-items-center"
                style="margin-top: 50px; margin-bottom: 50px;">
                @foreach ($activities as $activity)
                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="{{ asset($activity->image_url) }}" class="img-fluid w-100 rounded"
                                    alt="{{ $activity->title }}">
                            </div>
                            <div class="country-name">
                                <a href="{{ route('member.activity.detail-act', $activity->id) }}" class="text-white fs-4">{{ $activity->title }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
