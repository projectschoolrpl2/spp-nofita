<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SimulasiController;

// Route::get('login', [LoginController::class, 'index'])->name('login');

// Route::controller(LoginController::class)->group(function(){
//     Route::get('login', 'index')->name('login');
//     Route::post('login/proses', 'proses');
// });

Route::get('/', [HomeController::class, 'index'])->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->middleware('auth');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login/proses', [LoginController::class, 'proses'])->name('proses');
Route::post('logout', [LoginController::class, 'logout']);

Route::group(['middleware' => ['auth']], function(){
    Route::resource('pembayaran', PembayaranController::class);
    Route::get('/form', [PembayaranController::class, 'form']);
    Route::get('history', [HistoryController::class, 'index']);
    Route::group(['middleware' => ['cekUserLogin:1']], function(){
        Route::resource('officer', OfficerController::class);
        Route::resource('siswa', SiswaController::class);
        Route::resource('grade', GradeController::class);
        Route::resource('spp', SppController::class);
        // Route::resource('pembayaran', PembayaranController::class);
        // Route::get('/form', [PembayaranController::class, 'form']);
        // Route::get('history', [HistoryController::class, 'index']);
        Route::get('laporan', [LaporanController::class, 'index']);
        Route::get('data_karyawan', [SimulasiController::class, 'index']);
    });

    Route::group(['middleware' => ['cekUserLogin:2']], function(){
        // Route::resource('pembayaran', PembayaranController::class);
        // Route::get('/form', [PembayaranController::class, 'form']);
        // Route::get('history', [HistoryController::class, 'index']);
    });

    Route::group(['middleware' => ['cekUserLogin:3']], function(){
        // Route::get('history', [HistoryController::class, 'index']);
    });
});

// export import
Route::get('spp-export', [SppController::class, 'exportData'])->name('spp.export');
Route::post('spp-import', [SppController::class, 'importData'])->name('spp.import');

Route::get('officer-export', [OfficerController::class, 'exportData'])->name('officer.export');
Route::post('officer-import', [OfficerController::class, 'importData'])->name('officer.import');

Route::get('siswa-export', [SiswaController::class, 'export'])->name('siswa.export');

Route::get('grade-export', [GradeController::class, 'exportData'])->name('grade.export');
Route::post('grade-import', [GradeController::class, 'importData'])->name('grade.import');
