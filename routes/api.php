<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::prefix('selcom')->group(function () {
    Route::post('payment-callback','\App\Http\Integration\Selcom\WebHook@valuationPayment');
});