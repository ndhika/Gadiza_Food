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

<!-- Food Section -->
<div class="container mt-4">
  <h2 class="text-center">Food</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/mie-ayam.jpeg" alt="mie ayam" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>MIE AYAM</h3>
          <p>Rp 15.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>MIE AYAM</h3>
          <p>Mie Ayam yang lezat dengan harga Rp 15.000.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/pastel.jpg" alt="pastel" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>PASTEL</h3>
          <p>Rp 25.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>PASTEL</h3>
          <p>Pastel yang renyah dan enak yang berisi 5 buah satu paket dengan harga Rp 25.000.</p>
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
          <p>Pizza yang lezat dengan harga Rp 15.000.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/dimsum.jpeg" alt="dimsum" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>DIMSUM</h3>
          <p>Rp 20.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>DIMSUM</h3>
          <p>Dimsum yang lezat yang berisi 5 buah satu paket dengan harga Rp 15.000.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/pistuban.jpg" alt="pistuban" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>PISTUBAN</h3>
          <p>Rp 10.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>PISTUBAN</h3>
          <p>Pistuban yang gurih dengan harga Rp 10.000.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/makaroni-schotel.jpg" alt="makaroni_schotel" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>MAKARONI SCHOTEL</h3>
          <p>Rp 30.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>MAKARONI SCHOTEL</h3>
          <p>Makaroni Schotel yang lezat yang berisi 2 buah dalam satu paket dengan harga Rp 30.000.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Section Tambahan -->
<div class="container mt-4">
  <div class="row">
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/bowl-chicken-teriyaki.jpeg" alt="chicken bowl teriyaki" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h4>RICE BOWL CHICKEN TERIYAKI</h4>
          <p>Rp 20.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>RICE BOWL CHICKEN TERIYAKI</h3>
          <p>Rice Bowl Chicken Teriyaki yang lezat dengan harga Rp 20.000.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/bowl-beef-yakiniku.jpeg" alt="bowl beef yakiniku" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>RICE BOWL BEEF YAKINIKU</h3>
          <p>Rp 20.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>RICE BOWL BEEF YAKINIKU</h3>
          <p>Rice Bowl Beef Yakiniku yang lezat dengan harga Rp 20.000.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/bowl-chicken-teriyaki.jpeg" alt="chicken bowl teriyaki" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h4>RICE BOWL CHICKEN TERIYAKI</h4>
          <p>Rp 20.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>RICE BOWL CHICKEN TERIYAKI</h3>
          <p>Rice Bowl Chicken Teriyaki yang lezat dengan harga Rp 20.000.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Section ke-4 -->
<div class="container mt-4">
  <div class="row">
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/bowl-chicken-yakiniku.jpg" alt="chicken bowl yakiniku" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h4>RICE BOWL CHICKEN YAKINIKU</h4>
          <p>Rp 20.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>RICE BOWL CHICKEN YAKINIKU</h3>
          <p>Rice Bowl Chicken Yakiniku yang lezat dengan harga Rp 20.000.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/potato-brulle.jpg" alt="potato brulle" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>POTATO BRULLE</h3>
          <p>Rp 30.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>POTATO BRULLE</h3>
          <p>Potato Brulle yang lezat dengan harga Rp 30.000.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/sushi-mini.jpeg" alt="sushi mini" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>SUSHI MINI</h3>
          <p>Rp 25.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>SUSHI MINI</h3>
          <p>Sushi Mini yang lezat dengan harga Rp 25.000.</p>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- Beverages Section -->
<div class="container mt-4">
  <br>
  <h2 class="text-center">Beverages</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/es-cendol.jpeg" alt="es cendol" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>ES CENDOL</h3>
          <p>Rp 10.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>ES CENDOL</h3>
          <p>Minuman yang menyegarkan dengan rasa yang kaya dengan harga Rp 10.000</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/ximilu.jpeg" alt="ximilu" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:100px;">
        <div class="text-center">
          <h3>XIMILU</h3>
          <p>Rp 20.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>XIMILU</h3>
          <p>Minuman yang menyegarkan dengan rasa yang kaya dengan harga Rp 20.000</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/es-buko-pandan.jpeg" alt="es buko pandan" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>ES BUKO PANDAN</h3>
          <p>Rp 20.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>ES BUKO PANDAN</h3>
          <p>Minuman yang menyegarkan dengan rasa yang kaya dengan harga Rp 20.000</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- section 2 -->

<div class="container mt-4">
  <div class="row">
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/dalgona-coffee.jpeg" alt="dalgona coffee" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>DALGONA COFFEE</h3>
          <p>Rp 20.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>DALGONA COFFE</h3>
          <p>Minuman yang menyegarkan dengan rasa yang kaya dengan harga Rp 20.000</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/mango-milky-cheese.jpeg" alt="mango milky cheese" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>MANGO MILKY CHEESE</h3>
          <p>Rp 20.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>MANGO MILKY CHEESE</h3>
          <p>Minuman yang menyegarkan dengan rasa yang kaya dengan harga Rp 20.000</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="assets/img/melon-milky-cheese.jpg" alt="melon milky cheese" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>MELON MILKY CHEESE</h3>
          <p>Rp 20.000</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>MELON MILKY CHEESE</h3>
          <p>Minuman yang menyegarkan dengan rasa yang kaya dengan harga Rp 20.000</p>
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
