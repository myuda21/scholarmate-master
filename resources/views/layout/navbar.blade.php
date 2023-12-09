<nav class="d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center justify-content-center">
        <img src="{{ asset('assets/scholarmate.png') }}" width="100px" alt="">
        <ul class="d-flex mt-3" style="list-style: none;">
            <li class="mx-1"><a href="{{ route('home') }}" class="navbar-link text-decoration-none">Home</a></li>
            {{-- <li class="mx-1"><a href="{{ route('beasiswa-sd') }}" class="navbar-link text-decoration-none">Beasiswa SD</a></li>
            <li class="mx-1"><a href="{{ route('beasiswa-smp') }}" class="navbar-link text-decoration-none">Beasiswa SMP</a></li>
            <li class="mx-1"><a href="{{ route('beasiswa-sma') }}" class="navbar-link text-decoration-none">Beasiswa SMA</a></li>
            <li class="mx-1"><a href="{{ route('beasiswa-kuliah') }}" class="navbar-link text-decoration-none">Beasiswa Kuliah</a></li> --}}
            <li class="mx-1 dropdown">
                <a href="" class="dropdown-toggle text-decoration-none navbar-link d-flex align-items-center" role="button" data-bs-toggle="dropdown">Scholarships</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('beasiswa-sd') }}" class="dropdown-item">SD</a></li>
                    <li><a href="{{ route('beasiswa-smp') }}" class="dropdown-item">SMP</a></li>
                    <li><a href="{{ route('beasiswa-sma') }}" class="dropdown-item">SMA</a></li>
                    <li><a href="{{ route('beasiswa-kuliah') }}" class="dropdown-item">College</a></li>
                </ul>
            </li>
            <li class="mx-2"><a href="{{ route('about') }}" class="navbar-link text-decoration-none">About Us</a></li>
        </ul>
    </div>
    <div class="d-flex align-items-center">
        <div class="me-3">
            <form class="d-flex" role="search" method="GET" action="{{ route('search') }}">
                <input class="form-control me-2" name="search" id="search" type="search" placeholder="ex. Adaline Univeristy" aria-label="Search" width="800px">
                <button class="btn btn-warning" type="submit">Search</button>
            </form>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-warning dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                <ion-icon name="person-circle-outline" size='large'></ion-icon>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li class="dropdown-item"><a class="text-decoration-none text-dark d-flex align-items-center" href="{{ route('account-settings') }}"><ion-icon name="settings-outline" class="me-2"></ion-icon> Account Settings</a></li>
                <li class="dropdown-item"><a class="text-decoration-none text-dark d-flex align-items-center" href=""><ion-icon name="language-outline" class="me-2"></ion-icon> Language</a></li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar-link:hover{
        color:rgb(255, 174, 0);
        transition: 0.3s;
    }

    .navbar-link{
        color: black;
        transition: 0.2s;
    }
</style>