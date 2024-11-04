@extends('layouts.admin.master')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h1 class="h4">Daftar Mitra</h1>
                <a href="{{ route('admin.brand.create') }}" class="btn btn-primary">Tambah Mitra</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Gambar</th>
                                <th>Tipe</th>
                                <th>URL</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($brandPartners as $brandPartner)
                                <tr>
                                    <td>{{ $brandPartner->id }}</td>
                                    <td><img src="{{ asset($brandPartner->gambar) }}" alt="{{ asset($brandPartner->gambar) }}" class="img-thumbnail" style="max-width: 100px; height: auto;"></td>
                                    <td>{{ ucfirst($brandPartner->type) }}</td>
                                    <td>{{ $brandPartner->url ?? 'N/A' }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.brand.edit', $brandPartner->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('admin.brand.destroy', $brandPartner->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
