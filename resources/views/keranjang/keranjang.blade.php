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
                                                <h3 class=" mb-0 text-black">
                                                    <a href="/menu" class="back"><i class="bi bi-arrow-left-circle"></i></a> Checkout
                                                </h3>
                                            </div>

                                            <hr class="my-4">

                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="{{ asset('assets/img/mie-ayam.jpeg') }}" alt="mie ayam" width="100%;" style="border-radius:2px;">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h5 class="text-black mb-0">Mie Ayam</h5>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                    <button class="btn" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                        <i class="bi bi-dash-circle"></i>
                                                    </button>

                                                    <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control form-control-sm" style="width:70px;">

                                                    <button class="btn" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                        <i class="bi bi-plus-circle"></i>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0">Rp. 15.000</h6>
                                                </div>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a href="#" class="btn"><i class="bi bi-trash3"></i></a>
                                                </div>
                                            </div>

                                            <hr class="my-4">

                                            <br>
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

                                            <div class="d-flex justify-content-between mb-4">
                                                <h5>Subtotal (3 items)</h5>
                                                <h5 class="text-end">Rp. 55.000</h5>
                                            </div>
                                            <div class="d-flex justify-content-between mb-4">
                                                <h5>Shipping</h5>
                                                <h5 class="text-end">Rp. 20.000</h5>
                                            </div>
                                            <div class="d-flex justify-content-between mb-4">
                                                <h4>Total</h4>
                                                <h4 class="text-end">Rp. 75.000</h4>
                                            </div>
                                            
                                            <select class="form-select form-select-xl mb-3" aria-label="Large select example" id="payment-method">
                                                <option value="cash_on_delivery">Cash On Delivery (Bayar di Tempat)</option>
                                            </select>

                                            <a href="#" class="btn btn-secondary w-100" id="order-btn">ORDER</a>
                                            
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function updateSummary() {
            let subtotal = 0;
            document.querySelectorAll('.list-group-item').forEach(item => {
                const price = parseFloat(item.querySelector('.ms-3 span').textContent.replace('Rp. ', '').replace('.', ''));
                const quantity = parseInt(item.querySelector('.quantity').value);
                subtotal += price * quantity;
            });
            const shipping = 20000;
            const total = subtotal + shipping;
            document.querySelector('.card-body p:nth-child(5)').textContent = `Subtotal (${document.querySelectorAll('.list-group-item').length} items) : Rp. ${subtotal.toLocaleString('id-ID')}`;
            document.querySelector('.card-body p:nth-child(6)').textContent = `Shipping : Rp. ${shipping.toLocaleString('id-ID')}`;
            document.querySelector('.card-body p:nth-child(7)').textContent = `Total : Rp. ${total.toLocaleString('id-ID')}`;
        }

        document.querySelectorAll('.decrement').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.nextElementSibling;
                if (input.value > 1) {
                    input.value = parseInt(input.value) - 1;
                    updateSummary();
                }
            });
        });

        document.querySelectorAll('.increment').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.previousElementSibling;
                input.value = parseInt(input.value) + 1;
                updateSummary();
            });
        });

        document.querySelectorAll('.remove-from-cart').forEach(button => {
            button.addEventListener('click', function() {
                const cartItemId = button.dataset.id;
                fetch(`/cart/remove/${cartItemId}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.message === 'Item removed from cart') {
                        document.querySelector(`li[data-id="${cartItemId}"]`).remove();
                        updateSummary();
                    }
                });
            });
        });

        updateSummary();
    });
</script>
@endpush
@endsection