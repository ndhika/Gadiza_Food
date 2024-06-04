<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MenuAdminController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\AboutController;


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


// Route resource
Route::get('/MenuAdmin', [MenuAdminController::class, 'index'])->name('MenuAdmin.index');
Route::get('/MenuAdmin/create', [MenuAdminController::class, 'create'])->name('MenuAdmin.create');
Route::post('/MenuAdmin', [MenuAdminController::class, 'store'])->name('MenuAdmin.store');
Route::get('/MenuAdmin/{id}/edit', [MenuAdminController::class, 'edit'])->name('MenuAdmin.edit');
Route::put('/MenuAdmin/{id}', [MenuAdminController::class, 'update'])->name('MenuAdmin.update');
Route::delete('/MenuAdmin/{id}', [MenuAdminController::class, 'destroy'])->name('MenuAdmin.destroy');


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

    Route::get('/profile', function () {
        return view('/profile/profile');
        
    }); 
    Route::get('/edit', function () {
        return view('/profile/edit');
    });

    Route::resource('/userAdmin', UserAdminController::class);

    Route::controller(OrderController::class)->group(function () {
    Route::get('/order', 'index')->name('orderAdmin.index');
    Route::get('/create', 'create')->name('orderAdmin.create');
    Route::post('/kirim',  'store')->name('orderAdmin.store');
    Route::get('/editorder', 'edit')->name('orderAdmin.edit');
    Route::put('/update', 'update')->name('orderAdmin.update');
});

    Route::middleware('auth')->group(function () {
        Route::get('/profileAdmin', [ProfileController::class, 'index'])->name('profileAdmin.index');
        Route::get('/profileAdmin', [ProfileController::class, 'edit'])->name('profileAdmin.edit');
        Route::get('/edit', [ProfileController::class, 'edit']);
        Route::post('/update', [ProfileController::class, 'store'])->name('profiles.store');
    });
    
});


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'dataRegist']);

Route::middleware('auth')->group(function () {
    Route::get('/tambah', [AboutController::class, 'store']) ->name('aboutAdmin.index');
    Route::get('/aboutAdmin', [AboutController::class, 'index'])->name('aboutAdmin.index');
    Route::get('tambah', [AboutController::class, 'create'])->name('aboutAdmin.create');
    Route::get('/edit', [AboutController::class, 'edit']);
    Route::post('/kirim', [AboutController::class, 'store'])->name('abouts.store');
});
   