<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\HomeController;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/reset-successful', [HomeController::class, 'resetSuccess'])->name('password.reset.success');


