<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.page');

Route::get('/conecte-se', [AuthController::class, 'login'])->name('login');
Route::get('/cadastre-se', [AuthController::class, 'register'])->name('register');
