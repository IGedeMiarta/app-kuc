@extends('layouts.auth.temp')

@section('content')
    <body class="bg-register">
        <!-- wrapper -->
        <div class="wrapper">
            <div class="section-authentication-register d-flex align-items-center justify-content-center">
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto">
                        <div class="card radius-15">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5">
                                        <div class="text-center">
                                            <img src="{{ asset('images/logo.png') }}" width="80" alt="">
                                            <h3 class="mt-4 font-weight-bold">Create an Account</h3>
                                        </div>
                                        <form action="{{ url('/register') }}" method="post">
                                            @csrf
                                            <div class="form-group mt-4">
                                                <label>Username</label>
                                                <input type="text"
                                                    class="form-control @error('username')
                                                    is-invalid
                                                @enderror"
                                                    placeholder="username" name="username"
                                                    value="{{ old('username') }}" />
                                                @error('username')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group mt-4">
                                                <label>Fullname</label>
                                                <input type="text"
                                                    class="form-control @error('fullname')
                                                    is-invalid
                                                @enderror"
                                                    placeholder="Fullname" name="fullname"
                                                    value="{{ old('fullname') }}" />
                                                @error('fullname')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group mt-4">
                                                <label>Email</label>
                                                <input type="email"
                                                    class="form-control @error('email')
                                                    is-invalid
                                                @enderror"
                                                    placeholder="Alamat Email" name="email" value="{{ old('email') }}" />
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>

                                                <div class="input-group" id="show_hide_password">
                                                    <input
                                                        class="form-control  @error('password')
                                                       
                                                        is-invalid
                                                    @enderror"
                                                        type="password" placeholder="Password" name="password">
                                                    @error('password')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                    <div
                                                        class="input-group-append @error('password')
                                                         d-none
                                                    @enderror">
                                                        <a href="javascript:;"
                                                            class="input-group-text bg-transparent border-left-0 "><i
                                                                class='bx bx-hide '></i></a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="btn-group mt-3 w-100">
                                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="lni lni-arrow-right"></i>
                                                </button>
                                            </div>
                                        </form>
                                        <hr />
                                        <div class="text-center mt-4">
                                            <p class="mb-0">Already have an account? <a
                                                    href="{{ url('login') }}">Login</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img src="{{ asset('images/login-images/register-frent-img.jpg') }}"
                                        class="card-img login-img h-100" alt="...">
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
@endsection
