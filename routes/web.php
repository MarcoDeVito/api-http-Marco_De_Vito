<?php

use App\Http\Controllers\AnimeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', [AnimeController::class, "categorieslist"])->name('home');
Route::get('/category/{id}', [AnimeController::class, "category"])->name('category');
Route::get('/anime/{id}', [AnimeController::class, "details"])->name('details');
