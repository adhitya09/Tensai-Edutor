<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Public Routes
Route::get('/', [PageController::class, 'master']);
Route::get('about', [PageController::class, 'about']);
Route::get('price', [PageController::class, 'price']);
Route::get('gallery', [PageController::class, 'gallery']);
Route::get('teacher', [PageController::class, 'teacher']);
Route::get('contact', [PageController::class, 'contact']);
Route::get('pendaftaran', [PageController::class, 'pendaftaran']);

//dashboard routes


// Auth Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::post('pendaftaran/store', [TransaksiController::class, 'pendaftaran'])->name('pendaftaran');


// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/owner', [DashboardController::class, 'owner']);
    Route::get('/dashboard/admin', [DashboardController::class, 'admin']);
    Route::resource('/dashboard/pengajar', PengajarController::class);
    Route::resource('/dashboard/siswa', SiswaController::class);
    Route::resource('/dashboard/transaksi', TransaksiController::class);
    Route::resource('/dashboard/user', UserController::class);
});

//pengajar

