<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesContoller;
use App\Http\Controllers\FilmesContoller;


Route::get('', function () {return view('welcome');});
Route::get('/series', [SeriesContoller::class,'Index']);
Route::get('/tabela', [FilmesContoller::class,'Index']);