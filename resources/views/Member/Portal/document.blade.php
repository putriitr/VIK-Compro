@extends('layouts.Member.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb"
        style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('assets/img/page-header.jpg') }}');">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ __('messages.doc_cert') }}</h3>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('messages.home') }}</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/portal') }}">{{ __('messages.portal_member') }}</a></li>
                <li class="breadcrumb-item active text-primary">{{ __('messages.doc_cert') }}</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Services Start -->
    <div class="container py-5">
        <div class="row g-4 justify-content-center">
            @forelse($uniqueProduks as $produk)
                <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-img rounded-top border border-secondary" style="border-radius: 10px;">
                        <img src="{{ asset($produk->images->first()->gambar ?? 'assets/img/default.jpg') }}"
                            class="img-fluid rounded-top w-100" alt="{{ $produk->nama }}">
                        <div class="service-content-inner p-4" style="border-radius: 0 0 10px 10px;">
                            <h5 class="mb-4">{{ $produk->nama }}</h5>
                            <p class="mb-4">{{ Str::limit($produk->kegunaan, 100) }}</p>
                            @if ($produk->documentCertificationsProduk->isNotEmpty())
                                @foreach ($produk->documentCertificationsProduk as $index => $document)
                                    <div class="mb-3">
                                        <h6 class="mb-2">Document {{ $loop->iteration }}</h6>
                                        <div class="d-flex flex-wrap gap-2">
                                            <a href="{{ asset($document->pdf) }}"
                                                download="{{ $produk->nama }}_{{ $loop->iteration }}_manual.pdf"
                                                class="btn btn-primary rounded-pill text-white py-2 px-4 flex-fill">Download{{ $loop->iteration }}</a>
                                            <a href="{{ asset($document->pdf) }}"
                                                class="btn btn-secondary rounded-pill text-white py-2 px-4 flex-fill"
                                                target="_blank">View{{ $loop->iteration }}</a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p class="text-muted">No manuals available</p>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        <p class="mb-0">You don't have any products associated with your account.</p>
                        <p class="mb-0">Anda tidak memiliki produk apa pun yang terkait dengan akun Anda.</p>
                    </div>
                </div>
            @endforelse

        </div>
    </div>
    <!-- Services End -->
@endsection
