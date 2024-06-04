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
@foreach($menuAdmins as $menu)
<div class="container mt-4">
  <h2 class="text-center">{{ $menu->category }}</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="{{asset('assets/img/'. $menu->image_path)}}" alt="pizza" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>{{ $menu->name }}</h3>
          <p>Rp. {{ number_format($menu->price, 0, ',', '.') }}</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>{{ $menu->name }}</h3>
          <p>{{ $menu->description }} Rp. {{ number_format($menu->price, 0, ',', '.') }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach

<!-- Checkout Button -->
<form action="{{ route('cart.add') }}" method="POST">
  @csrf
  <button type="submit" class="btn btn-primary btn-lg mt-4 center mb-5"><i class="bi bi-cart-fill"></i> Checkout</button>
</form>

<script>
  function toggleHighlight(element) {
    element.classList.toggle('highlighted');
    const description = element.querySelector('.description');
    description.classList.toggle('visible');
  }
</script>