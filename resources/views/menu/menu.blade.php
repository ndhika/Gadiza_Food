<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    
    .rounded-column {
      border-radius: 50px;
      border: 1px solid #ddd;
      transition: transform 0.2s, box-shadow 0.2s;
      position: relative;
      cursor: pointer;
    }
    .rounded-column:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .highlighted {
      background-color: #e0ffe0;
      border-color: #00ff00;
    }
    .checkmark {
      display: none;
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 1.5rem;
      color: #00ff00;
    }
    .highlighted .checkmark {
      display: block;
    }
    .img-1 {
      height: 181px;
      width: 322.4px;
    }
  </style>
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
          <a class="nav-link" href="/login"><i class="bi bi-box-arrow-in-right"> </i>Log in</a>
        </li>
        <li class="nav-item daftar rounded-pill daftarnav px-3 ms-2 fs-5">
          <a class="nav-link" href="/register"></i>Daftar</a>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>

<!-- Main container for layout -->
<div class="container mt-4">
  <!-- Bootstrap row for column layout -->
  <div class="row">
    <!-- First column with border radius -->
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/mie-ayam.jpeg" alt="mie ayam" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>MIE AYAM</h3>
          <p>Rp 10.00</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
      </div>
    </div>

    <!-- Second column with border radius -->
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/pastel.jpg" alt="pastel" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>PASTEL</h3>
          <p>Rp 7.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
      </div>
    </div>

    <!-- Third column with border radius -->
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/pizza.jpg" alt="pizza" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>PIZZA</h3>
          <p>Rp 15.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
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
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <div class="text-center">
          <img src="assets/img/dimsum.jpeg" alt="dimsum" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
          <h3>DIMSUM</h3>
          <p>Rp 15.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
      </div>
    </div>

    <!-- Second column with border radius -->
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <div class="text-center">
          <img src="assets/img/pistuban.jpg" alt="pistuban" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
          <h3>PISTUBAN</h3>
          <p>Rp 15.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
      </div>
    </div>

    <!-- Third column with border radius -->
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <div class="text-center">
          <img src="assets/img/makaroni-schotel.jpg" alt="makaroni_schotel" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
          <h3>MAKARONI SCHOTEL</h3>
          <p>Rp 15.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
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
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <div class="text-center">
          <img src="assets/img/dimsum.jpeg" alt="dimsum" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
          <h3>DIMSUM</h3>
          <p>Rp 15.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
      </div>
    </div>

    <!-- Second column with border radius -->
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <div class="text-center">
          <img src="assets/img/pistuban.jpg" alt="pistuban" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:100px;">
          <h3>PISTUBAN</h3>
          <p>Rp 15.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
      </div>
    </div>

    <!-- Third column with border radius -->
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <div class="text-center">
          <img src="assets/img/makaroni-schotel.jpg" alt="makaroni_schotel" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
          <h3>MAKARONI SCHOTEL</h3>
          <p>Rp 15.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
      </div>
    </div>
  </div>
</div>

<!-- Checkout Button -->
<div class="container mt-4 text-center mb-5">
  <a href="/keranjang" class="btn btn-primary btn-lg">
    <i class="bi bi-cart-fill"></i> Checkout
  </a>
</div>

<script>
  function toggleHighlight(element) {
    element.classList.toggle('highlighted');
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzOgS0GtjfGap7pF0GJN6fC0hZH7bUis/xHPK5yE4Oxk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-ho+j7jyWK8fNQe+A1L8FV/r+ARWQNJXczVxEtnLD96YHlBc/Ho+sZB6N/ZB/tpAK" crossorigin="anonymous"></script>
</body>
</html>
