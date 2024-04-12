@extends('layouts.keranjang')

@section('content')
        <section class="h-100 h-custom" style="background-color: #d9cfc1;">
            <div class="container py-4 h-100">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12">
                        <div class="card card-registration card-registration-2">
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-lg-7">
                                        <div class="p-5">
                                            <div class="d-flex justify-content-between align-items-center mb-5">
                                                <h3 class=" mb-0 text-black"><i class="bi bi-arrow-left-circle"></i> Konfirmasi Orderan</h3>
                                                <h6 class="mb-0 text-muted">3 items</h6>
                                            </div>

                                            <hr class="my-4">

                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="assets/img/mie-ayam.jpeg" alt="mie ayam" width="100%;" style="border-radius:2px;">
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
                                                    <a href="#" class="btn"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>

                                            <hr class="my-4">

                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="assets/img/makaroni-schotel.jpg" alt="makaroni" width="100%;" style="border-radius:2px;">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h5 class="text-black mb-0">Macaroni Schotel</h5>
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
                                                    <h6 class="mb-0">Rp. 30.000</h6>
                                                </div>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a href="#" class="btn"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>

                                            <hr class="my-4">

                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="assets/img/es-cendol.jpeg" alt="cendol" width="100%;" style="border-radius:2px;">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h5 class="text-black mb-0">Es Cendol</h5>
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
                                                    <h6 class="mb-0">Rp. 10.000</h6>
                                                </div>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a href="#" class="btn"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 bg-grey">
                                        <div class="p-5">
                                            <h3 class="mb-5 mt-2 pt-1">Detail Pesanan</h3>

                                            <hr>

                                            <label class="fw-bold" for="nama">Nama :</label>
                                            <label for="kita">Ayudhya Naja Adinda</label>
                                            <br>
                                            <label class="fw-bold" for="nomer">No. Telepon :</label>
                                            <label for="telepon">08123456789</label>
                                            <br>
                                            <label class="fw-bold" for="dikirim">Dikirim ke :</label>
                                            <label for="alamat">Jalan Pandanaran II no. 12, Mugassari, Kec. Semarang Selatan, Kota Semarang, Jawa Tengah</label>

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
                                            
                                            <select class="form-select form-select-xl mb-3" aria-label="Large select example">
                                                <option selected>Pilih Metode Pembayaran</option>
                                                <option value="bank_bca">Bank BCA - 1234567890 </option>
                                                <option value="bank_mandiri">Bank Mandiri - 0987654321</option>
                                                <option value="shopeepay">ShopeePay (0812345678)</option>
                                                <option value="cash_on_delivery">Cash On Delivery (Bayar di Tempat)</option>
                                            </select>

                                            <button type="submit" class="btn btn-dark btn-block btn-lg fw-bold">ORDER <i class="bi bi-arrow-right"></i></button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection