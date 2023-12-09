<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    @include('../includes/bootstrap')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body class="min-vh-100 d-flex flex-column justify-content-center align-items-center">
    <div class="h-200 w-75 rounded d-flex" style="box-shadow : 0px 0px 0px 5px rgba(0, 0, 0, 0.1)">
        <div class="w-50 d-flex flex-column justify-content-center align-items-center px-5 py-3 bg-light rounded">
            <h3>Register</h3>
            <form action="{{ route('auth.saveRegister') }}" class="w-100" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">   
                    <label for="beasiswa" class="form-label">Beasiswa yang dicari : </label>
                    <select name="beasiswa" id="beasiswa" class="form-control">
                        <option value="Kuliah" {{ old('beasiswa') == 'Kuliah' ? 'selected' : '' }}>Kuliah</option>
                        <option value="SMA" {{ old('beasiswa') == 'SMA' ? 'selected' : '' }}>SMA</option>
                        <option value="SMP" {{ old('beasiswa') == 'SMP' ? 'selected' : '' }}>SMP</option>
                        <option value="SD" {{ old('beasiswa') == 'SD' ? 'selected' : '' }}>SD</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">
                    @error('password_confirmation')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <p>Already have an account? Login <a href="{{ route('auth.login') }}">here</a>.</p>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="w-50 register-image rounded-end"></div>
    </div>
</body>
</html>