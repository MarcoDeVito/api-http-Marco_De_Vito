<?php

use App\Http\Controllers\api\PrestoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/products',[PrestoController::class, "products" ] );