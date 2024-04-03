<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/login/login');
    // dashboard
});

Route::get('/login', function () {
    return view('/login/login');
});

Route::get('/register', function () {
    return view('/login/register');
});

Route::get('/about', function () {
    return view('/about/about');
});

Route::get('/menu', function () {
    return view('/menu/menu');
});

Route::get('/profile', function () {
    return view('/profile/profile');

});

Route::get('/keranjang', function () {
    return view('/keranjang/keranjang');
});

// route::get('/login', [LoginController::class 'index'])


