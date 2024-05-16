<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|phone|max:20',
            'address' => 'required|string|address|max:255',
            'email' => 'required|string|email|max:255',
        ]);
        $user = Auth::user();

        $user->update($request->all());

        return redirect()->route('profile.edit')->with('success', 'Profile berhasil diubah');
    }
}