@extends('layouts.sidebarAdmin')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nama Customer</th>
      <th>Pesanan</th>
      <th>Jumlah Pesanan</th>
      <th>Total Harga</th>
      <th>Alamat</th>
      <th>Metode Pembayaran</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>naja</td>
      <td>mie ayam</td>
      <td>2</td>
      <td>30.000</td>
      <td>rumah</td>
      <td>cod</td>
      <td>sedang dibuat</td>
    </tr>
    
  </tbody>
</table>
@endsection