<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\View\View;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(): View
    {
        // Ambil data pelanggan yang statusnya aktif
        $users = User::where('status_aktif', '=', 'Aktif')->get();
        return view('admin.userAdmin.User', compact('users'));
    }

    public function indexHistory(): View
    {
        $users = User::where('status_aktif', '=', 'Hapus')->get();
        return view('customerAdmin.history', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'username' => ['required', 'max:225', 'unique:users'],
            'no_telepon' => 'required|numeric|digits_between:10,15',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255',
            'alamat_lengkap' => 'required|max:255',    
        ]);

        $slug = Str::slug($request->username, '-');

        $user = User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_telp' => $request->no_telp,
            'status_aktif' => 'Aktif',
            'slug_link' => $slug,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug_link)
    {
        $user = User::where('slug_link', $slug_link)->firstOrFail();
        return view('admin.userAdmin.detail', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug_link)
    {
        $user = User::where('slug_link', $slug_link)->firstOrFail();
        return view('admin.userAdmin.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug_link)
    {
        $user = User::where('slug_link', $slug_link)->firstOrFail();
        $user->update($request->all());

        return redirect()->route('userAdmin.index')->with('success', 'User updated successfully.');
    }

    /**
     * Soft delete the specified resource from storage.
     */
    public function softdelete(Request $request, string $slug_link)
    {
        $slug = Str::slug($request->username, '-');
        $user = User::where('slug_link', $slug_link)->firstOrFail();
        $user->update([
            'email' => $request->email,
            'password' => $request->password,
            'username' => $request->username,
            'no_telp' => $request->no_telp,
            'status_aktif' => 'Hapus',
            'slug_link' => $slug,
            'deleted_at' => now(),
        ]);

        return redirect()->route('userAdmin.index')->with('success', 'User deleted successfully.');
    }

    /**
     * Permanently delete the specified resource from storage.
     */
    public function destroy(string $slug_link)
    {
        $user = User::where('slug_link', $slug_link)->firstOrFail();
        $user->delete();

        return redirect()->route('userAdmin.index')->with('success', 'User deleted successfully.');
    }
}
