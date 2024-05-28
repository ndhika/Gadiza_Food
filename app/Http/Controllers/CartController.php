<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Item;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $items = all();
        $cartItems = Cart::with('item')->where('user_id', auth()->id())->get();
        
        $subtotal = $cartItems->sum('subtotal');
        $shipping = 20.000; //ongkir sementara
        $total = $subtotal + $shipping;
        
        return view('keranjang.keranjang', compact('items', 'cartItems', 'subtotal', 'shipping', 'total'));
    }

    public function removeFromCart($id)
    {
        $cartItem = Cart::where('user_id', auth()->id())->where('id', $id)->first();

        if($cartItem) {
            $cartItem->delete();
            return response()->json(['message' => 'Item telah dihapus dari keranjang']);
        }

        return response()->json(['message' => 'Item tidak tersedia'], 404);
    }
}