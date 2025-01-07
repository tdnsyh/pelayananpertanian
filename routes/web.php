<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\AdminDashboardController;
use App\Http\Controllers\Dashboard\AdminKunjunganController;
use App\Http\Controllers\Dashboard\AdminPelayananController;
use App\Http\Controllers\Dashboard\AdminPengaduanController;
use App\Http\Controllers\Dashboard\AdminSkmController;
use App\Http\Controllers\Dashboard\AdminUnitKerjaController;
use App\Http\Controllers\User\FormKunjunganController;
use App\Http\Controllers\User\FormPengaduanController;
use App\Http\Controllers\User\UserHomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserHomeController::class, 'index']);

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
Route::get('kunjungan', [AdminKunjunganController::class, 'index']);
Route::resource('pengaduan', AdminPengaduanController::class);
Route::get('skm', [AdminSkmController::class, 'index']);
Route::resource('unitkerja', AdminUnitKerjaController::class);
Route::get('pelayanan', [AdminPelayananController::class, 'index']);



Route::get('form_kunjungan', [FormKunjunganController::class, 'create'])->name('kunjungan.create');
Route::post('form_kunjungan/store', [FormKunjunganController::class, 'store'])->name('kunjungan.store');
Route::get('/form-pengaduan', [FormPengaduanController::class, 'create'])->name('pengaduan.create');
Route::post('/form-pengaduan/kirim', [FormPengaduanController::class, 'store'])->name('pengaduan.store');
