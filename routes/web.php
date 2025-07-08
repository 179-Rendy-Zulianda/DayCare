<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

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
    Route::get('/aktivitas', [App\Http\Controllers\ActivityController::class, 'index'])->name('aktivitas');
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
    Route::get('/anak', [App\Http\Controllers\ChildController::class, 'index'])->name('admin.anak');
    Route::view('/tagihan', 'admin.tagihan')->name('admin.tagihan');
    Route::view('/notifikasi', 'admin.notifikasi')->name('admin.notifikasi');
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('children', App\Http\Controllers\ChildController::class, [
        'as' => 'admin'
    ])->only(['create', 'store', 'edit', 'update', 'destroy']);
    Route::get('/user', [App\Http\Controllers\AdminUserController::class, 'index'])->name('admin.user');
    Route::get('/user/{id}/edit', [App\Http\Controllers\AdminUserController::class, 'edit'])->name('admin.user.edit');
    Route::put('/user/{id}', [App\Http\Controllers\AdminUserController::class, 'update'])->name('admin.user.update');
    Route::delete('/user/{id}', [App\Http\Controllers\AdminUserController::class, 'destroy'])->name('admin.user.destroy');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('aktivitas', App\Http\Controllers\AdminActivityController::class, [
        'as' => 'admin'
    ]);
});

Route::get('password/forgot', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
Route::get('password/reset-form', [ResetPasswordController::class, 'showResetFormNoToken'])->name('password.reset.form');

Route::post('/daftar', [App\Http\Controllers\ChildController::class, 'store'])->name('daftar');