@extends('layouts.admin.master')

@section('content')
<div class="container">
    <h1>Edit Slider</h1>

    <form action="{{ route('sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="subjudul">Subjudul</label>
            <input type="text" class="form-control" name="subjudul" value="{{ $slider->subjudul }}" required>
        </div>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" value="{{ $slider->judul }}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" required>{{ $slider->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" name="gambar" accept="image/*">
            <img src="{{ asset($slider->gambar) }}" alt="{{ $slider->judul }}" width="100">
        </div>
        <div class="form-group">
            <label for="button_text">Teks Tombol</label>
            <input type="text" class="form-control" name="button_text" value="{{ $slider->button_text }}">
        </div>
        <div class="form-group">
            <label for="button_url">URL Tombol</label>
            <input type="url" class="form-control" name="button_url" value="{{ $slider->button_url }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
