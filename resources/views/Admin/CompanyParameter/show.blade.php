@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Company Parameter Details</h1>
        <div class="mb-3">
            <strong>Nama Perusahaan:</strong> {{ $companyParameter->nama_perusahaan }}
        </div>
        <div class="mb-3">
            <strong>Email:</strong> {{ $companyParameter->email }}
        </div>
        <div class="mb-3">
            <strong>No. Telp:</strong> {{ $companyParameter->no_telp }}
        </div>
        <div class="mb-3">
            <strong>No. WA:</strong> {{ $companyParameter->no_wa }}
        </div>
        <div class="mb-3">
            <strong>Alamat:</strong> {{ $companyParameter->alamat }}
        </div>
        <div class="mb-3">
            <strong>Instagram:</strong> {{ $companyParameter->ig }}
        </div>
        <div class="mb-3">
            <strong>LinkedIn:</strong> {{ $companyParameter->linkedin }}
        </div>
        <div class="mb-3">
            <strong>E-Katalog:</strong> {{ $companyParameter->ekatalog }}
        </div>
        <div class="mb-3">
            <strong>Twitter:</strong> {{ $companyParameter->twitter }}
        </div>
        <div class="mb-3">
            <strong>Facebook:</strong> {{ $companyParameter->fb }}
        </div>
        <div class="mb-3">
            <strong>Sejarah Perusahaan:</strong> {{ $companyParameter->sejarah_perusahaan }}
        </div>
        <div class="mb-3">
            <strong>Visi:</strong> {{ $companyParameter->visi }}
        </div>
        <div class="mb-3">
            <strong>Misi:</strong> {{ $companyParameter->misi }}
        </div>
        <div class="mb-3">
            <strong>Service 1:</strong> {{ $companyParameter->service_1 }}
        </div>
        <div class="mb-3">
            <strong>Service 2:</strong> {{ $companyParameter->service_2 }}
        </div>
        <div class="mb-3">
            <strong>Service 3:</strong> {{ $companyParameter->service_3 }}
        </div>
        <div class="mb-3">
            <strong>Service 4:</strong> {{ $companyParameter->service_4 }}
        </div>
        <div class="mb-3">
            <strong>E-commerce:</strong> {{ $companyParameter->ecommerce }}
        </div>
        <a href="{{ route('company.index') }}" class="btn btn-secondary">Back to List</a>
        <a href="{{ route('company.edit', $companyParameter->id) }}" class="btn btn-primary">Edit</a>
    </div>
@endsection
