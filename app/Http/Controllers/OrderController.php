<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function index():view
    {
        $orders = Order::all();
        return view('admin/orderAdmin/orderan', compact('orders'));
    }

    public function create():view
    {
        $order = Order::all();
        return view('admin/orderAdmin/create', compact('order'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_customer' => 'required|string|max:255',
            'pesanan' => 'required|string|max:255',
            'jumlah_pesanan' => 'required|integer',
            'total_harga' => 'required|numeric',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|numeric',
            'tgl_pesan' => 'required|date',
            'metode_bayar' => 'required|string|max:255',
            'status' => 'required|in:sedang dibuat,sedang diantar,pesanan sukses'
        ]);

        Order::create([
            'nama_customer' => $request->nama_customer,
            'pesanan' => $request->pesanan,
            'jumlah_pesanan' => $request->jumlah_pesanan,
            'total_harga' => $request->total_harga,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'tgl_pesan' => $request->tgl_pesan,
            'metode_bayar' => $request->metode_bayar,
            'status' => $request->status
        ]);
        return redirect()->route('orderAdmin.index')->with('success', 'Order created successfully.');
    }

    public function edit(Order $orders):view
    {
        return view('admin/orderAdmin/edit', compact('orders'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'status' => 'required|in:sedang dibuat,sedang diantar,pesanan sukses',
        ]);
        
        $order->update([
            'status' => $request->status
        ]);
        return redirect()->route('orderAdmin.index')->with('success', 'Order updated successfully');
    }
}
