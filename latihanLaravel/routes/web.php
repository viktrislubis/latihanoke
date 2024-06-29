<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\CastController;


Route::get('/tabhome', [homecontroller::class, 'index']);

Route::get('/tabregister', [homecontroller::class, 'register']);

Route::post('/tabwelcome', [homecontroller::class, 'send']);

//crud cast

//create
Route::resource('cast', CastController::class);
