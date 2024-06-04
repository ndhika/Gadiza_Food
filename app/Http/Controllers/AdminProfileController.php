<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminProfile;

class AdminProfileController extends Controller
{
    public function index()
    {
        $users = AdminProfile::all([
            'username'
        ]);
        return view('admin.AdminProfile.profile', compact('users'));
    }

    public function edit($id)
    {
        $user = AdminProfile::findOrFail($id);
        return view('AdminProfile.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'username' => 'required|max:255',
            'no_telepon' => 'required|max:15',
            'alamat_lengkap' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
        ]);

        $user = AdminProfile::findOrFail($id);
        $user->update($data);

        return redirect()->route('admin.AdminProfile.profile')->with('success', 'Data berhasil diperbarui!');
    }
}
