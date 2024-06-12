@extends('layouts.sidebarAdmin')

@section('content')
    <h2>Edit Order</h2>
    <form action="{{ route('orderAdmin.update', $order->id) }}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label class="fw-bold">Nama Customer</label>
            <input type="text" style="width: 50%;" class="form-control @error('nama_customer') is-invalid @enderror" name="nama_customer" value="{{ old('nama_customer', $order->nama_customer) }}">
            @error('nama_customer')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="fw-bold">Alamat</label>
            <input type="text" style="width: 50%;" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $order->alamat_lengkap) }}">
            @error('alamat')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="fw-bold">No Telepon</label>
            <input type="text" style="width: 50%;" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ old('no_telp', $order->no_telepon) }}">
            @error('no_telp')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        
        <!-- Input untuk mengedit pesanan dan jumlah -->
        <div class="form-group">
            <label class="fw-bold">Pesanan</label>
            @foreach($order->orderItems as $orderItem)
                <div>
                    <input type="text" style="width: 50%;" class="form-control" name="pesanan[]" value="{{ $orderItem->nama_pesanan }}">
                    <input type="number" style="width: 50%;" class="form-control" name="jumlah[]" value="{{ $orderItem->jumlah_pesanan }}">
                </div>
            @endforeach
        </div>
        
        <div class="form-group">
            <label class="fw-bold">Total Harga</label>
            <input type="text" style="width: 50%;" class="form-control @error('total_harga') is-invalid @enderror" name="total_harga" value="{{ old('total_harga', $order->total_harga) }}">
            @error('total_harga')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="fw-bold">Status</label>
            <select name="status" style="width: 50%;" class="form-control @error('status') is-invalid @enderror">
                <option value="sedang dibuat" {{ old('status', $order->status) == 'sedang dibuat' ? 'selected' : '' }}>Sedang Dibuat</option>
                <option value="sedang diantar" {{ old('status', $order->status) == 'sedang diantar' ? 'selected' : '' }}>Sedang Diantar</option>
                <option value="pesanan sukses" {{ old('status', $order->status) == 'pesanan sukses' ? 'selected' : '' }}>Pesanan Sukses</option>
            </select>
            @error('status')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
    </form>
@endsection
    