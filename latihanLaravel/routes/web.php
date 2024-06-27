<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;

Route::get('/tabhome', [homecontroller::class, 'index']);

Route::get('/tabregister', [homecontroller::class, 'register']);

Route::post('/tabwelcome', [homecontroller::class, 'send']);
