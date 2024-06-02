<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserAdminController;


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


// Other routes...

// Route to display the cart page
Route::get('/keranjang', [CartController::class, 'index'])->name('keranjang.index');

// Route to handle updating cart item quantities
Route::post('/keranjang/update', [CartController::class, 'update'])->name('keranjang.update');

// Route to handle removing cart items
Route::delete('/keranjang/remove', [CartController::class, 'remove'])->name('keranjang.remove');


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

    Route::get('/userAdmin', function () {
        return view('/admin/userAdmin/user');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/profileAdmin', [ProfileController::class, 'index'])->name('profileAdmin.index');
        Route::get('/profileAdmin/edit/{id}', [ProfileController::class, 'editAdmin'])->name('profileAdmin.edit');
        Route::post('/profileAdmin/update/{id}', [ProfileController::class, 'updateAdmin'])->name('profileAdmin.update');
        Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');
        Route::get('/profile/edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::post('/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
        Route::post('/ubahFoto', [ProfileController::class, 'ubahFoto'])->name('ubahFoto');
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
    Route::post('/kirim',  'store')->name('orderAdmin.store');
    Route::get('/editorder', 'edit')->name('orderAdmin.edit');
    Route::put('/update', 'update')->name('orderAdmin.update');
});