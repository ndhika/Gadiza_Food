@include('layouts.navbar')
@extends('layouts.menu')
  <style>
    body {
      background-color: #d9cfc1; /* Change the background color here */
    }

    .rounded-column {
      border-radius: 50px;
      border: 1px solid #ddd;
      transition: transform 0.2s, box-shadow 0.2s;
      position: relative;
      cursor: pointer;
      overflow: hidden; /* Ensures child elements are contained within the card */
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
    .description {
      display: none;
      background-color: rgba(0, 0, 0, 0.7);
      color: white;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      padding: 20px;
      box-sizing: border-box;
      text-align: center;
      justify-content: center;
      align-items: center;
      animation: fadeIn 0.5s ease-in-out;
    }
    .description.visible {
      display: flex;
    }
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
    .img-1 {
      height: 181px;
      width: 322.4px;
    }
  </style>

<!-- Main container for layout -->
<div class="container mt-4">
  <div class="row">
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/mie-ayam.jpeg" alt="mie ayam" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>MIE AYAM</h3>
          <p>Rp 10.00</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>MIE AYAM</h3>
          <p>This is a delicious Mie Ayam priced at Rp 10.00.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/pastel.jpg" alt="pastel" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>PASTEL</h3>
          <p>Rp 7.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>PASTEL</h3>
          <p>This is a delicious Pastel priced at Rp 7.000.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/pizza.jpg" alt="pizza" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>PIZZA</h3>
          <p>Rp 15.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>PIZZA</h3>
          <p>This is a delicious Pizza priced at Rp 15.000.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Main container for layout -->
<div class="container mt-4">
  <div class="row">
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/dimsum.jpeg" alt="dimsum" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>DIMSUM</h3>
          <p>Rp 15.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>DIMSUM</h3>
          <p>This is a delicious Dimsum priced at Rp 15.000.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/pistuban.jpg" alt="pistuban" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>PISTUBAN</h3>
          <p>Rp 15.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>PISTUBAN</h3>
          <p>This is a delicious Pistuban priced at Rp 15.000.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/makaroni-schotel.jpg" alt="makaroni_schotel" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>MAKARONI SCHOTEL</h3>
          <p>Rp 15.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>MAKARONI SCHOTEL</h3>
          <p>This is a delicious Makaroni Schotel priced at Rp 15.000.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Main container for layout -->
<div class="container mt-4">
  <div class="row">
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/dimsum.jpeg" alt="dimsum" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>DIMSUM</h3>
          <p>Rp 15.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>DIMSUM</h3>
          <p>This is a delicious Dimsum priced at Rp 15.000.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/pistuban.jpg" alt="pistuban" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:100px;">
        <div class="text-center">
          <h3>PISTUBAN</h3>
          <p>Rp 15.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>PISTUBAN</h3>
          <p>This is a delicious Pistuban priced at Rp 15.000.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/makaroni-schotel.jpg" alt="makaroni_schotel" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>MAKARONI SCHOTEL</h3>
          <p>Rp 15.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>MAKARONI SCHOTEL</h3>
          <p>This is a delicious Makaroni Schotel priced at Rp 15.000.</p>
        </div>
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
    const description = element.querySelector('.description');
    description.classList.toggle('visible');
  }
</script>

