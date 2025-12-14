<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticatedUserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RegisteredUserController;

Route::middleware('guest')->group(function() {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');

    Route::get('/login', [AuthenticatedUserController::class, 'create'])->name('login');
});