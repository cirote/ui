<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->get('/login', Cirote\Ui\Http\Livewire\Login::class)->name('login');

Route::middleware(['web'])->get('/register', Cirote\Ui\Http\Livewire\Register::class)->name('register');

Route::post('/logout', [Cirote\Ui\Http\Controllers\AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');