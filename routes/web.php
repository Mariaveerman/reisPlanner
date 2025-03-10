<?php

use App\Http\Controllers\ControllerRice;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'login']);

Route::post('/test', [LoginController::class, 'authenticate']);

Route::get('/rice', [ControllerRice::class, 'viewRice']);