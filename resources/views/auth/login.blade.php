<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @include('includes.bootstrap')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body class="min-vh-100 d-flex flex-column justify-content-center align-items-center">
    <div class="w-75 rounded d-flex" style="box-shadow : 0px 0px 0px 5px rgba(0, 0, 0, 0.1)">
        <div class="w-50 d-flex flex-column justify-content-center align-items-center px-5 py-5 bg-light rounded">
            <h3>Login</h3>
            <form action="{{ route('auth.validate') }}" class="w-100" method="POST">
                @csrf
                
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control mb-2 @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control mb-2 @error('password') is-invalid @enderror" name="password" id="password">
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <p>Don't have an account? Register <a href="{{ route('auth.register') }}">here</a>.</p>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        <div class="w-50 login-image rounded-end"></div>
    </div>
</body>
</html>