<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scholarmate</title>
    @include('includes.bootstrap')
    @include('includes.icons')
</head>
<body class="min-vh-100 d-flex flex-column position-relative">
    @include('layout.navbar')
    <hr>

    <div class="container d-flex justify-content-start">
        <div class="me-5">
            <img src="{{ asset('assets/school2.jpg') }}" alt="School Image" width="500 px">    
        </div>
        <div class="d-flex flex-column">
            <h2>{{ $beasiswa->name }}</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tenetur, repellendus perferendis voluptate consequuntur minima quis commodi voluptas explicabo illum? Sunt maiores ea aut incidunt fugiat ab quibusdam repellat aliquid, earum quia cupiditate. Temporibus, atque? Voluptatibus voluptas expedita sapiente illum ipsum nobis eaque deleniti natus culpa perferendis quod, dolorum eligendi consequuntur neque nemo voluptatem sit ea pariatur officia in eos quaerat. Magnam quasi adipisci sunt atque! Vitae tenetur incidunt, reprehenderit sed voluptatem totam repellendus assumenda dolorum? Quia earum, sequi nesciunt ab sapiente veritatis, modi illo iure cumque exercitationem laborum perferendis eaque quas numquam enim pariatur reprehenderit saepe? Eaque, illo ullam?</p>
            <div class="d-flex">
                <div class="me-5">
                    <div class="d-flex align-items-center mb-3">
                        <ion-icon name="people-circle-outline" size='large' class="me-2"></ion-icon>
                        <div>{{ $beasiswa->type }}</div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <ion-icon name="navigate-circle-outline" size='large' class="me-2"></ion-icon>
                        <div>{{ $beasiswa->city }}</div>
                    </div>
                    <div class="d-flex align-items-center mb-3"> 
                        <ion-icon name="call-outline" size='large' class="me-2"></ion-icon>
                        <div>{{ $beasiswa->phone }}</div>
                    </div>
                </div>
                <div>
                    <div class="d-flex align-items-center mb-3">
                        <ion-icon name="location-outline" size='large' class="me-2"></ion-icon>
                        <div>{{ $beasiswa->address }}</div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <ion-icon name="mail-outline" size='large' class="me-2"></ion-icon>
                        <div>{{ $beasiswa->email }}</div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <ion-icon name="globe-outline" size='large' class="me-2"></ion-icon>
                        <a target='_blank' href="https://{{ $beasiswa->website }}">{{ $beasiswa->website }}</a>
                    </div>
                </div>
            </div>
            <p>For further information, please visit the official website <a target='_blank' href="{{ $beasiswa->website }}">here</a>.</p>
        </div>
    </div>


    @include('layout.footer')
</body>
</html>

{{-- <div class="container d-flex justify-content-start">
        <div class="me-5">
            <img src="{{ $beasiswa->image }}" alt="School Image" width="500 px">
        </div>
        <div class="d-flex flex-column">
            <h2>{{ $beasiswa->name }}</h2>
        </div>
    </div> --}}