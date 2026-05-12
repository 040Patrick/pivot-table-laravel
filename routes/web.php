<?php

use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Guest\AuthController;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function () {

    // GUEST
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
        Route::post('/login', [AuthController::class, 'login'])->name('auth.store');
    });

    // AUTH
    Route::middleware('auth')->group(function () {
        Route::resource('user', UserController::class);
    });

});