<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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
