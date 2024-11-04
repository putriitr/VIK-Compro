@extends('layouts.admin.master')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="h4">Lokasi Pengguna</h2>
            <a href="{{ route('admin.location.create') }}" class="btn btn-primary">Tambah Lokasi Baru</a>
        </div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($locations->isEmpty())
                <p>Tidak ada lokasi ditemukan.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Gambar</th>
                                <th>Lintang</th>
                                <th>Bujur</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($locations as $location)
                                <tr>
                                    <td>{{ $location->id }}</td>
                                    <td>{{ $location->name }}</td>
                                    <td>
                                        <img src="{{ asset($location->image_url) }}" alt="{{ $location->name }}" width="100">
                                    </td>
                                    <td>{{ $location->latitude }}</td>
                                    <td>{{ $location->longitude }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.location.show', $location->id) }}" class="btn btn-sm btn-info">Lihat</a>
                                            <a href="{{ route('admin.location.edit', $location->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('admin.location.destroy', $location->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus lokasi ini?');">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
