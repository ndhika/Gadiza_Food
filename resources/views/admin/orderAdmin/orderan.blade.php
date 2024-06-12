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
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                @if ($order->status_aktif == 'Aktif')
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->nama_customer }}</td>
                        <td>{{ $order->orderItems->pluck('nama_pesanan')->join(', ') }}</td>
                        <td class="text-center">{{ $order->orderItems->sum('jumlah_pesanan') }}</td>
                        <td class="text-center">Rp. {{ number_format($order->total_harga, 0, ',', '.') }}</td>
                        <td>{{ $order->alamat_lengkap }}</td>
                        <td>{{ $order->no_telepon }}</td>
                        <td>{{ $order->tanggal_pemesanan }}</td>
                        <td>{{ $order->pembayaran }}</td>
                        <td>{{ $order->status }}</td>
                        <td>
                            <a href="{{ route('orderAdmin.edit', $order->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                <form action="{{ route('orderAdmin.softdelete', $order->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this order?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
@endsection
