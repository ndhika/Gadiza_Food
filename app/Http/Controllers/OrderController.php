<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class OrderController extends Controller
{
    public function index():view
    {
        $orders = Order::all();
        return view('admin/orderAdmin/orderan', compact('orders'));
    }

    public function store(Request $request)
    {
        $cart = session('cart', []);

        if (count($cart) == 0) {
            return redirect()->back()->with('error', 'Keranjang Anda masih kosong!');
        }

        $order = new Order();
        $order->nama_customer = Auth::user()->nama;
        $order->no_telepon = Auth::user()->no_telepon;
        $order->alamat = Auth::user()->alamat_lengkap;
        $order->total_harga = array_sum(array_map(function($item) {
            return $item['price'] * $item['quantity'];
        }, $cart)) + 20000; // Misal, biaya pengiriman adalah 20000
        $order->status = 'sedang dibuat';
        $order->tanggal_pemesanan = now();
        $order->pembayaran = 'cash_on_delivery';
        $order->save();

        foreach ($cart as $id => $details) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->nama_pesanan = $details['name'];
            $orderItem->jumlah_pesanan = $details['quantity'];
            $orderItem->harga = $details['price'];
            $orderItem->save();
        }

        session()->forget('cart');

        return redirect()->route('orderAdmin.store')->with('success', 'Orderanmu sudah masuk!');
    }


    public function edit(Order $orders):view
    {
        return view('admin/orderAdmin/edit', compact('orders'));
    }

    public function update(Request $request, Order $order): RedirectResponse
    {
        $this->validate($request, [
            'status' => 'required|in:sedang dibuat,sedang diantar,pesanan sukses',
        ]);
        
        $orders->update([
            'status' => $request->status
        ]);

        return redirect()->route('orderAdmin.index')->with('success', 'Order updated successfully');
    }
}
