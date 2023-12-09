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

    <div class="container d-flex flex-column">
        <h2 class="mb-4">Who Made ScholarMate?</h2>
        <div class="d-flex justify-content-center mb-3">
            <div class="card bg-warning me-5" style="width: 18rem;">
                <img src="{{ asset('assets/jojo.jpeg') }}" class="card-img-top p-3 rounded-circle" alt="...">
                <div class="card-body d-flex flex-column align-items-center">
                    <h5 class="card-title">Jonathan Gunawan</h5>
                    <h6 class="card-text">Project Manager</h6>
                    <div class="card-text">"balapan sini dek.."</div>
                </div>
            </div>
            <div class="card bg-warning me-5" style="width: 18rem;">
                <img src="{{ asset('assets/maxwell.jpg') }}" class="card-img-top p-3 rounded-circle" alt="...">
                <div class="card-body d-flex flex-column align-items-center">
                    <h5 class="card-title">Maxwell Yudanegara</h5>
                    <h6 class="card-text">Front-End Developer</h6>
                    <div class="card-text">"mahiru adalah waifuku..."</div>
                </div>
            </div>
            <div class="card bg-warning me-5" style="width: 18rem;">
                <img src="{{ asset('assets/kevin.jpg') }}" class="card-img-top p-3 rounded-circle" alt="...">
                <div class="card-body d-flex flex-column align-items-center">
                    <h5 class="card-title">Kevin Elbert Hartono</h5>
                    <h6 class="card-text">Front-End Developer</h6>
                    <div class="card-text">"u mau dibeli papi i?"</div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mb-5">
            <div class="card bg-warning me-5" style="width: 18rem;">
                <img src="{{ asset('assets/daniel.jpg') }}" class="card-img-top p-3 rounded-circle" alt="...">
                <div class="card-body d-flex flex-column align-items-center">
                    <h5 class="card-title">Daniel Haposan</h5>
                    <h6 class="card-text">Back-End Developer</h6>
                    <div class="card-text">"pasukan loli 1"</div>
                </div>
            </div>
            <div class="card bg-warning me-5" style="width: 18rem;">
                <img src="{{ asset('assets/farel.jpg') }}" class="card-img-top p-3 rounded-circle" alt="...">
                <div class="card-body d-flex flex-column align-items-center">
                    <h5 class="card-title">Farel Akbar</h5>
                    <h6 class="card-text">Back-End Developer</h6>
                    <div class="card-text">"pasukan loli 2"</div>
                </div>
            </div>
            <div class="card bg-warning me-5" style="width: 18rem;">
                <img src="{{ asset('assets/jakholius.jpg') }}" class="card-img-top p-3 rounded-circle" alt="...">
                <div class="card-body d-flex flex-column align-items-center">
                    <h5 class="card-title">Jakholius</h5>
                    <h6 class="card-text">Database Engineer</h6>
                    <div class="card-text">"pasukan loli 3"</div>
                </div>
            </div>
        </div>
    </div>

    @include('layout.footer')
</body>
</html>