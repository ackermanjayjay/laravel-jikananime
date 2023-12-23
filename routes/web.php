<?php

use App\Http\Controllers\AnimeController;
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
Route::get("/", [AnimeController::class,"index"]);
Route::get("/show/{id}", [AnimeController::class,"show"]);
/*
Route::get('/', function () {
    return view('welcome');
});
*/
