@extends('layouts.sidebarAdmin')
@include('layouts.laporanAdmin')

@section('content')
<h2>List Order</h2>
<a href="/create" class="btn btn-primary">Buat Orderan Baru</a>
<table id="example" class="table table-striped table-responsive" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Pesanan</th>
                <th class="text-start">Jumlah Pesanan</th>
                <th class="text-start">Total Harga</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th>Tanggal Pemesanan</th>
                <th>Pembayaran</th>
                <th>Status</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->nama_customer }}</td>
                <td>{{ $order->pesanan }}</td>
                <td class="text-center">{{ $order->jumlah_pesanan }}</td>
                <td class="text-center">{{ $order->total_harga }}</td>
                <td>{{ $order->alamat }}</td>
                <td>{{ $order->no_telp }}</td>
                <td>{{ $order->tgl_pesan }}</td>
                <td>{{ $order->metode_bayar }}</td>
                <td>{{ $order->status }}</td>
                <td>
                    <a href="/editorder" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                    <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        <tfoot>
        
        </tfoot>
    </table>
@endsection