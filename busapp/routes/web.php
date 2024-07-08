<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CardRegisterController;
use App\Http\Controllers\BusScheduleController;
use App\Http\Controllers\BusAController;

Route::get('/bus_a', [BusAController::class, 'index'])->name('bus_a');
Route::get('/passengerData', [PassengerController::class, 'index']);

Route::get('/', [DashboardController::class , 'index'] )->name('dashboard');

// Route::get('/busdetails', [DashboardController::class, 'showBusDetails']);
//Auth::routes();

//Route::get('/userdetails', [App\Http\Controllers\UserDetailController::class, 'index'])->name('userdetails');
//ni baru tambah utk card registeration
Route::get('/read-card-id', [App\Http\Controllers\CardRegisterController::class, 'readCardId']);

Route::get('/userdetails', [UserDetailController::class , 'index'] )->name('user-details');
Route::get('/cardregister', [CardRegisterController::class , 'index'] )->name('cardregister.index');
Route::post('/cardregister', [CardRegisterController::class , 'store'] )->name('cardregister.store');
Route::get('/busschedule', [BusScheduleController::class , 'index'] )->name('busschedule');






