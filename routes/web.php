<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('movies', MovieController::class);
Route::resource('categories', CategoryController::class);
Route::get('movies/genre/{genre}', [MovieController::class, 'showByGenre'])->name('movies.showByGenre');
