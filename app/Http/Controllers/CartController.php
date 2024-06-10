<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $cart = session()->get('cart', []);
        $id = $request->id;

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $menu = Menu::find($id);
            if ($menu) {
                $cart[$id] = [
                    "name" => $menu->name,
                    "quantity" => 1,
                    "price" => $menu->price,
                    "image" => $menu->image
                ];
            }
        }

        session()->put('cart', $cart);
        return response()->json(['success' => true]);
    }

    public function update(Request $request, $id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);

            $subtotal = array_sum(array_map(function($item) {
                return $item['price'] * $item['quantity'];
            }, $cart));

            return response()->json([
                'subtotal' => $subtotal,
                'total' => $subtotal + 20000, // Shipping fee
                'itemCount' => count($cart)
            ]);
        }
    }

    public function destroy($id)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Item removed successfully.');
    }
}