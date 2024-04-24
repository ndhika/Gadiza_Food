<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function authenticate(Request $request)
    {
        $message =[
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
        ];


        $userlogin = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], $message);

        if(Auth::attempt($userlogin)){
            $request->Session()->regenerate();
            return redirect()->intended('/');
        };

        return back()->with('loginError','Login Gagal!');
    }
}
