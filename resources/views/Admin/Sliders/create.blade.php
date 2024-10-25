@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Tambah Slider</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="subjudul">Subjudul</label>
                <input type="text" class="form-control" name="subjudul" required>
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" required></textarea>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" name="gambar" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="button_text">Teks Tombol</label>
                <input type="text" class="form-control" name="button_text">
            </div>
            <div class="form-group">
                <label for="button_url">URL Tombol</label>
                <input type="url" class="form-control" name="button_url">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
