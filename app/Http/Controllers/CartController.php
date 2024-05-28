<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Menu;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::with('menu')->where('user_id', auth()->id())->get();
        return view('cart.index', compact('cartItems'));
    }

    public function update(Request $request)
    {
        $cartItem = CartItem::find($request->id);
        if ($cartItem) {
            $cartItem->quantity = $request->quantity;
            $cartItem->save();
        }

        return response()->json(['success' => true]);
    }

    public function remove(Request $request)
    {
        $cartItem = CartItem::find($request->id);
        if ($cartItem) {
            $cartItem->delete();
        }

        return response()->json(['success' => true]);
    }
}
