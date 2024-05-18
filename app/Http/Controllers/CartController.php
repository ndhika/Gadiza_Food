<?php

namespace App\Http\Controllers;

class CartController extends Controller
{
    public function removeItem(Request $request, $id)
    {
        // Validasi user ID jika diperlukan
        // $request->validate(['user_id' => 'required|integer']);

        $cartItem = CartItem::where('id', $id)->first();

        if (!$cartItem) {
            return response()->json(['message' => 'Item tidak tersedia'], 404);
        }

        $cartItem->delete();

        return response()->json(['message' => 'Item telah dihapus dari keranjang'], 200);
    }

    public function getCartItems($userId)
    {
        $cartItem = CartItem::where('user_id', $userId)->get();

        return response()->json($cartItems, 200);
    }
}