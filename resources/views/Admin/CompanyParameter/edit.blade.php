@extends('layouts.admin.master')

@section('content')
    <div class="container">
        <h1>Edit Parameter Perusahaan</h1>
        <form action="{{ route('company.update', $companyParameter->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
                <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control" value="{{ $companyParameter->nama_perusahaan }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $companyParameter->email }}">
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">Telepon</label>
                <input type="text" name="no_telp" id="no_telp" class="form-control" value="{{ $companyParameter->no_telp }}">
            </div>
            <div class="mb-3">
                <label for="no_wa" class="form-label">Whatsapp</label>
                <input type="text" name="no_wa" id="no_wa" class="form-control" value="{{ $companyParameter->no_wa }}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control">{{ $companyParameter->alamat }}</textarea>
            </div>
            <div class="mb-3">
                <label for="ig" class="form-label">Instagram</label>
                <input type="text" name="ig" id="ig" class="form-control" value="{{ $companyParameter->ig }}">
            </div>
            <div class="mb-3">
                <label for="linkedin" class="form-label">LinkedIn</label>
                <input type="text" name="linkedin" id="linkedin" class="form-control" value="{{ $companyParameter->linkedin }}">
            </div>
            <div class="mb-3">
                <label for="ekatalog" class="form-label">E-Katalog</label>
                <input type="text" name="ekatalog" id="ekatalog" class="form-control" value="{{ $companyParameter->ekatalog }}">
            </div>
            <div class="mb-3">
                <label for="twitter" class="form-label">Twitter</label>
                <input type="text" name="twitter" id="twitter" class="form-control" value="{{ $companyParameter->twitter }}">
            </div>
            <div class="mb-3">
                <label for="fb" class="form-label">Facebook</label>
                <input type="text" name="fb" id="fb" class="form-control" value="{{ $companyParameter->fb }}">
            </div>
            <div class="mb-3">
                <label for="sejarah_perusahaan" class="form-label">Sejarah Perusahaan</label>
                <textarea name="sejarah_perusahaan" id="sejarah_perusahaan" class="form-control">{{ $companyParameter->sejarah_perusahaan }}</textarea>
            </div>
            <div class="mb-3">
                <label for="visi" class="form-label">Visi</label>
                <textarea name="visi" id="visi" class="form-control">{{ $companyParameter->visi }}</textarea>
            </div>
            <div class="mb-3">
                <label for="misi" class="form-label">Misi</label>
                <textarea name="misi" id="misi" class="form-control">{{ $companyParameter->misi }}</textarea>
            </div>
            <div class="mb-3">
                <label for="service_1" class="form-label">Service 1</label>
                <input type="text" name="service_1" id="service_1" class="form-control" value="{{ $companyParameter->service_1 }}">
            </div>
            <div class="mb-3">
                <label for="service_2" class="form-label">Service 2</label>
                <input type="text" name="service_2" id="service_2" class="form-control" value="{{ $companyParameter->service_2 }}">
            </div>
            <div class="mb-3">
                <label for="service_3" class="form-label">Service 3</label>
                <input type="text" name="service_3" id="service_3" class="form-control" value="{{ $companyParameter->service_3 }}">
            </div>
            <div class="mb-3">
                <label for="service_4" class="form-label">Service 4</label>
                <input type="text" name="service_4" id="service_4" class="form-control" value="{{ $companyParameter->service_4 }}">
            </div>
            <div class="mb-3">
                <label for="ecommerce" class="form-label">E-commerce</label>
                <input type="text" name="ecommerce" id="ecommerce" class="form-control" value="{{ $companyParameter->ecommerce }}">
            </div>
            <button type="submit" class="btn btn-success">Perbaharui</button>
            <a href="{{ route('company.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
