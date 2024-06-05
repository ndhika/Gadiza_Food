<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {   
        $users = User::where('status_aktif', '=', 'Aktif')->get();
        return view('admin.userAdmin.user', compact('users'));
    }

    public function indexHistory()
    {
        $users = User::where('status_aktif', 'Hapus')->get();
        return view('admin.userAdmin.history', compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.userAdmin.addUser');
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
            'no_telepon' => $request->no_telepon,
            'alamat_lengkap' => $request->alamat_lengkap,
            'status_aktif' => 'Aktif',
            'slug_link' => $slug,
        ]);
        
        return redirect()->route('userAdmin.index')->with('success', 'User created successfully.');
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
        
        $request->validate([
            'nama' => 'required|max:255',
            'username' => ['required', 'max:225', 'unique:users,username,' . $user->id],
            'no_telepon' => 'required|numeric|digits_between:10,15',
            'email' => 'required|email:dns|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8|max:255',
            'alamat_lengkap' => 'required|max:255',
        ]);

        $user->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
            'no_telp' => $request->no_telepon,
            'alamat_lengkap' => $request->alamat_lengkap,
            'slug_link' => Str::slug($request->username, '-'),
        ]);

        return redirect()->route('userAdmin.index')->with('success', 'User updated successfully.');
    }

    /**
     * Soft delete the specified resource from storage.
     */
    public function softdelete(Request $request, string $slug_link)
    {
        $user = User::where('slug_link', $slug_link)->firstOrFail();
        $user->update([
            'status_aktif' => 'Hapus',
        ]);

        return redirect()->route('userAdmin.index')->with('success', 'User deleted successfully.');
    }

    /**
     * Recover the soft deleted user.
     */
    public function recover(string $slug_link)
    {
        $user = User::where('slug_link', $slug_link)->firstOrFail();
        $user->update([
            'status_aktif' => 'Aktif',
            'deleted_at' => null,
        ]);

        return redirect()->route('userAdmin.index')->with('success', 'User recovered successfully.');
    }

    /**
     * Permanently delete the specified resource from storage.
     */
    public function destroy(string $slug_link)
    {
        $user = User::where('slug_link', $slug_link)->firstOrFail();
        $user->delete();

        return redirect()->route('userAdmin.index')->with('success', 'User permanently deleted successfully.');
    }
}
