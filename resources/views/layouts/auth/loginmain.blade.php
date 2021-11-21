@extends('layouts.auth.temp')
@section('content')

    <body class="bg-login">
        <!-- wrapper -->

        <div class="wrapper">
            <div class="section-authentication-login d-flex align-items-center justify-content-center">
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto">
                        <div class="card radius-15">

                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    {{-- @if (session()->has('loginError'))
                                        <div class="alert alert-warning alert-dismissible fade show mb-n3" role="alert">
                                            {{ session('loginError') }}
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close"> <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                    @if (session()->has('success'))
                                        <div class="alert alert-success alert-dismissible fade show mb-n3" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close"> <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif --}}
                                    <form action="{{ route('auth.login') }}" method="post">
                                        <div class="card-body p-md-5">
                                            @csrf
                                            <div class="text-center">
                                                <img src="{{ asset('/images/logo.png') }}" width="80" alt="">
                                                <h3 class="mt-4 font-weight-bold">Karya Utama</h3>
                                            </div>
                                            <div class="form-group mt-4">
                                                <label>Username</label>
                                                <input type="text"
                                                    class="form-control @error('username')
                                                is-invalid
                                            @enderror"
                                                    name="username" id="username" placeholder="Enter your username"
                                                    value="{{ old('username') }}" />
                                                @error('username')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password"
                                                    class="form-control @error('password')
                                                is-invalid
                                            @enderror"
                                                    name="password" id="password" placeholder="Enter your password" />
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="btn-group mt-3 w-100">
                                                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                                                <button type="button" class="btn btn-primary"><i
                                                        class="lni lni-arrow-right"></i>
                                                </button>
                                            </div>
                                            <hr>
                                            <div class="text-center mt-4">
                                                <p class="mb-0">Don't have an account? <a
                                                        href="{{ url('register') }}">Register</a>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <img src="{{ asset('/images/login-images/login-frent-img.jpg') }}"
                                        class="card-img login-img h-100" alt="...">
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end wrapper -->
    </body>
@endsection
