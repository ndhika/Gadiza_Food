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
        return view('profile.profile', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request, $id)
{
    $user = User::findOrFail($id);
    $user->username = $request->input('username');
    $user->no_telepon = $request->input('no_telepon');
    $user->alamat_lengkap = $request->input('alamat_lengkap');
    $user->email = $request->input('email');
    if ($request->hasFile('profile_pic')) {
        $file = $request->file('profile_pic');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $filename);
        $user->profile_pic = $filename;
    }
    $user->save();

    return redirect()->route('profile.show', $user->id)->with('success', 'Profile updated successfully');
}

    public function index()
    {
        $users = User::all([
            'username'
        ]);
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
            $photo->storeAs('public/photos', $fileName);
    
            $user = Auth::user();
            $user->photo = $fileName;
            $user->save();
    
            return redirect()->back()->with('success', 'Foto berhasil diubah.');
        }
    
        return redirect()->back()->with('error', 'Gagal mengubah foto.');
    }

    public function editFoto()
    {
        return view('profile.edit', ['user' => Auth::user()]);
    }

    public function updateFoto(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();
        if ($request->file('photo')) {
            // Hapus foto lama jika ada
            if ($user->photo) {
                Storage::delete('public/photos/' . $user->photo);
            }

            // Simpan foto baru
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/photos', $filename);

            // Update pengguna dengan nama file baru
            $user->photo = $filename;
            $user->save();
        }

        return redirect()->route('profile.editFoto')->with('success', 'Profile photo updated successfully.');
    }
}
