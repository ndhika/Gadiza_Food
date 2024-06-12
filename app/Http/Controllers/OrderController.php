<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(): View
    {
        $orders = Order::with('orderItems')->get();
        return view('admin/orderAdmin/orderan', compact('orders'));
    }

    public function indexFe(): View
    {
        $orders = Order::all();
        return view('keranjang/dibuat', compact('orders'));
    }
    
    public function history()
    {
        // Ambil semua pesanan dari database
        $orders = Order::all();

        // Kembalikan view dengan data pesanan
        return view('admin.orderAdmin.history', compact('orders'));
    }

    public function store(Request $request): RedirectResponse
    {
        $cart = session('cart', []);

        if (count($cart) == 0) {
            return redirect()->back()->with('error', 'Keranjang Anda masih kosong!');
        }

        $order = new Order();
        $order->nama_customer = Auth::user()->nama;
        $order->no_telepon = Auth::user()->no_telepon;
        $order->alamat_lengkap = Auth::user()->alamat_lengkap;
        $order->total_harga = array_sum(array_map(function($item) {
            return $item['price'] * $item['quantity'];
        }, $cart)) + 20000; // Misal, biaya pengiriman adalah 20000
        $order->status = 'sedang dibuat';
        $order->status_aktif = 'Aktif';
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

        return redirect()->route('order.indexFe')->with('success', 'Orderanmu sudah masuk!');
    }

    public function edit($id): View
    {
        $order = Order::findOrFail($id);
        return view('admin/orderAdmin/edit', compact('order'));
    }


    public function update(Request $request, Order $order): View
    {
        $request->validate([
            'status' => 'required|in:sedang dibuat,sedang diantar,pesanan sukses',
        ]);
        
        $order->update([
            'status' => $request->status
        ]);

        return redirect()->route('orderAdmin.index')->with('success', 'Order updated successfully');
    }

    public function softdelete($id): RedirectResponse
    {
        $order = Order::findOrFail($id);
        $order->status_aktif = 'Hapus';
        $order->save();

        // Hapus order items yang terkait jika perlu

        return redirect()->route('orderAdmin.index')->with('success', 'Order successfully soft deleted');
    }

    public function recover($id): RedirectResponse
    {
        $order = Order::findOrFail($id);
        $order->status_aktif = 'Aktif';
        $order->save();


        
        return redirect()->route('orderAdmin.index')->with('success', 'Order berhasil dipulihkan.');
    }
    
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('orderAdmin.index')->with('success', 'Menu permanently deleted successfully.');
    }
}
