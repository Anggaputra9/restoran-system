<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route Sistem Restoran
Route::get('/restoran/dashboard', [\App\Http\Controllers\RestaurantDashboardController::class, 'index'])->name('restoran.dashboard');
