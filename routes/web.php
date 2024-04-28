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
    return view('/login/login');
    // dashboard
});

// Route::get('/register', function () {
//     return view('/login/register');
// });

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

Route::get('/LaporanPemesanan', function () {
    return view('/admin/LaporanPemesanan');
});

Route::get('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'create']);

Route::post('/register', [RegisterController::class, 'dataRegist']);

