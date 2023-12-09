<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ScholarMate</title>
    
    @include('includes.bootstrap')
    @include('includes.icons')
</head>
<style>
    .carousel{
        max-width: 600px;
        max-height: 400px;
    }
</style>
<body class="min-vh-100 d-flex flex-column">
    @include('layout.navbar')
    <hr>

    <div class="container position-relative">
        <h2 class="mb-4">Welcome, {{ Auth::user()->name }}</h2>
        
        <div class="w-100 d-flex justify-content-center">
            <div id="carouselExampleCaptions" class="carousel slide mb-5">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/carousel1.jpg') }}" class="d-block w-100 rounded" alt="...">
                        <div class="carousel-caption d-none d-md-block shadow-sm">
                            <h5>Create Wonderful Memories</h5>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/carousel2.jpg') }}" class="d-block w-100 rounded" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Graduate from Your Dream University</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/carousel3.jpg') }}" class="d-block w-100 rounded" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Get Unlimited Resource of Knowledge</h5>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        
        <div class="d-flex flex-column mb-5 mx-4">
            <h4 class>Here are scholarships based on your interest : </h4>
            <div class="d-flex align-items-center flex-direction-row flex-wrap justify-content-around">
                @foreach ($beasiswas as $beasiswa)
                    <div class="card p-2 mx-3 mt-2 shadow-lg" style="width: 250px">
                        <img class="card-img-top mb-2" src="{{ $beasiswa->image }}" alt="" width="120px" height="120px">
                        <div class="card-top">
                            <h5 class="card-title">{{ $beasiswa->name }}</h5>
                        </div>
                        <p class="card-text">{{ $beasiswa->category }}</p>
                        <div class="card-text d-flex align-items-center mb-3">
                            <ion-icon name="pin-outline" class="me-1"></ion-icon> 
                            <div class="">{{ $beasiswa->city }}</div>
                        </div>
                        <div class="card-text d-flex align-items-center mb-3">
                            <div class="card-text d-flex align-items-center mb-3">
                                <ion-icon name="people-circle-outline" class="me-1"></ion-icon>
                                <div class="">{{ $beasiswa->type }}</div>
                            </div>
                        </div>
                        <a href="{{ route('beasiswa-details', ['id'=> $beasiswa->id]) }}" class="btn btn-warning">Details</a>
                    </div>
                @endforeach
                <div class="d-flex flex-column align-items-center p-3 rounded-circle btn btn-warning ms-4 shadow-lg text-dark mt-3">
                    <ion-icon name="arrow-forward-circle-outline" size="large"></ion-icon>
                    <h5>See All </h5>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column mb-5 mx-4">
            <h4>Scholarships for Primary School : </h4>
            <div class="d-flex align-items-center flex-direction-row flex-wrap justify-content-around">
                @foreach ($beasiswaSD as $beasiswa)
                    <div class="card p-2 mx-3 mt-2 shadow-lg" style="width: 250px">
                        <img class="card-img-top mb-2" src="{{ $beasiswa->image }}" alt="" width="120px" height="120px">
                        <div class="card-top">
                            <h5 class="card-title">{{ $beasiswa->name }}</h5>
                        </div>
                        <p class="card-text">{{ $beasiswa->category }}</p>
                        <div class="card-text d-flex align-items-center mb-3">
                            <ion-icon name="pin-outline" class="me-1"></ion-icon> 
                            <div class="">{{ $beasiswa->city }}</div>
                        </div>
                        <div class="card-text d-flex align-items-center mb-3">
                            <div class="card-text d-flex align-items-center mb-3">
                                <ion-icon name="people-circle-outline" class="me-1"></ion-icon>
                                <div class="">{{ $beasiswa->type }}</div>
                            </div>
                        </div>
                        <a href="{{ route('beasiswa-details', ['id'=> $beasiswa->id]) }}" class="btn btn-warning">Details</a>
                    </div>
                @endforeach
                <a href="{{ route('beasiswa-sd') }}" class="d-flex flex-column align-items-center p-3 rounded-circle btn btn-warning ms-4 shadow-lg text-dark mt-3">
                    <ion-icon name="arrow-forward-circle-outline" size="large"></ion-icon>
                    <h5>See All</h5>
                </a>
            </div>
        </div>

        <div class="d-flex flex-column mb-5 mx-4">
            <h4>Scholarships for Junior High School :</h4>
            <div class="d-flex align-items-center flex-direction-row flex-wrap justify-content-around">
                @foreach ($beasiswaSMP as $beasiswa)
                    <div class="card p-2 mx-3 mt-2 shadow-lg" style="width: 250px">
                        <img class="card-img-top mb-2" src="{{ $beasiswa->image }}" alt="" width="120px" height="120px">
                        <div class="card-top">
                            <h5 class="card-title">{{ $beasiswa->name }}</h5>
                        </div>
                        <p class="card-text">{{ $beasiswa->category }}</p>
                        <div class="card-text d-flex align-items-center mb-3">
                            <ion-icon name="pin-outline" class="me-1"></ion-icon> 
                            <div class="">{{ $beasiswa->city }}</div>
                        </div>
                        <div class="card-text d-flex align-items-center mb-3">
                            <div class="card-text d-flex align-items-center mb-3">
                                <ion-icon name="people-circle-outline" class="me-1"></ion-icon>
                                <div class="">{{ $beasiswa->type }}</div>
                            </div>
                        </div>
                        <a href="{{ route('beasiswa-details', ['id'=> $beasiswa->id]) }}" class="btn btn-warning">Details</a>
                    </div>
                @endforeach
                <a href="{{ route('beasiswa-smp') }}" class="d-flex flex-column align-items-center p-3 rounded-circle btn btn-warning ms-4 shadow-lg text-dark mt-3">
                    <ion-icon name="arrow-forward-circle-outline" size="large"></ion-icon>
                    <h5>See All</h5>
                </a>
            </div>
        </div>

        <div class="d-flex flex-column mb-5 mx-4">
            <h4>Scholarships for Senior High School :</h4>
            <div class="d-flex align-items-center flex-direction-row flex-wrap justify-content-around">
                @foreach ($beasiswaSMA as $beasiswa)
                    <div class="card p-2 mx-3 mt-2 shadow-lg" style="width: 250px">
                        <img class="card-img-top mb-2" src="{{ $beasiswa->image }}" alt="" width="120px" height="120px">
                        <div class="card-top">
                            <h5 class="card-title">{{ $beasiswa->name }}</h5>
                        </div>
                        <p class="card-text">{{ $beasiswa->category }}</p>
                        <div class="card-text d-flex align-items-center mb-3">
                            <ion-icon name="pin-outline" class="me-1"></ion-icon> 
                            <div class="">{{ $beasiswa->city }}</div>
                        </div>
                        <div class="card-text d-flex align-items-center mb-3">
                            <div class="card-text d-flex align-items-center mb-3">
                                <ion-icon name="people-circle-outline" class="me-1"></ion-icon>
                                <div class="">{{ $beasiswa->type }}</div>
                            </div>
                        </div>
                        <a href="{{ route('beasiswa-details', ['id'=> $beasiswa->id]) }}" class="btn btn-warning">Details</a>
                    </div>
                @endforeach
                <a href="{{ route('beasiswa-sma') }}" class="d-flex flex-column align-items-center p-3 rounded-circle btn btn-warning ms-4 shadow-lg text-dark mt-3">
                    <ion-icon name="arrow-forward-circle-outline" size="large"></ion-icon>
                    <h5>See All</h5>
                </a>
            </div>
        </div>

        <div class="d-flex flex-column mb-5 mx-4">
            <h4>Scholarships for College Students :</h4>
            <div class="d-flex align-items-center flex-direction-row flex-wrap justify-content-around">
                @foreach ($beasiswaKuliah as $beasiswa)
                    <div class="card p-2 mx-3 mt-2 shadow-lg" style="width: 250px">
                        <img class="card-img-top mb-2" src="{{ $beasiswa->image }}" alt="" width="120px" height="120px">
                        <div class="card-top">
                            <h5 class="card-title">{{ $beasiswa->name }}</h5>
                        </div>
                        <p class="card-text">{{ $beasiswa->category }}</p>
                        <div class="card-text d-flex align-items-center mb-3">
                            <ion-icon name="pin-outline" class="me-1"></ion-icon> 
                            <div class="">{{ $beasiswa->city }}</div>
                        </div>
                        <div class="card-text d-flex align-items-center mb-3">
                            <div class="card-text d-flex align-items-center mb-3">
                                <ion-icon name="people-circle-outline" class="me-1"></ion-icon>
                                <div class="">{{ $beasiswa->type }}</div>
                            </div>
                        </div>
                        <a href="{{ route('beasiswa-details', ['id'=> $beasiswa->id]) }}" class="btn btn-warning">Details</a>
                    </div>
                @endforeach
                <a href="{{ route('beasiswa-kuliah') }}" class="d-flex flex-column align-items-center p-3 rounded-circle btn btn-warning ms-4 shadow-lg text-dark mt-3">
                    <ion-icon name="arrow-forward-circle-outline" size="large"></ion-icon>
                    <h5>See All</h5>
                </a>
            </div>
        </div>
    </div>

    @include('layout.footer')
</body>
</html>