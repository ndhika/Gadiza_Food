<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .nav-link.active {
        border-bottom: 3px solid black;
        margin-bottom: 0; 
        }
        .daftarnav{
            background-color: #B8ADA1;
        }
        .daftarnav:hover{
            background-color: #FF4428;
            color: whitesmoke;
        }
    </style>
    <!-- icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary-opacity-75 mt-4 z-1">
    <div class="container-fluid">
        <a class="navbar-brand p-1" style="font-family: Lobster;" href="/">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="45" height="45" class="d-inline-block align-text-mid">
            Gadiza Food
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse fw-semibold font-family: Rubik;" id="navbarNav">
                    <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item">
                    <a class="nav-link {{ (isset($title) && $title === "Beranda") ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (isset($title) && $title === "Menu") ? 'active' : '' }}" href="/menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (isset($title) && $title === "Tentang") ? 'active' : '' }}" href="/about">Tentang</a>
                </li>
            </ul>
            <ul class="navbar-nav">
            @auth
                <li class="nav-item">
                    <a class="nav-link fs-4" href="/keranjang"><i class="bi bi-cart3"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4" href="/about"><i class="bi bi-person-circle"> {{ auth()->user()->nama }}</i></a>
                </li>
            @endauth
            @guest
                <li class="nav-item">
                    <a class="nav-link " href="/login"><i class="bi bi-box-arrow-in-right"> </i>Log in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link daftarnav px-4 rounded-pill" href="/register"></i>Daftar</a>
                </li>
            @endguest
            </ul>
        </div>
    </div>
</nav>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>

</html>