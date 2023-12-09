<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ScholarMate</title>
    @include('includes.bootstrap')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="icon" href="{{ asset('assets/scholarmateLogo.png') }}">
    @include('includes.icons')
</head>
<body class="min-vh-100">
    <div class="position-fixed w-100 z-3 d-flex justify-content-between px-5 py-3 align-items-center navbar" id='navbar'>
        <img src="assets/scholarmate.png" alt="" width="100px">
        <div class="d-flex">
            <a href="{{ route('auth.register') }}" class="btn btn-outline-warning mx-3">Register</a>
            <a href="{{ route('auth.login') }}" class="btn btn-warning">Login</a>
        </div>
    </div>
    
    <div class="min-vh-100 position-relative hero">
        <div class="position-absolute top-50 translate-middle start-50 d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-light mb-3" style="text-shadow: 2px 2px 4px black">Paving Paths to Scholarships for You</h1>
            <button class="btn btn-warning">Start Now</button>
        </div>
    </div>

    <section class="min-vh-100 container d-flex flex-column justify-content-center align-items-center position-relative my-5 ">
        
        <div class="d-flex mb-5 align-items-center">
            <img src="{{ asset('assets/landingImage1.jpg') }}" width="500px" alt="" class="me-5 rounded">
            <div class="">
                <h2>What is ScholarMate?</h2>
                <p class="">
                    Welcome to ScholarMate, your comprehensive platform dedicated to bridging the gap between aspiring students and a world of educational possibilities in Indonesia. Whether you're a student in primary school (SD), junior high (SMP), high school (SMA), or pursuing higher education at university, ScholarMate is your go-to resource for discovering a myriad of scholarship opportunities tailored to your educational journey.
                </p>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <div class="me-3 d-flex flex-column justify-content-end">
                <h2>Why use ScholarMate?</h2>
                <p class="text-justify">
                    ScholarMate offers an invaluable gateway to a world of educational opportunities through its comprehensive scholarship database. By utilizing ScholarMate, individuals gain access to a rich repository of scholarship information, simplifying the pursuit of financial aid for academic endeavors. Whether you're a student aiming to explore diverse scholarship options or an educational institution seeking funding avenues, ScholarMate serves as a beacon of support and guidance. With its user-friendly interface and up-to-date resources, ScholarMate empowers users to navigate the complex landscape of scholarships effortlessly, ensuring that every aspiring learner can uncover the funding they need to pursue their educational dreams.                </p>
            </div>
            <img src="{{ asset('assets/landingImage2.jpg') }}" width="500px" alt="" class="me-5 rounded">
        </div>
    </section>

    @include('layout.footer')

    <script src="{{ asset('js/landing.js') }}"></script>
</body>
</html>