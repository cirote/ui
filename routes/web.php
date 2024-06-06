<?php

use Illuminate\Support\Facades\Route;
use Cirote\Ui\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'register']);

Route::post('/register', [AuthController::class, 'store']);

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth');