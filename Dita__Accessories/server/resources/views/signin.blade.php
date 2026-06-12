@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Dita Accessories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            background: #f8f8f8;
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
        }
        .signin-main {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .signin-left {
            background: #fff;
            width: 380px;
            min-width: 280px;
            max-width: 400px;
            padding: 60px 36px 48px 36px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-shadow: 0 8px 32px rgba(34,43,58,0.10);
            min-height: 800px;
        }
        .signin-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 700;
            color: #222b3a;
            margin-bottom: 32px;
            letter-spacing: 1px;
        }
        .form-label {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            color: #222b3a;
        }
        .form-control {
            border-radius: 8px;
            border: 1.5px solid #e0e0e0;
            padding: 12px 16px;
            font-size: 1rem;
            background: #f8f8f8;
            transition: border-color 0.2s;
        }
        .form-control:focus {
            border-color: #c9a96e;
            box-shadow: 0 0 0 2px rgba(201,169,110,0.08);
        }
        .btn-signup {
            background: #222b3a;
            color: #fff;
            font-family: 'Playfair Display', serif;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 8px;
            padding: 12px 0;
            margin-top: 18px;
            width: 100%;
            border: none;
            letter-spacing: 1px;
            transition: background 0.2s;
        }
        .btn-signup:hover {
            background: #c9a96e;
            color: #222b3a;
        }
        .divider {
            text-align: center;
            margin: 24px 0 18px 0;
            color: #aaa;
            position: relative;
        }
        .divider:before, .divider:after {
            content: '';
            display: inline-block;
            width: 40%;
            height: 1px;
            background: #eee;
            vertical-align: middle;
            margin: 0 8px;
        }
        .social-btns {
            display: flex;
            gap: 12px;
            margin-bottom: 18px;
        }
        .social-btn {
            flex: 1 1 0;
            border: 1.5px solid #e0e0e0;
            border-radius: 8px;
            background: #fff;
            color: #222b3a;
            font-weight: 500;
            padding: 10px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 1rem;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        .social-btn:hover {
            border-color: #c9a96e;
            box-shadow: 0 2px 8px rgba(201,169,110,0.08);
        }
        .already-account {
            margin-top: 18px;
            font-size: 0.97rem;
            color: #222b3a;
            text-align: center;
        }
        .btn-login-link {
            background: #f8f8f8;
            color: #222b3a;
            border: 1.5px solid #e0e0e0;
            border-radius: 8px;
            width: 100%;
            padding: 10px 0;
            font-family: 'Playfair Display', serif;
            font-size: 1rem;
            margin-top: 8px;
            transition: background 0.2s, border-color 0.2s;
        }
        .btn-login-link:hover {
            background: #c9a96e;
            color: #fff;
            border-color: #c9a96e;
        }
        .signin-right {
            width: 700px;
            min-width: 400px;
            max-width: 900px;
            height: 800px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #222b3a;
            position: relative;
            overflow: hidden;
            border-radius: 0 18px 18px 0;
        }
        .signin-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.85);
            border-radius: 0 18px 18px 0;
        }
        .image-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 36px 32px;
            background: linear-gradient(0deg, rgba(34,43,58,0.7) 60%, rgba(34,43,58,0.0) 100%);
        }
        .overlay-title {
            color: #fff;
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0;
        }
        .overlay-subtitle {
            color: #fff;
            font-family: 'Poppins', sans-serif;
            font-size: 1.1rem;
            margin-top: 8px;
        }
        @media (max-width: 900px) {
            .signin-main { flex-direction: column; }
            .signin-right { width: 100vw; height: 220px; min-width: unset; max-width: unset; border-radius: 0 0 18px 18px; }
            .signin-left { max-width: 100vw; padding: 36px 16px; min-height: unset; border-radius: 18px 18px 0 0; }
            .image-overlay { padding: 18px 12px; }
        }
    </style>
</head>
<body>
    <div class="signin-main">
        <div class="signin-left">
            <div class="signin-title">Create your account!</div>
            <form method="POST" action="#">
                @csrf
                <div class="mb-3 text-start">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required placeholder="Enter your name">
                </div>
                <div class="mb-3 text-start">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required placeholder="Enter your email address">
                </div>
                <div class="mb-3 text-start">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required placeholder="Create a password">
                </div>
                <div class="mb-3 text-start">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Confirm your password">
                </div>
                <button type="submit" class="btn btn-signup">Sign Up</button>
                <div class="divider">or</div>
                <div class="social-btns">
                    <button type="button" class="social-btn"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/facebook/facebook-original.svg" alt="Facebook" style="width:20px;"> Facebook</button>
                    <button type="button" class="social-btn"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" alt="Google" style="width:20px;"> Google</button>
                </div>
                <div class="already-account">Already have an account?</div>
                <a href="{{ route('login') }}" class="btn btn-login-link">Login</a>
            </form>
        </div>
        <div class="signin-right">
            <img src="{{ asset('images/login.png') }}" alt="Luxury Accessories" class="signin-image">
            <div class="image-overlay">
                <div class="overlay-title">Luxury Accessories</div>
                <div class="overlay-subtitle">Join Dita Accessories and elevate your style</div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
