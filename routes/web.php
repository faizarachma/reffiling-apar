<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductCareController;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('welcome');
// });


// Auth Routes
Route::controller(AuthController::class)->group(function() {
    // Login Routes
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login');

    Route::get('/dashboard', [GudangController::class, 'dashboard'])->name('customer.dashboard');


    Route::prefix('refill')->group(function() {
        Route::get('create', [GudangController::class, 'createrefile'])->name('customer.createrefile');
        Route::get('jadwal', [GudangController::class, 'jadwallocation'])->name('customer.refile.jadwalandlocation');
        Route::get('pengiriman', [GudangController::class, 'pengiriman'])->name('customer.refile.pickupsection');
        Route::get('pembayaran', [GudangController::class, 'payment'])->name('customer.refile.payment');
        Route::get('konfirmasi', [GudangController::class, 'konfirmasi'])->name('customer.refile.confirmation');
        Route::get('/profile', [AuthController::class, 'profile'])->name('customer.profile');
    });

    // Registration Routes
    Route::get('/register', 'register')->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');



    // Logout Route
    Route::post('/logout', 'logout')->name('logout');
});


Route::get('/', [HomeController::class, 'beranda'])->name('home');


Route::get('/dashboard', [GudangController::class, 'dashboard'])->name('customer.dashboard');
Route::get('/dashboard/create', [GudangController::class, 'createrefile'])->name('dashboard.create.relife');


Route::get('/login/admin', [AuthController::class, 'showloginDistributor'])->name('admin.login');
Route::post('/login/admin/post', [AuthController::class, 'logindistributor'])->name('login.post');
Route::get('/dashboard/distributor', [GudangController::class, 'dashboardDistributor'])->name('admin.dashboard');
Route::get('/kelola/inventori', [ProductController::class, 'showInventori'])->name('kelola.inventori');
Route::get('/inventori/createproduk', [ProductController::class, 'createProducts'])->name('create.produk');
Route::post('/inventori/produk/post', [ProductController::class, 'createproduct'])->name('create.products');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('detail.produk');
Route::delete('/produk/{id}', [ProductController::class, 'destroy'])->name('produk.destroy');
Route::get('/laporan', [ProductCareController::class, 'laporanInventori'])->name('laporan.inventori');

