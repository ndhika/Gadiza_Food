<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $profile = user::where('status_aktif', '=', 'Aktif')->get();
        return view('admin.profileAdmin.profile', compact('profile'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug_link)
    {
        $profile = user::where('slug_link', $slug_link)->firstOrFail();
        return view('profile.profile', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug_link)
    {
        $profile = User::where('slug_link', $slug_link)->firstOrFail();
        return view('admin.profileAdmin.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug_link)
    {
        $profile = User::where('slug_link', $slug_link)->firstOrFail();

        $request->validate([
            'nama' => 'required|max:255',
            'username' => ['required', 'max:225', 'unique:users,username,' . $profile->id],
            'no_telepon' => 'required|numeric|digits_between:10,15',
            'email' => 'required|email:dns|unique:users,email,' . $profile->id,
            'password' => 'nullable|min:8|max:255',
            'alamat_lengkap' => 'required|max:255',
        ]);
        
        // Handle image upload
        if ($request->hasFile('photo')) {
            // Delete previous image if exists
            if ($profile->photo) {
                Storage::disk('public_img')->delete($profile->photo);
            }

            // Get the uploaded file
            $image = $request->file('photo');
            // Get the original file name
            $filename = $image->getClientOriginalName();
            // Generate a unique file name to prevent conflicts
            $uniqueFilename = $filename;
            // Store the new image in the 'public/storage/img' directory
            $image->storeAs('', $uniqueFilename, 'public_img');

            // Assign the new image path to the profile
            $profile->photo = $uniqueFilename;
        }

        $profile->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $profile->password,
            'no_telepon' => $request->no_telepon,
            'alamat_lengkap' => $request->alamat_lengkap,
            'slug_link' => Str::slug($request->username, '-'),
        ]);

        return redirect()->route('profileAdmin.index')->with('success', 'User updated successfully.');
    }


    /**
     * Soft delete the specified resource from storage.
     */
    public function softdelete(Request $request, string $slug_link)
    {
        $profile = User::where('slug_link', $slug_link)->firstOrFail();
        $profile->update([
            'status_aktif' => 'Hapus',
        ]);

        return redirect()->route('profileAdmin.index')->with('success', 'User deleted successfully.');
    }
}
