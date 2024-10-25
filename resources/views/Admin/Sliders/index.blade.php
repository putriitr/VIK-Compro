@extends('layouts.admin.master')

@section('content')
<div class="container">
    <h1>Daftar Sliders</h1>
    <a href="{{ route('sliders.create') }}" class="btn btn-primary">Tambah Slider</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Subjudul</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sliders as $slider)
                <tr>
                    <td>{{ $slider->subjudul }}</td>
                    <td>{{ $slider->judul }}</td>
                    <td>{{ $slider->deskripsi }}</td>
                    <td><img src="{{ asset($slider->gambar) }}" alt="{{ $slider->judul }}" width="100"></td>
                    <td>
                        <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        <a href="{{ route('sliders.show', $slider->id) }}" class="btn btn-info">Lihat</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
