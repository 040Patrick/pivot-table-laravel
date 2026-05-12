<?php

use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Guest\AuthController;
use App\Http\Controllers\Guest\RegisterController;
use App\Http\Controllers\ServerController;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function () {

    // GUEST
    Route::middleware('guest')->group(function () {
        // Dashboard 
        Route::get('/', [ServerController::class, 'index'])->name('server.index');
        // Register
        Route::get('/register', [RegisterController::class, 'register'])->name('register.register');
        Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
        // Login
        Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
        Route::post('/login', [AuthController::class, 'login'])->name('auth.store');
    });

    // AUTH
    Route::middleware('auth')->group(function () {
        Route::resource('user', UserController::class);
    });

});