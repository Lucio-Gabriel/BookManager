<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StartController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', [StartController::class, 'index'])->name('start.page');

Route::get('/inicio', [HomeController::class, 'index'])->name('home');

Route::get('/adicionar-livro', [BookController::class, 'create'])->name('book.create');
Route::post('/adicionar-livro/create_action', [BookController::class, 'create_action'])->name('book.create_action');

Route::get('/editar-livro', [BookController::class, 'edit'])->name('book.edit');
Route::post('/editar-livro/edit_action', [BookController::class,  'edit_action'])->name('book.edit_action');

Route::get('/adicionar-livro/delete', [BookController::class, 'delete'])->name('book.delete');


Route::get('/sala-de-leitura', [RoomController::class, 'index'])->name('book.room');


Route::get('/conecte-se', [AuthController::class, 'login'])->name('login');
Route::post('/conecte-se', [AuthController::class, 'login_action'])->name('user.login_action');

Route::get('/cadastre-se', [AuthController::class, 'register'])->name('register');
Route::post('/cadastre-se', [AuthController::class, 'register_action'])->name('user.register_action');