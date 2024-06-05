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

    public function edit($slug)
    {
        $user = AdminProfile::findOrFail($id);
        return view('AdminProfile.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'no_telepon' => 'required',
            'alamat_lengkap' => 'required',
            'email' => 'required|email',
        ]);

        $user = AdminProfile::findOrFail($id);
        $user->update($data);

        return redirect()->route('admin.profileAdmin.edit', $user->slug_link)
                         ->with('success', 'User updated successfully.');
    }
    
}
