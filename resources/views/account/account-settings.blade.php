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
    <div class="container d-flex justify-content-center shadow mb-5 mt-5" style="height: 600px">
        <div class="h-100 w-25 d-flex flex-column justify-content-between align-items-center rounded-2 ">
            <div class="list-group p-2 w-100">
                <a href="" class="list-group-item bg-warning">Update Profile</a>
                <a href="{{ route('change-password') }}" class="list-group-item">Change Password</a>
            </div>
            @include('layout.logout-button')
        </div>
        <div class="w-75 p-3 rounded-2">
            <h2>Update Profile</h2>
            <form action="" method="POST">
                @csrf
                <div class="form-group d-flex align-items-center p-2 w-50 justify-content-between">
                    <label for="name" class="form-label text-dark me-3">Full Name</label>
                    <input type="text" class="form-control w-75" id="name" name='name' value="{{ Auth::user()->name }}">
                </div>
                <div class="form-group d-flex align-items-center p-2 w-50 justify-content-between">
                    <label for="email" class="form-label text-dark me-3">Email</label>
                    <input type="text" class="form-control w-75" id="email" name='email' value="{{ Auth::user()->email }}">
                </div>
                <div class="form-group d-flex align-items-center p-2 w-50 justify-content-between">
                    <label for="beasiswa" class="form-label text-dark me-3">Beasiswa</label>
                    <select name="beasiswa" id="beasiswa" class="form-control w-75">
                        <option value="Kuliah" {{ Auth::user()->beasiswa == 'Kuliah' ? 'selected' : '' }}>Kuliah</option>
                        <option value="SMA" {{ Auth::user()->beasiswa == 'SMA' ? 'selected' : '' }}>SMA</option>
                        <option value="SMP" {{ Auth::user()->beasiswa == 'SMP' ? 'selected' : '' }}>SMP</option>
                        <option value="SD" {{ Auth::user()->beasiswa == 'SD' ? 'selected' : '' }}>SD</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-warning mt-3">Update</button>
            </form>
        </div>
    </div>

    @include('layout.footer')
</body>
</html>