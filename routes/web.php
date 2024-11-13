<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;


//pages
Route::get('/', [PagesController::class, 'index'])->name('home');

Route::get('/login', [PagesController::class, 'login'])->name('login');

Route::get('/dashboard', [PagesController::class, 'register'])->name('dashboard');

Route::get('/add', [PagesController::class, 'add'])->name('add');


//produk
Route::get('/produk', [ProdukController::class, 'produk'])->name('produk');

//user
Route::get('/user', [UserController::class, 'index'])->name('user');