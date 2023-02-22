<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Landing (redirect -> home)
Route::redirect('/', 'home');

// Indexing routes
Route::get('home', [MovieController::class, "indexByGenre"])->name("home");
Route::get('home/movie', [MovieController::class, "index"])->name("home.movie");

// Controller routes
Route::resource('movie', MovieController::class);
