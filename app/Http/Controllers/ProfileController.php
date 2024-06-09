<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Models\User;
use Illuminate\Support\Str;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->user()->role === 'admin') {
            $users = Users::all();
            return view('admin.profileAdmin.profile', compact('users'));
        } else {
            $users = Users::where('status_aktif', '=', 'Aktif')->get();
            return view('profile.profile', compact('users'));
        }
    }

    /**
     * Show the history softdalete.
     */
    public function indexHistory()
    {
        $users = User::where('status_aktif', 'Hapus')->get();
        return view('admin.userAdmin.history', compact('users'));
    }

    
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
        $user->nama = $request->input('nama');
        $user->username = $request->input('username');
        $user->no_telepon = $request->input('no_telepon');
        $user->alamat_lengkap = $request->input('alamat_lengkap');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('profile.show', $user->id)->with('success', 'Profile updated successfully');
    }

}
