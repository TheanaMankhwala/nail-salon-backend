<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('welcome');
});
Route::apiResource('customers', CustomerController::class);
Route::apiResource('services', ServiceController::class);
Route::apiResource('bookings', BookingController::class);
Route::apiResource('payments', PaymentController::class);

