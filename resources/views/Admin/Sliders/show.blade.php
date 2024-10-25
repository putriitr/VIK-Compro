@extends('layouts.admin.master')

@section('content')
<div class="container">
    <h1>{{ $slider->judul }}</h1>
    <p><strong>Subjudul:</strong> {{ $slider->subjudul }}</p>
    <p><strong>Deskripsi:</strong> {{ $slider->deskripsi }}</p>
    <img src="{{ asset($slider->gambar) }}" alt="{{ $slider->judul }}" width="300">
    <p><strong>Teks Tombol:</strong> {{ $slider->button_text }}</p>
    <p><strong>URL Tombol:</strong> <a href="{{ $slider->button_url }}">{{ $slider->button_url }}</a></p>

    <a href="{{ route('sliders.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
