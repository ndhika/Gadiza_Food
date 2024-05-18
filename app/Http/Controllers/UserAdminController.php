<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserAdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:users,username,' . $user->id,
            'no_telepon' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'alamat_lengkap' => 'required',
        ]);

        $user->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
            'alamat_lengkap' => $request->alamat_lengkap,
        ]);

        if ($request->password) {
            $user->update(['password' => Hash::make($request->password)]);
        }

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }
}