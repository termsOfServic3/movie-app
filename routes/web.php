<?php


use App\Http\Controllers\ActorsController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TvController;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;


Route::get('/', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movies.show');

Route::get('/tv', [TvController::class, 'index'])->name('tv.index');
Route::get('/tv/{tv}', [TvController::class, 'show'])->name('tv.show');


Route::get('/actors', [ActorsController::class, 'index'])->name('actors.index');
Route::get('/actors/page/{page}', [ActorsController::class, 'index']);
Route::get('/actors/{actor}', [ActorsController::class, 'show'])->name('actors.show');



