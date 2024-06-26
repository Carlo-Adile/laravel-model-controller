<?php

namespace App\Http\Controllers\Guests;

/* use App\Http\Controllers\Controller; */
use App\Http\Controllers\Guests\PageController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index']);

Route::get('/guests/movie/{id}', [PageController::class, 'movie'])->name('guests.movie');

Route::get('/guests/hat', [PageController::class, 'hat'])->name('guests.hat');

