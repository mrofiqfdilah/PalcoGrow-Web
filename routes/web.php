<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\AgridentController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login_create'])->name('login');

Route::get('login', [AuthController::class, 'login_create'])->name('login');
Route::post('login_store', [AuthController::class, 'login_store'])->name('login_store');

Route::get('register', [AuthController::class, 'register_create'])->name('register');
Route::post('register_store', [AuthController::class, 'register_store'])->name('register_store');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('home', [HomeController::class, 'home'])->name('home');

Route::get('agrident_ai', [AgridentController::class, 'agrident_page'])->name('agrident_ai');
Route::post('agrident_store', [AgridentController::class, 'agrident_store'])->name('agrident_store');
