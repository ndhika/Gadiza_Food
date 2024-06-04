<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function index()
    {
        $users = User::all([
            'username'
        ]);
        return view('admin.profileAdmin.profile', compact('users'));
    }

    public function editAdmin($id)
    {
        $user = User::findOrFail($id);
        return view('profileAdmin.edit', compact('user'));
    }

    public function updateAdmin(Request $request, $id)
    {
        $data = $request->validate([
            'username' => 'required|max:255',
            'no_telepon' => 'required|max:15',
            'alamat_lengkap' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
        ]);

        $user = User::findOrFail($id);
        $user->update($data);

        return redirect()->route('admin.profileAdmin.profile')->with('success', 'Data berhasil diperbarui!');
    }
}
