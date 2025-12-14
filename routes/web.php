<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticatedUserController;
use App\Http\Controllers\RegisteredUserController;

Route::middleware('guest')->group(function() {
    Route::get('/register', [RegisteredUserController::class, 'index'])->name('login');
    Route::post('/register', [RegisteredUserController::class, 'store']);
    
    Route::get('/login', [AuthenticatedUserController::class, 'index'])->name('register');
    Route::post('/login', [AuthenticatedUserController::class, 'store']);
});