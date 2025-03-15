<?php

use App\Http\Controllers\ClintHomeController;
use App\Http\Controllers\ClintMagorController;
use App\Http\Controllers\ClintDoctorsController;
use App\Http\Controllers\ClintBookingController;
use App\Http\Controllers\ClintLoginController;
use App\Http\Controllers\ClintRegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClintHomeController::class,"index"])->name("clint-home");
Route::get('/majors' , [ClintMagorController::class,"index"])->name("clint-majors");
Route::get('/doctors' , [ClintDoctorsController::class,"index"])->name("clint-doctors");
Route::get('/booking' , [ClintBookingController::class,"index"])->name("clint-booking");
Route::get('/login' , [ClintLoginController::class,"index"])->name("clint-login");
Route::get('/register' , [ClintRegisterController::class,"index"])->name("clint-register");