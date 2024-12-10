@extends('layouts.Admin.master')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h1 class="h4">Parameter Perusahaan</h1>
            <a href="{{ route('parameter.create') }}" class="btn btn-primary">Tambah Parameter Baru</a>
        </div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>WhatsApp 1</th>
                            <th>WhatsApp 2</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($companyParameters as $parameter)
                            <tr>
                                <td>{{ $parameter->email }}</td>
                                <td>{{ $parameter->whatsapp_1 }}</td>
                                <td>{{ $parameter->whatsapp_2 }}</td>
                                <td>{{ $parameter->alamat }}</td>
                                <td>
                                    <a href="{{ route('parameter.edit', $parameter->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('parameter.destroy', $parameter->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this?')">Hapus</button>
                                    </form>
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
