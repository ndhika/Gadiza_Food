@extends('layouts.menu')

@section('content')
@include('layouts.navbar')

<style>
  /* Your existing styles */
  .highlighted {
    border: 2px solid #007bff;
  }

  .checkmark {
    display: none;
  }

  .highlighted .checkmark {
    display: inline;
    color: green;
  }

  .description {
    display: none;
    opacity: 0;
    transition: opacity 0.5s ease;
  }

  .description.visible {
    display: block;
    opacity: 1;
  }
</style>

<div class="container mt-4">
  <div class="row">
    @foreach ($menu as $menuitem)
      <div class="col-md-4 mb-4">
        <div class="p-3 bg-light rounded-column menu-item" id="menu-item-{{ $menuitem->id }}">
          <img src="/storage/img/{{ $menuitem->image }}" class="rounded mx-auto d-block" width="100%" height="290px" style="border-radius:2px;">
          <div class="text-center">
            <h3>{{ $menuitem->name }}</h3>
            <p>Rp. {{ number_format($menuitem->price, 0, ',', '.') }}</p>
          </div>
          <i class="bi bi-check-circle-fill checkmark"></i>
          <div class="description">
            <p>{{ $menuitem->description }}</p>
          </div>
          <center>
            <button class="btn btn-primary mt-2 add-to-cart" data-id="{{ $menuitem->id }}">Add to Cart</button>
          </center>
        </div>
      </div>
    @endforeach
  </div>
</div>

<script>
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
          const menuItem = document.getElementById('menu-item-' + menuItemId);
          menuItem.classList.add('highlighted');
          const checkmark = menuItem.querySelector('.checkmark');
          checkmark.style.display = 'inline';
          const description = menuItem.querySelector('.description');
          description.classList.add('visible');
        } else {
          alert('Failed to add item to cart');
        }
      });
    });
  });
</script>
@endsection
