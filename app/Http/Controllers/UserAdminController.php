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
    public function index()
    {   
        $users = User::all();
        return view('admin.userAdmin.user', compact('users'));
    }

    public function indexUser(): View
    {
        // Ambil data pelanggan yang statusnya aktif
        $users = User::where('status_aktif', '=', 'Aktif')->get();
        return view('userAdmin.index', compact('users'));
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
        //
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

        return redirect()->route('customerAdmin.index')->with('success', 'User deleted successfully.');
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
