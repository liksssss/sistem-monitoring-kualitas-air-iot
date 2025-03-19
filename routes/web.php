<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman utama diarahkan langsung ke login
Route::get('/', function () {
    return redirect('/login'); // Arahkan ke halaman login saat mengakses '/'
});

// Route untuk dashboard
Route::get('/dashboard', [DashboardController::class, 'showDashboard'])
    ->middleware(['auth', 'verified']) // Pastikan hanya pengguna yang login dapat mengakses
    ->name('dashboard');

// Route untuk profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Tambahkan route autentikasi default Laravel
require __DIR__.'/auth.php';
