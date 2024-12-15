<?php

use App\Http\Controllers\api\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::group(['namespace'=> 'App\Http\Controllers\api'], function () {
    Route::apiResource('order', OrderController::class);
});