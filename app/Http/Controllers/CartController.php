<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Menu;
use Illuminate\View\View;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::with('menu')->get();
        return view('keranjang.index', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        $cartItem = CartItem::updateOrCreate(
            ['menu_item_id' => $request->menu_item_id],
            ['quantity' => $request->quantity]
        );

        return redirect()->route('cart.view');
    }

    public function viewCart()
    {
        $cartItems = CartItem::with('menuItem')->get();
        return view('cart.view', compact('cartItems'));
    }
    
    public function removeFromCart($id)
    {
        CartItem::destroy($id);
        return redirect()->route('cart.index');
    }
}
