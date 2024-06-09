<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Validate the request
        $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Retrieve the menu item
        $menu = Menu::findOrFail($request->menu_id);

        // Add the item to the cart
        CartItem::create([
            'menu_id' => $menu->id,
            'user_id' => Auth::id(),
            'quantity' => $request->quantity,
            'price' => $menu->price * $request->quantity,
        ]);

        // Redirect back with a success message (optional)
        return Redirect::back()->with('success', 'Item added to cart successfully.');
    }
}
