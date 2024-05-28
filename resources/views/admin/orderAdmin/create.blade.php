@extends('layouts.sidebarAdmin')

@section('content')
<h2>Buat Order</h2>

<!-- validation -->
<form action="{{ route('orderAdmin.store') }}" method="POST">
    @csrf
    @method('POST')
    <div class="form-group">
        <label class="fw-bold">Nama Customer</label>
        <input type="text" style="width: 50%;" class="form-control @error('nama_customer') is invalid @enderror" name="nama_customer">
        @error('nama_customer')
        <div class="alert alert-danger-mt-2">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="fw-bold">Pesanan</label>
        <input type="text" style="width: 50%;" class="form-control @error('pesanan') is invalid @enderror" name="pesanan">
        @error('pesanan')
        <div class="alert alert-danger-mt-2">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="fw-bold">Jumlah Pesanan</label>
        <input type="number" style="width: 50%;" class="form-control @error('jumlah_pesanan') is invalid @enderror" name="jumlah_pesanan">
        @error('jumlah_pesanan')
        <div class="alert alert-danger-mt-2">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="fw-bold">Total Harga</label>
        <input type="text" style="width: 50%;" class="form-control @error('total_harga') is invalid @enderror" name="total_harga">
        @error('total_harga')
        <div class="alert alert-danger-mt-2">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="fw-bold">Alamat</label>
        <input type="text" style="width: 50%;" class="form-control @error('alamat') is invalid @enderror" name="alamat">
        @error('alamat')
        <div class="alert alert-danger-mt-2">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="fw-bold">No Telepon</label>
        <input type="text" style="width: 50%;" class="form-control @error('no_telp') is invalid @enderror" name="no_telp">
        @error('no_telp')
        <div class="alert alert-danger-mt-2">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="fw-bold">Tanggal Pemesanan</label>
        <input type="date" style="width: 50%;" class="form-control @error('tgl_pesan') is invalid @enderror" name="tgl_pesan">
        @error('tgl_pesan')
        <div class="alert alert-danger-mt-2">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="fw-bold">Metode Pembayaran</label>
        <input type="text" style="width: 50%;" class="form-control @error('metode_bayar') is invalid @enderror" name="metode_bayar">
        @error('metode_bayar')
        <div class="alert alert-danger-mt-2">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="fw-bold">Status</label>
        <select name="status" class="form-control @error('status') is invalid @enderror" name="status">
            <option value="sedang dibuat">Sedang Dibuat</option>
            <option value="sedang diantar">Sedang Diantar</option>
            <option value="pesanan sukses">Pesanan Sukses</option>
        </select>
        @error('status')
        <div class="alert alert-danger-mt-2">
            {{ $message }}
        </div>
        @enderror
    </div>
    <br>
    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
    <button type="reset" class="btn btn-md btn-warning">RESET</button>
</form>
<!-- end -->
@endsection