<?php

use App\Http\Controllers\Api\AuthController;

Route::prefix('auth')->group(function () {
        Route::post('register', [AuthController::class, 'register'])->name('auth.register');
        Route::post('login', [AuthController::class, 'login'])->name('auth.login');
        Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum')->name('auth.logout');
        Route::get('me', [AuthController::class, 'me'])->middleware('auth:sanctum')->name('auth.user');

        Route::post('/password/email', [AuthController::class, 'sendPasswordResetLinkEmail'])->middleware('throttle:5,1')->name('password.email');
        Route::post('/password/reset', [AuthController::class, 'resetPassword'])->name('password.reset');
    });
