@extends('layouts.admin.master')

@section('content')
<div class="container">
    <h1>Edit Parameter Perusahaan</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('companies.update', $company->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama Perusahaan</label>
            <input type="text" class="form-control" name="name" value="{{ $company->name }}" required>
        </div>
        <div class="form-group">
            <label for="short_history">Sejarah Singkat</label>
            <textarea class="form-control" name="short_history" required>{{ $company->short_history }}</textarea>
        </div>
        <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" class="form-control" name="address" value="{{ $company->address }}" required>
        </div>
        <div class="form-group">
            <label for="phone">No Telepon</label>
            <input type="text" class="form-control" name="phone" value="{{ $company->phone }}" required>
        </div>
        <div class="form-group">
            <label for="whatsapp">No WhatsApp</label>
            <input type="text" class="form-control" name="whatsapp" value="{{ $company->whatsapp }}">
        </div>
        <div class="form-group">
            <label for="vision">Visi</label>
            <textarea class="form-control" name="vision" required>{{ $company->vision }}</textarea>
        </div>
        <div class="form-group">
            <label for="mission">Misi</label>
            <textarea class="form-control" name="mission" required>{{ $company->mission }}</textarea>
        </div>
        <div class="form-group">
            <label for="service_1">Service 1</label>
            <input type="text" class="form-control" name="service_1" value="{{ $company->service_1 }}" required>
        </div>
        <div class="form-group">
            <label for="service_2">Service 2</label>
            <input type="text" class="form-control" name="service_2" value="{{ $company->service_2 }}">
        </div>
        <div class="form-group">
            <label for="service_3">Service 3</label>
            <input type="text" class="form-control" name="service_3" value="{{ $company->service_3 }}">
        </div>
        <div class="form-group">
            <label for="service_4">Service 4</label>
            <input type="text" class="form-control" name="service_4" value="{{ $company->service_4 }}">
        </div>
        <div class="form-group">
            <label for="document_1">Dokumen 1</label>
            <input type="text" class="form-control" name="document_1" value="{{ $company->document_1 }}">
        </div>
        <div class="form-group">
            <label for="document_2">Dokumen 2</label>
            <input type="text" class="form-control" name="document_2" value="{{ $company->document_2 }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $company->email }}" required>
        </div>
        <div class="form-group">
            <label for="ecommerce">E-Commerce URL</label>
            <input type="text" class="form-control" name="ecommerce" value="{{ $company->ecommerce }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
