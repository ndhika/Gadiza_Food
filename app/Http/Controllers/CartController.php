<?php

namespace App\Http\Controllers;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::where('user_id', auth()->user()->id)->get();
        $total = $cart->sum(function ($item) {
            return $item->quantity * $item->menu->price;
        });
        return view('keranjang.keranjang', compact('cart', 'total'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'payment_method' => 'required|in:bank_bca,bank_mandiri,shopeepay,cash_on_delivery',
        ]);
        
        $request->validate([
            'menu_id' => 'required|exists:menu,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = Cart::updateOrCreate(
            ['user_id' => auth()->user()->id, 'menu_id' => $request->menu_id],
            ['quantity' => $request->quantity]
        );
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('keranjang.keranjang')->with('success');
    }
}