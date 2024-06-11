@extends('layouts.sidebarAdmin')

@section('content')
    <h2>List Order</h2>
    <form action="{{ route('orderAdmin.history') }}" method="GET" class="d-inline">
        @csrf
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-trash fa-lg"></i>History</button>
    </form>
    <table id="example" class="table table-striped table-responsive" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Pesanan</th>
                <th>Jumlah</th>
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
            @foreach($orders as $order) <!-- Use $orders instead of $order -->
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->nama_customer }}</td>
                    <td>{{ $order->order_items->pluck('nama_pesanan')->join(', ') }}</td>
                    <td class="text-center">{{ $order->order_items->pluck('jumlah_pesanan') }}</td>
                    <td class="text-center">{{ number_format($order->total_harga, 0, ',', '.') }}</td>
                    <td>{{ $order->alamat }}</td>
                    <td>{{ $order->no_telepon }}</td>
                    <td>{{ $order->tgl_pesan }}</td>
                    <td>{{ $order->metode_bayar }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <a href="{{ route('orderAdmin.edit', $order->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                        <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot></tfoot>
    </table>
@endsection