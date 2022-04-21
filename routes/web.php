<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoinsController;

use App\Http\Controllers\ArtistsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('coins', CoinsController::class);

Route::get('/artists/', [ArtistsController::class, 'index']);
Route::get('/artist/{slug}', [ArtistsController::class, 'show']);
