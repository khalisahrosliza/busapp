<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CardRegisterController;
use App\Http\Controllers\BusScheduleController;




Route::get('/', [DashboardController::class , 'index'] )->name('dashboard');
Route::get('/userdetails', [UserDetailController::class , 'index'] )->name('user-details');
Route::get('/bus-schedule/{id}/image', [UserDetailControllerr::class, 'getImage'])->name('bus-schedule.image');
Route::get('/cardregister', [CardRegisterController::class , 'index'] )->name('card-register');
Route::post('/cardregister', [CardRegisterController::class , 'store'] )->name('card-register');
Route::get('/busschedule', [BusScheduleController::class , 'index'] )->name('bus-schedule');






