@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Parameter Perusahaan</h1>
        <a href="{{ route('company.create') }}" class="btn btn-primary mb-3">Add New</a>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->nama_perusahaan }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->no_telp }}</td>
                        <td>
                            <a href="{{ route('company.edit', $company->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('company.destroy', $company->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
