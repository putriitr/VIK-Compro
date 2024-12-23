@extends('layouts.Member.master2')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <title>Register</title>
        <style>
            body {
                font-family: 'Urbanist', sans-serif;
                background: #f5f7fa;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
            }

            .login-wrapper {
                width: 50%;
                background: white;
                display: flex;
                border-radius: 15px;
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            }

            .login-left {
                width: 100%;
                padding: 40px;
                background-color: #42b0a0;
                border-radius: 15px;
                color: white;
            }

            .form-title {
                font-size: 2rem;
                font-weight: 700;
                color: #333;
                margin-bottom: 20px;
            }

            .form-control {
                border-radius: 10px;
                padding: 15px;
                font-size: 1rem;
                margin-bottom: 15px;
            }

            .btn-submit {
                background-color: #42b0a0;
                color: white;
                font-weight: 600;
                width: 100%;
                padding: 12px;
                border-radius: 10px;
                margin-top: 20px;
                transition: 0.3s;
            }

            .btn-submit:hover {
                background-color: #36a48f;
            }

            .link {
                color: #e8efee;
                font-weight: 600;
                transition: 0.3s;
            }

            .link:hover {
                color: #36a48f;
            }

            .social-login {
                display: flex;
                justify-content: space-between;
                margin-bottom: 20px;
            }

            .social-login i {
                font-size: 1.5rem;
                cursor: pointer;
            }

            .login-right .form-title {
                font-size: 2rem;
                font-weight: 700;
                color: #333;
                margin-bottom: 20px;
            }

            .login-right p {
                font-size: 1rem;
                color: #777;
                margin-bottom: 20px;
            }

            .logo {
                position: absolute;
                top: 20px;
                left: 20px;
                width: 120px;
            }

            .login-right .btn-submit:hover {
                background-color: #36a48f;
            }
        </style>
    </head>

    <body>
        <img src="{{ asset('assets/img/logo-vik.png') }}" alt="Company Logo" class="logo">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="login-wrapper">
            <div class="login-left">
                <h3 class="form-title text-center">{{ __('messages.regis_desc2') }}</h3><br>
                <form action="{{ route('distributors.register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="{{ __('messages.name') }}" required>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                                    required>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="{{ __('messages.password') }}" required>
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control" placeholder="{{ __('messages.password1') }}" required>
                                @error('password_confirmation')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control"
                                placeholder="{{ __('messages.company_name1') }}" required>
                            @error('nama_perusahaan')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="pic" id="pic" class="form-control"
                                    placeholder="{{ __('messages.pic_name') }}" required>
                                @error('pic')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="nomor_telp_pic" id="nomor_telp_pic" class="form-control"
                                    placeholder="{{ __('messages.pic_phone') }}" required>
                                @error('nomor_telp_pic')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dokumen">{{ __('messages.upload_doc1') }}</label>
                                <input type="file" name="dokumen" id="dokumen" class="form-control-file"
                                    accept=".pdf,.jpg,.png"
                                    style="display: block; width: 100%; padding: 10px; font-size: 14px;
                                        border: 1px solid #ccc; border-radius: 5px; background-color: white;
                                        color: black; cursor: pointer;"
                                    required>

                                @error('dokumen')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nib">{{ __('messages.upload_doc2') }}</label>
                                <input type="file" name="nib" id="nib" class="form-control-file"
                                    accept=".pdf,.jpg,.png"
                                    style="display: block; width: 100%; padding: 10px; font-size: 14px;
                                        border: 1px solid #ccc; border-radius: 5px; background-color: white;
                                        color: black; cursor: pointer;"
                                    required>
                                @error('nib')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn-submit">{{ __('messages.daftar') }}</button>
                </form>

                <div class="form-row align-items-center justify-content-between mb-4 mt-3">
                    <div class="form-prompt-wrapper">
                        <div class="register-distributor">
                            {{ __('messages.login_acc') }}
                            <a href="{{ route('login') }}" class="" style="color: #333; font-weight: bold;">
                                {{ __('messages.login_here') }}
                            </a>
                        </div>
                    </div>

                    <div class="form-prompt-wrapper">
                        <a href="{{ route('home') }}" class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-chevron-left me-1" style="color: white;"></i>
                            <i class="fas fa-home me-1" style="color: white;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
