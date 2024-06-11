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
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->nama_customer }}</td>
                    <td>{{ $order->order_items->pluck('nama_pesanan')->join(', ') }}</td>
                    <td class="text-center">{{ $order->order_items->sum('jumlah_pesanan') }}</td>
                    <td class="text-center">{{ number_format($order->total_harga, 0, ',', '.') }}</td>
                    <td>{{ $order->alamat }}</td>
                    <td>
                        <form action="{{ route('orderAdmin.show', $order->id) }}" method="GET" class="d-inline">
                            @csrf
                            <button class="btn btn-success"><i class="bi bi-clipboard2-data"></i> Detail</button>
                        </form>
                        <form action="{{ route('orderAdmin.edit', $order->id) }}" method="GET" class="d-inline">
                            @csrf
                            <button class="btn btn-primary"><i class="fa-solid fa-pencil-alt"></i> Edit</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
