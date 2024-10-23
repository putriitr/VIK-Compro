@extends('layouts.Member.master2')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo-vik.png') }}">
    <title>LOGIN PAGE</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('assets/Admin/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/Admin/css/nucleo-svg.css') }}" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link id="pagestyle" href="{{ asset('assets/Admin/css/soft-ui-dashboard.css') }}?v=1.0.3" rel="stylesheet" />
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3" href="../pages/dashboard.html">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/logo-vik.png') }}" alt="Logo" class="me-3" style="width: 100px; height: auto;">
                                <h4 class="display-12 text-secondary m-0">Virtual Inter Komunika</h4>
                            </div>
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav ms-auto d-lg-block d-none">
                                <li class="nav-item">
                                    <a href="" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-dark">-- Company Quotes --</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <main class="main-content mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                <div class="card-body">
                                    <form role="form">
                                        <label>Email</label>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                        </div>
                                        <label>Password</label>
                                        <div class="mb-3">
                                            <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                        <div class="text-center">
                                            <a href="{{ route('login-admin')}}" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Forgot Password ?
                                        <a href="javascript:;" class="text-info text-gradient font-weight-bold">Click Here</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                     style="background-image:url('{{ asset('assets/img/bg-login.jpg') }}'); background-size: cover; background-position: center; min-height: 100vh;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="{{ asset('assets/Admin/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/Admin/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ asset('assets/Admin/js/soft-ui-dashboard.min.js') }}?v=1.0.3"></script>
</body>

</html>
@endsection
