<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', Cirote\Ui\Http\Livewire\Auth::class)->name('login');

Route::get('/register', Cirote\Ui\Http\Livewire\Register::class)->name('register');

Route::post('/logout', [Cirote\Ui\Http\Controllers\AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');