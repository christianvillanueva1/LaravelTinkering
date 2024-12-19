<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('films', FilmController::class);

Route::resource('albums', AlbumController::class);
