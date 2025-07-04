<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Public Routes
Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::middleware('guest')->group(function () {
    // Authentication Routes
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
    
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});

// Protected Routes (Hanya bisa diakses setelah login)
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/chat', function () {
        return view('chat');
    })->name('chat');
    Route::get('/aktivitas', function () {
        return view('aktivitas');
    })->name('aktivitas');
    Route::get('/absen', function () {
        return view('absen');
    })->name('absen');
    Route::get('/notifikasi', function () {
        return view('notifikasi');
    })->name('notifikasi');
    Route::get('/tagihan', function () {
        return view('tagihan');
    })->name('tagihan');
    Route::get('/perkembangan', function () {
        return view('perkembangan');
    })->name('perkembangan');
    Route::get('/jadwal', function () {
        return view('jadwal');
    })->name('jadwal');
    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Fitur Aplikasi
    Route::view('/daftar', 'daftar')->name('daftar');
    Route::view('/absen', 'absen')->name('absen');
    Route::view('/aktivitas', 'aktivitas')->name('aktivitas');
    Route::view('/chat', 'chat')->name('chat');
    Route::view('/tagihan', 'tagihan')->name('tagihan');
    Route::view('/perkembangan', 'perkembangan')->name('perkembangan');
    Route::view('/jadwal', 'jadwal')->name('jadwal');
    Route::view('/notifikasi', 'notifikasi')->name('notifikasi');
    
    // Anda bisa menambahkan route resource controller di sini jika diperlukan
    // Route::resource('profile', ProfileController::class);
});

// Route Admin (sementara untuk semua role, tanpa middleware khusus)
Route::prefix('admin')->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard');
    Route::view('/user', 'admin.user')->name('admin.user');
    Route::view('/anak', 'admin.anak')->name('admin.anak');
    Route::view('/tagihan', 'admin.tagihan')->name('admin.tagihan');
    Route::view('/aktivitas', 'admin.aktivitas')->name('admin.aktivitas');
    Route::view('/notifikasi', 'admin.notifikasi')->name('admin.notifikasi');
});