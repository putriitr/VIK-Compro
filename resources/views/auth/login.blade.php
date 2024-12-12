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
        <title>Login</title>
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
                width: 60%;
                background: white;
                display: flex;
                border-radius: 15px;
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            }

            .login-left {
                width: 60%;
                padding: 40px;
                background-color: #42b0a0;
                border-top-left-radius: 15px;
                border-bottom-left-radius: 15px;
                color: white;
            }

            .login-right {
                width: 40%;
                padding: 40px;
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

            .login-right .btn-submit {
                background-color: #42b0a0;
                color: white;
                font-weight: 600;
                width: 100%;
                padding: 12px;
                border-radius: 10px;
                transition: 0.3s;
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
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <div class="login-wrapper">
            <!-- Left Section (Login Form) -->
            <div class="login-left">
                <h3 class="form-title text-center">{{ __('messages.login_desc') }}</h3>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                            required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                            required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn-submit">{{ __('messages.masuk') }}</button>
                </form><br>
                <div class="form-prompt-wrapper d-flex justify-content-between mb-4 mt-3">
                    <div class="custom-control custom-checkbox login-card-check-box">
                        <input type="checkbox" class="custom-control-input" id="customCheck1"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="customCheck1">{{ __('messages.remember') }}</label>
                    </div>
                    <div class="forgot">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-reset">{{ __('messages.forgot') }}</a>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Right Section -->
            <div class="login-right">
                <h3 class="form-title">{{ __('messages.regis') }}</h3>
                <p>{{ __('messages.regis_desc') }}</p>
                <form action="{{ route('distributors.register') }}" method="GET">
                    <button type="submit" class="btn-submit">{{ __('messages.daftar') }}</button>
                </form>

                <br><br>
                <a href="{{ route('home') }}" class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-chevron-left me-1" style="color: #6196FF;"></i> <i class="fas fa-home me-1"
                        style="color: #ff5733;"></i> {{ __('messages.home') }}
                </a>
            </div>
        </div>
    </body>
    </html>
@endsection
