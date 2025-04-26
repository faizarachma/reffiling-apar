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
    Route::get('/dashboard/create', [GudangController::class, 'createrefile'])->name('dashboard.create.relife');
    Route::get('/dashboard/{id}', [GudangController::class, 'show'])->name('dashboard.show');
    Route::get('/dashboard/create/jadwalocation', [GudangController::class, 'jadwallocation'])->name('customer.refill.jadwalandlocation');

    // Registration Routes
    Route::get('/register', 'showRegistrationForm')->name('register');
    Route::post('/register', 'register');

    // Logout Route
    Route::post('/logout', 'logout')->name('logout');
});


Route::get('/', [HomeController::class, 'beranda'])->name('home');


Route::get('/dashboard', [GudangController::class, 'dashboard'])->name('customer.dashboard');
Route::get('/dashboard/create', [GudangController::class, 'createrefile'])->name('dashboard.create.relife');
