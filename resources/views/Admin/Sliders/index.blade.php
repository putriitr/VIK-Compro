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
                <th style="max-width: 100px; overflow: hidden; white-space: normal;">Subjudul</th>
                <th style="max-width: 100px; overflow: hidden; white-space: normal;">Judul</th>
                <th style="max-width: 250px; overflow: hidden; white-space: normal;">Deskripsi</th>
                <th style="max-width: 100px; overflow: hidden; white-space: normal;">Gambar</th>
                <th style="max-width: 150px; overflow: hidden; white-space: normal;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sliders as $slider)
                <tr>
                    <td style="max-width: 100px; overflow: hidden; white-space: normal;">{{ $slider->subjudul }}</td>
                    <td style="max-width: 100px; overflow: hidden; white-space: normal;">{{ $slider->judul }}</td>
                    <td style="max-width: 250px; overflow: hidden; white-space: normal;">{{ $slider->deskripsi }}</td>
                    <td style="max-width: 100px; overflow: hidden; white-space: normal;"><img src="{{ asset($slider->gambar) }}" alt="{{ $slider->judul }}" width="100"></td>
                    <td style="max-width: 150px; overflow: hidden; white-space: normal;">
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
