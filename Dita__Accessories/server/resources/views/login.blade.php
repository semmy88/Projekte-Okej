@extends('layout')
@section('content')
    <div class="login-main mt-5 mb-5 container d-flex">
        <div class="login-left pt-5">
            <div class="login-title">Welcome back!</div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3 text-start">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required autofocus placeholder="Enter your email address">
                </div>
                <div class="mb-3 text-start">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required placeholder="Enter your password">
                </div>
                <div class="mb-3 remember-me d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <a href="#" class="forgot-link">Forgot your password?</a>
                </div>
                <button type="submit" class="btn btn-login">Login</button>
                <div class="divider w-100 text-center">or</div>
                <div class="social-btns">
                    <button type="button" class="social-btn"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/facebook/facebook-original.svg" alt="Facebook" style="width:20px;"> Facebook</button>
                    <button type="button" class="social-btn"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" alt="Google" style="width:20px;"> Google</button>
                </div>
                <div class="create-account">Don't have an account?</div>
                <button type="button" class="btn btn-create" onclick="window.location.href='{{ route('signin') }}'">Create account</button>
            </form>
        </div>
        <div class="login-right" >

                <img src="{{ asset('images/login.png') }}" alt="Luxury Accessories" class="login-image">

            <div class="image-overlay">
                <div class="overlay-title">Luxury Accessories</div>
                <div class="overlay-subtitle">Elevate your style with Dita Accessories</div>
            </div>
        </div>
    </div>
@endsection