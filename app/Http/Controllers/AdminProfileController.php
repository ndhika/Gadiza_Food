<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminProfile;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function index()
    {
        $users = adminProfile::all();
        return view('admin.profileAdmin.profile', compact('users'));
    }

    public function edit($id)
    {
        $user = adminProfile::findOrFail($id);
        return view('admin.profileAdmin.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required|email',
        ]);

        $user = AdminProfile::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('admin.profileAdmin.profile')
                            ->with('success', 'Profile updated successfully');
    }
}
