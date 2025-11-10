<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\HasilStudiController;
use App\Http\Controllers\KrsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/pengumuman', function () {
    return view('pages.pengumuman');
});


Route::get('/dashboard', function () {
    // Contoh data dinamis untuk chart IPS
    $labels = ['Semester 1', 'Semester 2', 'Semester 3'];
    $ips    = [4.0, 4.0, 0.0];

    // Pastikan nama view sesuai path sebenarnya (folder 'Dashboard')
    return view('Dashboard.dashboard_mahasiswa', compact('labels', 'ips'));
});
Route::get('/krs', [KrsController::class, 'index']);
Route::get('/hasil', [HasilStudiController::class, 'index']);

// Route::middleware(['auth', 'verified'])->group(function () {
//     // ... route lainnya

//     // Route untuk Dashboard Dosen
//     Route::get('/dosen/dashboard', [DosenController::class, 'dashboard'])->name('dosen.dashboard');
// });
Route::get('/dosen/dashboard', [DosenController::class, 'dashboard'])->name('dosen.dashboard');

Route::get('/dosen/dashboard', function () {
    return view('Dashboard.dashboard_dosen');
});