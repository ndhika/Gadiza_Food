<?php

namespace App\Http\Controllers;
use App\Models\Cart;

class CartController extends Controller
{
    public function calculateTotal(Request $request)
    {
        $cartItems = $request->user()->cart->get();
        $subtotal = $cartItems->sum(fn (CartItem $item) => $item->price * $item->quantity);
        $shipping = 20000; // Assuming a fixed shipping cost
        $total = $subtotal + $shipping;

        return [
            'subtotal' => $subtotal,
            'shipping' => $shipping,
            'total' => $total,
        ];
    }
}