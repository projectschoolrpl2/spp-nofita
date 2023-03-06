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

Route::get('/', [HomeController::class, 'index']);
Route::resource('officer', OfficerController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('grade', GradeController::class);
Route::resource('spp', SppController::class);
Route::resource('pembayaran', PembayaranController::class);
Route::get('/form', [PembayaranController::class, 'form']);

Route::get('history', [HistoryController::class, 'index']);
Route::get('laporan', [LaporanController::class, 'index']);

// export import
Route::get('spp-export', [SppController::class, 'exportData'])->name('spp.export');
Route::post('spp-import', [SppController::class, 'importData'])->name('spp.import');

Route::get('officer-export', [OfficerController::class, 'exportData'])->name('officer.export');

Route::get('/', [LoginController::class, 'index'])->middleware('auth');
Route::get('home', [LoginController::class, 'index'])->middleware('auth');

Route::controller(LoginController::class)->group(function(){
    // login
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'authenticate']);
    Route::post('logout', [LoginController::class, 'logout']);
});

Route::group(['middleware' => ['auth']], function(){
    // Route::get('home', [HomeController::class, 'index']);

    // route untuk admin
    Route::group(['prefix'=>'a', 'middleware'=>['isAdmin', 'auth']], function(){
        Route::get('/', [HomeController::class, 'index'])->name('a.home');
        Route::resource('officer', OfficerController::class);
        Route::resource('siswa', SiswaController::class);
        Route::resource('grade', GradeController::class);
        Route::resource('spp', SppController::class);
        Route::resource('pembayaran', PembayaranController::class);
        Route::get('history', [HistoryController::class, 'index']);
        Route::get('laporan', [LaporanController::class, 'index']);
    });    

    // route untuk petugas
    Route::group(['prefix' => 'p', 'middleware' => ['isPetugas', 'auth']], function(){
        Route::get('/', [HomeController::class, 'index'])->name('p.home');
        Route::resource('pembayaran', PembayaranController::class);
        Route::get('history', [HistoryController::class, 'index']);
    });

    // route untuk siswa
    Route::group(['prefix' => 's', 'middleware' => ['isSiswa', 'auth']], function(){
        Route::get('/', [HomeController::class, 'index'])->name('s.home');
        Route::resource('pembayaran', PembayaranController::class);
        Route::get('history', [HistoryController::class, 'index']);
    });

});









   
    