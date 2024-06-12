@extends('layouts.keranjang')

@section('content')
<section class="h-100 h-custom" style="background-color: #d9cfc1;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-12">
        <div class="card card-registration card-registration-2">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-7">
                <div class="p-5">
                  <div class="d-flex justify-content-between align-items-center mb-5">
                    <h3 class="mb-0 text-black">
                      <a href="/menu" class="back"><i class="bi bi-arrow-left-circle"></i></a> Checkout
                    </h3> 
                  </div>
                  <hr class="my-4">

                  @php
                    $cart = session('cart', []);
                  @endphp

                  @if(count($cart) > 0)
                    @foreach($cart as $id => $details)
                    <div class="row mb-4 d-flex justify-content-between align-items-center cart-item" data-id="{{ $id }}" data-price="{{ $details['price'] }}">
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        @if(isset($details['image']))
                        <img src="/storage/img/{{ $details['image'] }}" alt="{{ $details['name'] }}" width="100%;" style="border-radius:2px;">
                        @else
                        <img src="/storage/img/default.png" alt="{{ $details['name'] }}" width="100%;" style="border-radius:2px;">
                        @endif
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-3">
                        <h5 class="text-black mb-0">{{ $details['name'] }}</h5>
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <form class="update-cart-form" action="{{ route('cart.update', $id) }}" method="post">
                          @csrf
                          <input type="hidden" name="_method" value="POST">
                          <button type="button" class="btn change-quantity" data-action="decrease"><i class="bi bi-dash-circle"></i></button>
                          <input min="0" name="quantity" value="{{ $details['quantity'] }}" type="number" class="form-control form-control-sm quantity" style="width:50px;">
                          <button type="button" class="btn change-quantity" data-action="increase"><i class="bi bi-plus-circle"></i></button>
                        </form>
                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">Rp. {{ number_format($details['price'], 0, ',', '.') }}</h6>
                      </div>
                      <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                      <form class="delete-cart-form" action="{{ route('cart.destroy', $id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn"><i class="bi bi-trash3"></i></button>
                        </form>
                      </div>
                    </div>
                    <hr class="my-4">
                    @endforeach
                  @else
                    <p>Keranjang Anda kosong.</p>
                  @endif

                  <a href="/menu" class="tambah">Mau tambah pesanan?</a>
                </div>
              </div>
              <div class="col-lg-5 bg-grey">
                <div class="p-5">
                  <h3 class="mb-5 mt-2 pt-1">Detail Pesanan</h3>
                  <hr>

                  <label class="fw-bold" for="nama">Nama :</label> {{ auth()->user()->nama }}
                  <br>
                  <label class="fw-bold" for="nomer">No. Telepon :</label> {{ auth()->user()->no_telepon }}
                  <br>
                  <label class="fw-bold" for="dikirim">Dikirim ke :</label> {{ auth()->user()->alamat_lengkap }}

                  <hr class="my-4">

                  @php
                    $subtotal = array_sum(array_map(function($item) { 
                      return $item['price'] * $item['quantity']; 
                    }, $cart));
                    $shipping = 20000;
                    $total = $subtotal + $shipping;
                  @endphp

                  <div class="d-flex justify-content-between mb-4">
                    <h5>Subtotal ({{ count($cart) }} items)</h5>
                    <h5 class="text-end">Rp. <span id="subtotal">{{ number_format($subtotal, 0, ',', '.') }}</span></h5>
                  </div>
                  <div class="d-flex justify-content-between mb-4">
                    <h5>Shipping</h5>
                    <h5 class="text-end">Rp. <span id="shipping">{{ number_format($shipping, 0, ',', '.') }}</span></h5>
                  </div>
                  <div class="d-flex justify-content-between mb-4">
                    <h4>Total</h4>
                    <h4 class="text-end">Rp. <span id="total">{{ number_format($total, 0, ',', '.') }}</span></h4>
                  </div>

                  <select class="form-select form-select-xl mb-3" aria-label="Large select example" id="payment-method">
                    <option value="cash_on_delivery">Cash On Delivery (Bayar di Tempat)</option>
                  </select>

                  <form id="order-form" action="{{ route('order.store') }}" method="POST">
                      @csrf
                      <button class="btn btn-secondary w-100" id="order-btn" form="order-form">ORDER</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.getElementById('order-btn').addEventListener('click', function(event) {
    const cartItems = {{ count($cart) }};
    if (cartItems === 0) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Keranjang Anda masih kosong!"
      });
      event.preventDefault(); // Prevent the default form submission
    } else {
      event.preventDefault(); // Prevent the default form submission

      // Menampilkan pesan SweetAlert
      Swal.fire({
        title: "Orderanmu sudah masuk!",
        text: "Terimakasih telah memesan!",
        icon: "success"
      }).then((result) => {
        if (result.isConfirmed) {
          // Submit the form
          document.getElementById('order-form').submit();
        }
      });
    }
  });
  
  document.querySelectorAll('.change-quantity').forEach(button => {
    button.addEventListener('click', function(event) {
      event.preventDefault();
      const action = this.getAttribute('data-action');
      const form = this.closest('.update-cart-form');
      const quantityInput = form.querySelector('.quantity');
      let quantity = parseInt(quantityInput.value);

      if (action === 'increase') {
        quantity += 1;
      } else if (action === 'decrease' && quantity > 0) {
        quantity -= 1;
      }

      quantityInput.value = quantity;
      updateCart(form.closest('.cart-item'), quantity);
    });
  });

  function updateCart(cartItem, quantity) {
    const id = cartItem.getAttribute('data-id');
    const price = parseFloat(cartItem.getAttribute('data-price'));

    fetch(`/keranjang/update/${id}`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      },
      body: JSON.stringify({ quantity: quantity })
    })
    .then(response => response.json())
    .then(data => {
      if (data.error) {
        console.error(data.error);
        return;
      }

      document.getElementById('subtotal').textContent = data.subtotal.toLocaleString();
      document.getElementById('total').textContent = data.total.toLocaleString();
      document.getElementById('item-count').textContent = data.itemCount;
    })
    .catch(error => console.error('Error:', error));
  }
</script>
@endsection
