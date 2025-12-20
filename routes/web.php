<?php

use App\Http\Controllers\AuthentitacedSessionController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [AuthentitacedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthentitacedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthentitacedSessionController::class, 'destroy'])->name('logout');
    Route::resource('forms', FormController::class);
});
