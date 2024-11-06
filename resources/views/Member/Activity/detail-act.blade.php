@extends('layouts.Member.master')

@section('content')
    <!-- Activity Detail Start -->
    <div id="act-1" class="container-fluid appointment py-5">
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

            @if (!$activity)
                <div class="alert alert-warning">No activity found.</div>
            @else
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="section-title text-start">
                            <h1 class="display-4 mb-4">{{ $activity->title }}</h1>
                            <p class="mb-4" style="font-size: 0.875rem; color: #6c757d; margin: 0; line-height: 1.5; overflow: hidden; white-space: normal; word-wrap: break-word; text-align: justify; font-weight: bold;">
                                <i class="fa fa-calendar-alt text-primary"></i>
                                {{ $activity->date->format('d M Y') }}
                            </p>
                            <div class="row g-4">
                                <div class="col-sm-12">
                                    <div class="video h-100">
                                        <img src="{{ asset($activity->image_url) }}" class="img-fluid rounded" style="object-fit: cover; width: 100%; height: 400px; margin-bottom: 10px;" alt="Activity Image">
                                    </div>
                                </div>
                            </div>

                            <h1 class="mb-4" style="font-size: 1.2rem; color: #6c757d; margin: 0; line-height: 1.5; text-align: justify; margin-top: 10px;">
                                {{ $activity->description }}
                            </h1>
                        </div>
                    </div>
                </div>
            @endif<br><br>
            <div class="col-12 text-center">
                <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp"
                    data-wow-delay="0.1s" href="{{ route('member.activity') }}"><i class="fas fa-arrow-left"></i> Back to Activity Page</a>
            </div>
        </div>
    </div>
@endsection
