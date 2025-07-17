@extends('layout.frontend')
@section('title','Register')
@section('content')
    <section id="register-page-section">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center vh-100 bg-sm-rgba mx-auto ">
                <div class="col-md-5" id="register-page-div">
                    <a class="d-flex align-items-center main_header_logo justify-content-center" href="{{ url('/') }}">
                        <img src="{{ asset('assets/frontend/user/blank-user.jpg') }}" alt="logo">
                    </a>
                    <form action="{{ route('register.store') }}" method="POST">
                        @csrf

                        <!-- Name input -->
                        <div class="mb-2">
                            <label class="form-label required" for="name">Name</label>
                            <input type="text" id="name" class="form-control" name="name"
                                value="{{ old('name') }}" placeholder="Enter your name" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email input -->
                        <div class="mb-2">
                            <label class="form-label required" for="email">Email address</label>
                            <input type="email" id="email" class="form-control" name="email"
                                value="{{ old('email') }}" placeholder="Enter your email" />
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

                        <!-- Confirm Password input -->
                        <div class="mb-3">
                            <label class="form-label required" for="password_confirmation">Confirm Password</label>
                            <input type="password" id="password_confirmation" class="form-control" name="password_confirmation"
                                placeholder="Confirm your password" />
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-4 login-buttton text-center">
                            <button type="submit" class="btn btn-primary btn-sm fs-6 px-3">Register</button>
                        </div>

                        <div class="mt-4 login-buttton text-center">
                            <p>Already have an account?</p>
                            <a href="{{ route('login') }}">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
