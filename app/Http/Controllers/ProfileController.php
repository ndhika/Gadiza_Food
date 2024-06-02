<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('profile.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'username' => 'required|max:255',
            'no_telepon' => 'required|max:15',
            'alamat_lengkap' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
        ]);

        $user = User::findOrFail($id);
        $user->update($data);

        return back()->with('success', 'Data berhasil diperbarui!');
    }

    public function index()
    {
        $users = User::all();
        return view('profileAdmin.profile', compact('users'));
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

        return redirect()->route('profileAdmin.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function ubahFoto(Request $request)
    {
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $fileName = time() . '_' . $photo->getClientOriginalName();
            $photo->storeAs('photos', $fileName);

            auth()->user()->update(['photo' => $fileName]);

            return redirect()->back()->with('success', 'Foto berhasil diubah.');
        }

        return redirect()->back()->with('error', 'Gagal mengubah foto.');
    }
}
