<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MenuController;
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
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/menu/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');

// Other routes...

Route::get('/', function () {
    return view('/beranda/homepage', [
        "title" => "Beranda"
    ]);
});

Route::middleware(['auth'])->group(function () {
    
    Route::get('/menu', [MenuController::class, 'showMenu']);

    Route::get('/about', function () {
        return view('/about/about', [
            "title" => "Tentang"
        ]);
    });

    Route::get('/keranjang', function () {
        return view('/keranjang/keranjang');
    });

    Route::get('/dibuat', function () {
        return view('/keranjang/dibuat');
    });

});

// section Admin
Route::group(['middleware' => ['auth', 'admin']], function () {
    
    Route::get('/userAdmin', function () {
        return view('/admin/userAdmin/user');
    });

    Route::get('/menuAdmin', function () {
        return view('/admin/menuAdmin/menuAdmin');
    });

    Route::get('/aboutAdmin', function () {
        return view('/admin/aboutAdmin/about');
    });
    
    Route::prefix('menuAdmin')->group(function () {
        Route::get('/', [MenuController::class, 'index'])->name('menuAdmin.index');
        Route::get('/history', [MenuController::class, 'indexHistory'])->name('menuAdmin.history');
        Route::get('/create', [MenuController::class, 'create'])->name('menuAdmin.create');
        Route::post('/store', [MenuController::class, 'store'])->name('menuAdmin.store');
        Route::get('/{slug_link}/edit', [MenuController::class, 'edit'])->name('menuAdmin.edit'); 
        Route::put('/{slug_link}/update', [MenuController::class, 'update'])->name('menuAdmin.update'); 
        Route::put('/{slug_link}/softdelete', [MenuController::class, 'softdelete'])->name('menuAdmin.softdelete'); 
        Route::put('/{slug_link}/recover', [MenuController::class, 'recover'])->name('menuAdmin.recover'); 
        Route::delete('/{slug_link}/destroy', [MenuController::class, 'destroy'])->name('menuAdmin.destroy'); 
    });

    Route::prefix('userAdmin')->group(function () {
        Route::get('/', [UserAdminController::class, 'index'])->name('userAdmin.index');
        Route::get('/history', [UserAdminController::class, 'indexHistory'])->name('userAdmin.history');
        Route::get('/create', [UserAdminController::class, 'create'])->name('userAdmin.create');
        Route::post('/', [UserAdminController::class, 'store'])->name('userAdmin.store');
        Route::get('/{slug_link}', [UserAdminController::class, 'show'])->name('userAdmin.show');
        Route::get('/{slug_link}/edit', [UserAdminController::class, 'edit'])->name('userAdmin.edit');
        Route::put('/{slug_link}/update', [UserAdminController::class, 'update'])->name('userAdmin.update');
        Route::delete('/{slug_link}', [UserAdminController::class, 'destroy'])->name('userAdmin.destroy');
        Route::put('/{slug_link}/softdelete', [UserAdminController::class, 'softdelete'])->name('userAdmin.softdelete');
        Route::put('/{slug_link}/recover', [UserAdminController::class, 'recover'])->name('userAdmin.recover');
    });

    Route::prefix('profileAdmin')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profileAdmin.index');
        Route::get('/create', [ProfileController::class, 'create'])->name('profileAdmin.create');
        Route::post('/', [ProfileController::class, 'store'])->name('profileAdmin.store');
        Route::get('/{slug_link}', [ProfileController::class, 'show'])->name('profileAdmin.show');
        Route::get('/{slug_link}/edit', [ProfileController::class, 'edit'])->name('profileAdmin.edit');
        Route::put('/{slug_link}/update', [ProfileController::class, 'update'])->name('profileAdmin.update');
        Route::put('/{slug_link}/softdelete', [ProfileController::class, 'softdelete'])->name('profileAdmin.softdelete');
    });

    Route::prefix('orderAdmin')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('orderAdmin.index');
        Route::get('/create', [OrderController::class, 'create'])->name('orderAdmin.create');
        Route::post('/submit-order', [OrderController::class, 'store'])->name('orderAdmin.submit');
        Route::get('/edit/{order}', [OrderController::class, 'edit'])->name('orderAdmin.edit'); // Corrected route for edit
        Route::post('/update', [OrderController::class, 'update'])->name('orderAdmin.update'); // Corrected route for update
    });

});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'dataRegist']);
