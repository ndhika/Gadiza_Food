<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminProfileController extends Controller
{
    public function index()
    {
        $users = User::all(['username']);
        return view('admin.profileAdmin.profile', compact('users'));
    }

    public function edit($slug)
    {
        $user = User::where('slug_link', $slug)->firstOrFail();
        return view('admin.profileAdmin.edit', compact('user'));
        
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'no_telepon' => 'required',
            'alamat_lengkap' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::findOrFail($id);
        $user->username = $request->username;
        $user->no_telepon = $request->no_telepon;
        $user->alamat_lengkap = $request->alamat_lengkap;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('admin.profileAdmin.edit', $user->slug_link)
                         ->with('success', 'User updated successfully.');
    }
    
}
