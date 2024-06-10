<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassengerController;

Route::post('/updatePassengerData', [PassengerController::class, 'updatePassengerData']);
Route::post('/cardregister', [CardRegisterController::class, 'store'])->name('card-register-post');
