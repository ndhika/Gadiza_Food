<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Admin\AdminProfileController;
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

Route::get('/admin/profileAdmin/profile/{slug_link}', 'AdminController@profile')->name('admin.profileAdmin.profile');

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

    Route::middleware('auth')->group(function () {
        Route::get('profile', [AdminProfileController::class, 'profile'])->name('admin.menuAdmin.profile');
        Route::get('profile/{id}/edit', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
        Route::put('profile/{id}/update', [AdminProfileController::class, 'update'])->name('admin.profile.update');
        Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');
        Route::get('/profile/edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::put('/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
        Route::post('/ubahFoto', [ProfileController::class, 'ubahFoto'])->name('ubahFoto');
        Route::get('/ubahFoto', [ProfileController::class, 'editFoto'])->name('profile.editFoto');
        Route::put('/ubahFoto', [ProfileController::class, 'updateFoto'])->name('profile.updateFoto');
    });
    

    
});



Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('profile', [AdminProfileController::class, 'profile'])->name('admin.profileAdmin.profile');
    Route::get('profile/{id}/edit', [AdminProfileController::class, 'editAdmin'])->name('profileAdmin.edit');
    Route::put('profile/{id}', [AdminProfileController::class, 'updateAdmin'])->name('profileAdmin.update');
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
   