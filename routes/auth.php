<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('admin-panel/login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('admin-panel/login', [AuthenticatedSessionController::class, 'store'])->name('verify');
});

Route::middleware('auth')->group(function () {
    Route::get('admin-panel/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
