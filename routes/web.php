<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\CompanyProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes - Industry Dashboard Portal
|--------------------------------------------------------------------------
*/

// Autentikasi Mitra Industri
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute Terproteksi Khusus Mitra Industri (Guard: industry)
Route::middleware(['auth:industry'])->prefix('industry')->name('industry.')->group(function () {
    
    // 1. Dashboard Utama
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // 2. Menu Pekerjaan / Mencari Talent
    Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
    Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
    Route::delete('/jobs/{id}', [JobController::class, 'destroy'])->name('jobs.destroy');

    // 3. Review & Detail Pelamar HireLink
    Route::get('/applicants', [ApplicantController::class, 'index'])->name('applicants.index');
    Route::get('/applicants/{id}', [ApplicantController::class, 'show'])->name('applicants.show');
    Route::post('/applicants/{id}/status', [ApplicantController::class, 'updateStatus'])->name('applicants.updateStatus');

    // 4. Menu Company Profile
    Route::get('/company-profile', [CompanyProfileController::class, 'index'])->name('profile.index');
    Route::post('/company-profile', [CompanyProfileController::class, 'update'])->name('profile.update');
});

// =========================================================================
// ALIAS ROUTE (Mencegah Route [dashboard] not defined)
// =========================================================================
Route::middleware(['auth:industry'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/pekerjaan', [JobController::class, 'index'])->name('jobs.index');
    Route::get('/company-profile', [CompanyProfileController::class, 'index'])->name('profile.index');
});