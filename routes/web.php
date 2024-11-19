<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/customer', function () {
    return view('customer');
});