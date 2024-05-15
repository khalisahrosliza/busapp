<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CardRegisterController;
use App\Http\Controllers\BusScheduleController;




Route::get('/', [DashboardController::class , 'index'] )->name('dashboard');

//Auth::routes();

//Route::get('/userdetails', [App\Http\Controllers\UserDetailController::class, 'index'])->name('userdetails');

Route::get('/userdetails', [UserDetailController::class , 'index'] )->name('user-details');

///Route::get('/cardregister', 'CardRegisterController@index')->name('cardregister');

Route::get('/cardregister', [CardRegisterController::class , 'index'] )->name('card-register');
Route::post('/cardregister', [CardRegisterController::class , 'store'] )->name('card-register');

Route::get('/busschedule', [BusScheduleController::class , 'index'] )->name('bus-schedule');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




