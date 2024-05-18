<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Order extends Controller
{
    public function createOrder(Request $request)
    {
        $request->validate([
            'nama_customer' => 'required|string|max:255',
            'pesanan' => 'required|string|max:255',
            'jumlah_pesanan' => 'required|integer',
            'total_harga' => 'required|numeric',
            'alamat' => 'required|string|max:255',
            'metode_pembayaran' => 'required|string|max:255',
            'status' => 'required|in:sedang dibuat,sedang diantar,pesanan sukses',
        ]);

        Order::create($request->all());

        return response()->json(['message' => 'Order placed successfully!'], 200);
    }

    public function updateOrderStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:sedang dibuat,sedang diantar,pesanan sukses',
        ]);
        
        $order = Order::findOrFail($id);
        $order->update($request->only('status'));

        return response()->json(['message' => 'Order status updated successfully!'], 200);
    }

    public function getOrders()
    {
        $orders = Order::all();
        return response()->json($orders, 200);
    }
}
