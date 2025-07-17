
@extends('layout.frontend')
@section('title','Login')
@section('content')
    <section id="login-page-section">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center vh-100 bg-sm-rgba mx-auto ">
                <div class="col-md-5" id="login-page-div">
                    <a class="d-flex align-items-center main_header_logo justify-content-center" href="{{ url('/') }}">
                        <img src="{{ asset('assets/frontend/user/blank-user.jpg') }}" alt="logo">
                    </a>
                    <form action="{{ route('login.store') }}" method="POST">
                        @csrf
                        <!-- Email input -->
                        <div class="mb-2">
                            <label class="form-label required" for="email">Email address</label>
                            <input type="email" id="email" class="form-control" name="email"
                                value="{{ old('email') }}" placeholder="Enter your email" value="{{ old('email') }}" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="mb-3">
                            <label class="form-label required" for="password">Password</label>
                            <input type="password" id="password" class="form-control" name="password"
                                placeholder="Enter your password" />
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-4 login-buttton text-center">
                            <button type="submit" class="btn btn-primary btn-sm fs-6 px-3">Login</button>
                        </div>
                        <div class="mt-4 login-buttton text-center">
                            <p>Don't have an account ? </p> <a href="{{ route('register') }}">Create account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
