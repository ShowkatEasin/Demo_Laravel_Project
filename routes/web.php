<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',[myController::class, 'AboutPage']);
Route::get('/calc',[myController::class, 'calc']);