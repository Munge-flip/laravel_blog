<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticatedUserController;
use App\Http\Controllers\RegisteredUserController;

Route::middleware('guest')->group(function() {
    Route::get('/login', [RegisteredUserController::class, 'index'])->name('login');

    Route::get('/register', [AuthenticatedUserController::class, 'index'])->name('register');
});