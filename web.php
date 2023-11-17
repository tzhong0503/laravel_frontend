<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;


Route::post('/submit-payment', [PaymentController::class, 'submitPayment']);


Route::get('/', function () {
    return view('request');
});
