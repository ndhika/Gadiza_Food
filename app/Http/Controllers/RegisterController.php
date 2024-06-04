<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function create()
    {
        return view('login.register');
    }
    
    public function dataRegist(Request $request)
    {
        $message = [
        'nama.required' => 'Nama harus diisi',
        'username.required' => 'Username harus diisi',
        'username.unique' => 'Username sudah digunakan',
        'no_telepon.required' => 'Nomor telepon harus diisi',
        'no_telepon.numeric' => 'Nomor telepon harus berupa angka',
        'no_telepon.digits_between' => 'Panjang nomor telepon harus antara 10 dan 15 digit',
        'email.required' => 'Email harus diisi',
        'email.email' => 'Format email tidak valid',
        'email.unique' => 'Email sudah digunakan',
        'password.required' => 'Password harus diisi',
        'password.min' => 'Panjang password minimal 8 karakter',
        'alamat_lengkap.required' => 'Alamat lengkap harus diisi',
        'alamat_lengkap.max' => 'Panjang alamat tidak boleh melebihi 255 karakter'
    ];

        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'username' => ['required', 'max:225', 'unique:users'],
            'no_telepon' => 'required|numeric|digits_between:10,15',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255',
            'alamat_lengkap' => 'required|max:255',
        ], $message);

        $validateData['password'] = Hash::Make($validateData['password']);

        $validateData['slug_link'] = Str::slug($validateData['username'], '-');

        $validateData['status_aktif'] = 'Aktif';

        try {
        $user = User::create($validateData);
            Session::flash('success', 'Registrasi berhasil');
            return redirect('/login');
        } 
        catch (\Exception $e) {
            Session::flash('error', 'Registrasi gagal!');
            return redirect()->route('/register');
        }
    }
}
