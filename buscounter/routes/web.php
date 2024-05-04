<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CardRegisterController;
use App\Http\Controllers\BusScheduleController;




Route::get('/', [DashboardController::class , 'index'] );

//Auth::routes();

//Route::get('/userdetails', [App\Http\Controllers\UserDetailController::class, 'index'])->name('userdetails');

Route::get('/userdetails', [UserDetailController::class , 'userdetails'] );

///Route::get('/cardregister', 'CardRegisterController@index')->name('cardregister');

Route::get('/cardregister', [CardRegisterController::class , 'cardregister'] );

Route::get('/busschedule', [BusScheduleController::class , 'busschedule'] );

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




