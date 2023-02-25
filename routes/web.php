<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\SiswaController;

Route::get('/', [HomeController::class, 'index']);
Route::resource('officer', OfficerController::class);
Route::resource('siswa', SiswaController::class);