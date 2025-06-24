<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\moviecreateController;
use App\Http\Controllers\movieController;



Route::get('/', [movieController::class, 'index'])->name('movie.index');

//movie create
Route::get('movie/create', [moviecreateController::class, 'index'])->name('movie.create');
Route::post('movie/store', [moviecreateController::class, 'store'])->name('movie.store');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
