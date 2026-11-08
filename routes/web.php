<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController; 
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AuthController; 

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.process');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('books', BookController::class);
    Route::get('/categories', [CategoryController::class, 'index']); 
    Route::get('/members', [MemberController::class, 'index']);
    Route::get('/members/{id}', [MemberController::class, 'show']);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});