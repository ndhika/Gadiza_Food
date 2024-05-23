<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini adalah tempat di mana kamu bisa mendaftarkan rute web untuk aplikasi mu.
| Rute-rute ini dimuat oleh RouteServiceProvider dan semua akan ditugaskan ke grup middleware "web".
| Buat sesuatu yang hebat!
|
*/

Route::get('/', function () {
    return view('/beranda/homepage', [
        "title" => "Beranda"
    ]);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/menu', function () {
        return view('/menu/menu', [
            "title" => 'Menu'
        ]);
    });

    Route::get('/about', function () {
        return view('/about/about', [
            "title" => "Tentang"
        ]);
    });

    Route::get('/keranjang', function () {
        return view('/keranjang/keranjang');
    });

    Route::get('/process', function () {
        return view('/keranjang/process');
    });
    
    Route::get('/ship', function () {
        return view('/keranjang/ship');
    });
    
    Route::get('/success', function () {
        return view('/keranjang/success');
    });

    Route::get('/userAdmin', function () {
        return view('/admin/userAdmin/user');
    });

    Route::get('/profile', function () {
        return view('/profile/profile');
        
    }); 
    Route::get('/edit', function () {
        return view('/profile/edit');
    });
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'dataRegist']);

Route::resource('users', UserAdminController::class);

Route::controller(OrderController::class)->group(function () {
    Route::get('/order', 'index')->name('orderAdmin.index');
    Route::get('/create', 'create')->name('orderAdmin.create');
    Route::post('/kirim',  'store')->name('orderAdmin.index');
    Route::get('/editOrder', 'edit')->name('orderAdmin.edit');
    Route::post('/update', 'update')->name('orderAdmin.update');
});
