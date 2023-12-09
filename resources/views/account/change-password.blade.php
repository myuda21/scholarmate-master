<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Settings</title>
    @include('includes.bootstrap')
    @include('includes.icons')
</head>
<body class="min-vh-100 d-flex flex-column position-relative">
    @include('layout.navbar')
    <hr>
    <div class="container d-flex justify-content-center shadow mb-5 border rounded mt-5" style="height: 600px">
        <div class="h-100 w-25 d-flex flex-column justify-content-between align-items-center rounded-2">
            <div class="list-group p-2 w-100">
                <a href="{{ route('account-settings') }}" class="list-group-item">Update Profile</a>
                <a href="{{ route('change-password') }}" class="list-group-item bg-warning">Change Password</a>
            </div>
            @include('layout.logout-button')
        </div>
        <div class="w-75 p-3 rounded-2">
            <h2>Change Password</h2>
            <form action="{{ route('update-password') }}" method="POST" class="d-flex flex-column">
                @csrf
                <div class="form-group d-flex align-items-center p-2 w-100 justify-content-between">
                    <label for="old_password" class="form-label text-dark me-3 w-50">Old Password</label>
                    <input type="password" class="form-control w-75 me-2 @error('old_password') is-invalid @enderror @error('no_match') is-invalid @enderror" id="old_password" name='old_password'>
                    <div class="w-100 text-danger"> @error('old_password') {{ $message }} @enderror </div>
                </div>
                <div class="form-group d-flex align-items-center p-2 w-100 justify-content-between">
                    <label for="new_password" class="form-label text-dark me-3 w-50">New Password</label>
                    <input type="password" class="form-control w-75 me-2 @error('new_password') is-invalid @enderror" id="new_password" name='new_password'>
                    <div class="w-100 text-danger"> @error('new_password') {{ $message }} @enderror </div>
                </div>
                <div class="form-group d-flex align-items-center p-2 w-100 justify-content-between">
                    <label for="new_password_confirmation" class="form-label text-dark me-3 w-50">Confirm New Password</label>
                    <input type="password" class="form-control w-75 me-2 @error('new_password-confirmation') is-invalid @enderror @error('new_password') is-invalid @enderror" id="new_password_confirmation" name='new_password_confirmation'>
                    <div class="w-100 text-danger"> @error('new_password_confirmation') {{ $message }} @enderror  @error('new_password') {{ $message }} @enderror</div>
                </div>
                <div class="text-danger"> @error('no_match') {{ $message }} @enderror </div>
                <button type="submit" class="btn btn-warning mt-3 w-25">Change Password</button>
            </form>
        </div>
    </div>

    @include('layout.footer')
</body>
</html>