<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/', [HomeController::class, 'beranda'])->name('home');


Route::get('/dashboard', [GudangController::class, 'dashboard'])->name('dashboard.index');
Route::get('/dashboard/create', [GudangController::class, 'createrefile'])->name('dashboard.create.relife');
