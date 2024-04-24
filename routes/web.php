<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view('/beranda/homepage', [
        "title" => "Beranda"
    ]);
});

Route::get('/about', function () {
    return view('/about/about', [
        "title" => "Tentang"
    ]);
});


Route::get('/menu', function () {
    return view('/menu/menu', [
        "title" => 'Menu'
    ]);
});

Route::get('/dashboard', function () {
    return view('/dashboard/dashboard');
});


Route::get('/profile', function () {
    return view('/profile/profile');

});

Route::get('/keranjang', function () {
    return view('/keranjang/keranjang');
});


Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);


Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'dataRegist']);