<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticatedUserController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\FormController;

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [AuthenticatedUserController::class, 'create'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::resource('forms', FormController::class);
});
