@extends('layouts.sidebarAdmin')

@section('content')
    <h2>History Pemesanan</h2>
    <table id="example" class="table table-striped table-responsive" style="width:100%">
        @foreach($orders as $order)
            @if ($order->status_aktif == 'Hapus')
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
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->nama_customer }}</td>
                        <td>
                            @foreach($order->orderItems as $item)
                                {{ $item->nama_pesanan }} <br>
                            @endforeach
                        </td>
                        <td>
                            @foreach($order->orderItems as $item)
                                {{ $item->jumlah_pesanan }} <br>
                            @endforeach
                        </td>
                        <td class="text-center">Rp. {{ number_format($order->total_harga, 0, ',', '.') }}</td>
                        <td>{{ $order->alamat_lengkap }}</td>
                        <td>{{ $order->no_telepon }}</td>
                        <td>{{ $order->tanggal_pemesanan }}</td>
                        <td>{{ $order->pembayaran }}</td>
                        <td>{{ $order->status }}</td>
                        <td>
                            <form action="{{ route('orderAdmin.destroy', $order->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                            <form action="{{ route('orderAdmin.recover', $order->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success"><i class="bi bi-arrow-clockwise"></i></button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endif
        @endforeach
    </table>
@endsection
