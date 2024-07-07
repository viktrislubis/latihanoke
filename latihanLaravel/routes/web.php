<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
  return view('welcome');
});

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('cast', CastController::class);

Route::middleware('auth')->group(function () {
  Route::resource('genre', GenreController::class)->except(['show', 'index']);
  Route::resource('genre', GenreController::class)->only(['show', 'index']);
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
  Route::resource('film', FilmController::class)->except(['show', 'index']);
  Route::resource('film', FilmController::class)->only(['show', 'index']);
});

Route::post('film/{film_id}/reviews', [ReviewController::class, 'store'])->name('reviews.store');

require __DIR__ . '/auth.php';
