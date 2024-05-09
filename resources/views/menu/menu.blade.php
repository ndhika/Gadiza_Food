<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .rounded-column {
            border-radius: 50px; /* Smooth rounded corners */
            border: 1px solid #ddd; /* Light border for visualization */
        }
    </style>  
  </head>
  <body>
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
    <style>
        .nav-link.active {
            border-bottom: 3.5px solid black;
            margin-bottom: 0; 
        }
        .daftarnav {
            background-color: #B8ADA1;
        }
        .daftarnav:hover {
            background-color: #FF4428;
            color: white;
        }
        .daftarnav a:hover {
            color: white;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary-opacity-75 mt-4 z-1 py-2">
    <div class="container-fluid">
        <a class="navbar-brand fs-4 p-1" style="font-family: Lobster;" href="/">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="45" height="45" class="d-inline-block align-text-mid">
            Gadiza Food
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse fw-semibold font-family: Rubik;" id="navbarNav">
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item">
                    <a class="nav-link fs-5 {{ (isset($title) && $title === "Beranda") ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 {{ (isset($title) && $title === "Menu") ? 'active' : '' }}" href="/menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 {{ (isset($title) && $title === "Tentang") ? 'active' : '' }}" href="/about">Tentang</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item">
                        <a class="nav-link fs-4" href="/keranjang"><i class="bi bi-cart3"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fs-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i> {{ auth()->user()->nama }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item p-2" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item p-2"><i class="bi bi-box-arrow-in-left"></i> Log out</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
                @guest
                    <li class="nav-item fs-5">
                        <a class="nav-link"href="/login"><i class="bi bi-box-arrow-in-right"> </i>Log in</a>
                    </li>
                    <li class="nav-item daftar rounded-pill daftarnav px-3 ms-2 fs-5">
                        <a class="nav-link " href="/register"></i>Daftar</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>
</html>


  
<!-- Main container for layout -->
<div class="container mt-4">
    <!-- Bootstrap row for column layout -->
    <div class="row">
        <!-- First column with border radius -->
        <div class="col-md-4">
            <div class="p-3 bg-light rounded-column">
                <h3>Column 1</h3>
                <img src="https://via.placeholder.com/150" class="img-fluid rounded" alt="Placeholder Image">
                <!-- Placeholder image with fluid class for responsiveness and rounded corners -->
                <p>Some text below the image for description or other content.</p>
            </div>
        </div>

        <!-- Second column with border radius -->
        <div class="col-md-4">
            <div class="p-3 bg-light rounded-column">
                <h3>Column 2</h3>
                <img src="https://via.placeholder.com/150" class="img-fluid rounded" alt="Placeholder Image">
                <!-- Placeholder image with fluid class for responsiveness and rounded corners -->
                <p>Additional text for this column.</p>
            </div>
        </div>

        <!-- Third column with border radius -->
        <div class="col-md-4">
            <div class="p-3 bg-light rounded-column">
                <h3>Column 3</h3>
                <img src="https://via.placeholder.com/150" class="img-fluid rounded" alt="Placeholder Image">
                <!-- Placeholder image with fluid class for responsiveness and rounded corners -->
                <p>Additional text to accompany the image.</p>
            </div>
        </div>
    </div>
</div>

<!-- Main container for layout -->
<div class="container mt-4">
    <!-- Bootstrap row for column layout -->
    <div class="row">
        <!-- First column with border radius -->
        <div class="col-md-4">
            <div class="p-3 bg-light rounded-column">
                <h3>Column 1</h3>
                <img src="https://via.placeholder.com/150" class="img-fluid rounded" alt="Placeholder Image">
                <!-- Placeholder image with fluid class for responsiveness and rounded corners -->
                <p>Some text below the image for description or other content.</p>
            </div>
        </div>

        <!-- Second column with border radius -->
        <div class="col-md-4">
            <div class="p-3 bg-light rounded-column">
                <h3>Column 2</h3>
                <img src="https://via.placeholder.com/150" class="img-fluid rounded" alt="Placeholder Image">
                <!-- Placeholder image with fluid class for responsiveness and rounded corners -->
                <p>Additional text for this column.</p>
            </div>
        </div>

        <!-- Third column with border radius -->
        <div class="col-md-4">
            <div class="p-3 bg-light rounded-column">
                <h3>Column 3</h3>
                <img src="https://via.placeholder.com/150" class="img-fluid rounded" alt="Placeholder Image">
                <!-- Placeholder image with fluid class for responsiveness and rounded corners -->
                <p>Additional text to accompany the image.</p>
            </div>
        </div>
    </div>
</div>

<!-- Main container for layout -->
<div class="container mt-4">
    <!-- Bootstrap row for column layout -->
    <div class="row">
        <!-- First column with border radius -->
        <div class="col-md-4">
            <div class="p-3 bg-light rounded-column">
                <h3>Column 1</h3>
                <img src="https://via.placeholder.com/150" class="img-fluid rounded" alt="Placeholder Image">
                <!-- Placeholder image with fluid class for responsiveness and rounded corners -->
                <p>Some text below the image for description or other content.</p>
            </div>
        </div>

        <!-- Second column with border radius -->
        <div class="col-md-4">
            <div class="p-3 bg-light rounded-column">
                <h3>Column 2</h3>
                <img src="https://via.placeholder.com/150" class="img-fluid rounded" alt="Placeholder Image">
                <!-- Placeholder image with fluid class for responsiveness and rounded corners -->
                <p>Additional text for this column.</p>
            </div>
        </div>

        <!-- Third column with border radius -->
        <div class="col-md-4">
            <div class="p-3 bg-light rounded-column">
                <h3>Column 3</h3>
                <img src="https://via.placeholder.com/150" class="img-fluid rounded" alt="Placeholder Image">
                <!-- Placeholder image with fluid class for responsiveness and rounded corners -->
                <p>Additional text to accompany the image.</p>
            </div>
        </div>
    </div>
</div>

<!-- Main container for layout -->
<div class="container mt-4">
    <!-- Bootstrap row for column layout -->
    <div class="row">
        <!-- First column with border radius -->
        <div class="col-md-4">
            <div class="p-3 bg-light rounded-column">
                <h3>Column 1</h3>
                <img src="https://via.placeholder.com/150" class="img-fluid rounded" alt="Placeholder Image">
                <!-- Placeholder image with fluid class for responsiveness and rounded corners -->
                <p>Some text below the image for description or other content.</p>
            </div>
        </div>

        <!-- Second column with border radius -->
        <div class="col-md-4">
            <div class="p-3 bg-light rounded-column">
                <h3>Column 2</h3>
                <img src="https://via.placeholder.com/150" class="img-fluid rounded" alt="Placeholder Image">
                <!-- Placeholder image with fluid class for responsiveness and rounded corners -->
                <p>Additional text for this column.</p>
            </div>
        </div>

        <!-- Third column with border radius -->
        <div class="col-md-4">
            <div class="p-3 bg-light rounded-column">
                <h3>Column 3</h3>
                <img src="https://via.placeholder.com/150" class="img-fluid rounded" alt="Placeholder Image">
                <!-- Placeholder image with fluid class for responsiveness and rounded corners -->
                <p>Additional text to accompany the image.</p>
            </div>
        </div>
    </div>
</div>  
  </body>
</html>