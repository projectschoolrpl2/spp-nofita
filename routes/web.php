<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\SppController;

Route::get('/', [HomeController::class, 'index']);
Route::resource('officer', OfficerController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('grade', GradeController::class);
Route::resource('spp', SppController::class);