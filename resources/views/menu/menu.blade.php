@include('layouts.navbar')

@extends('layouts.menu')
<style>
  /* Your existing styles */
</style>

<!-- Food Section -->
@foreach ($menu as $menuitem)
<div class="container mt-4">
  <h2 class="text-center">{{ $menuitem->name  }}</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="p-3 bg-light rounded-column" onclick="toggleHighlight(this)">
        <img src="/img/{{ $menuitem->image }}" class="rounded mx-auto d-block" width="350px" height="290px" style="border-radius:2px;">
        <div class="text-center">
          <h3>{{ $menuitem->name }}</h3>
          <p>Rp. {{ number_format($menuitem->price, 0, ',', '.') }}</p>
        </div>
        <i class="bi bi-check-circle-fill checkmark"></i>
        <div class="description">
          <h3>{{ $menuitem->name }}</h3>
          <p>{{ $menuitem->description }} Rp. {{ number_format($menuitem->price, 0, ',', '.') }}</p>
        </div>
        <button class="btn btn-primary mt-2 add-to-cart" data-id="{{ $menuitem->id }}">Add to Cart</button>
      </div>
    </div>
  </div>
</div>
@endforeach

<script>
    document.getElementById('addToCartButton').addEventListener('click', function() {
    const menuId = document.getElementById('menuId').value; // Get the menu ID
    const quantity = 1; // Set the quantity (you can adjust this as needed)
    
    // Send an AJAX request to add the item to the cart
    fetch('/menu/add-to-cart', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Use Laravel's CSRF token
        },
        body: JSON.stringify({
            menu_id: menuId,
            quantity: quantity
        })
    })
    .then(response => {
        if (response.ok) {
            // Reload the page to update the cart view
            window.location.reload();
        } else {
            // Handle the error
            console.error('Error adding item to cart');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

  function toggleHighlight(element) {
    element.classList.toggle('highlighted');
    const description = element.querySelector('.description');
    description.classList.toggle('visible');
  }

  document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function(event) {
      event.stopPropagation();
      const menuItemId = this.getAttribute('data-id');
      
      fetch('/cart/add', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ id: menuItemId })
      }).then(response => response.json()).then(data => {
        if (data.success) {
          alert('Item added to cart');
        } else {
          alert('Failed to add item to cart');
        }
      });
    });
  });
</script>
