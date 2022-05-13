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

// USER DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'user'])->name('dashboard');

// ADMIN DASHBOARD
Route::get('/admin_dashboard', function () {
    return view('admin_dashboard');
})->middleware(['auth', 'admin'])->name('admin_dashboard');


require __DIR__.'/auth.php';

//actual routes added in Web Technologies II
Route::resource('coins', CoinsController::class)->middleware('auth');
Route::get('/artists/', [ArtistsController::class, 'index']);

//new item form and saving the item with "store"
Route::get('/artist/create', [ArtistsController::class, 'create']);
Route::post('/artist', [ArtistsController::class, 'store']);
Route::get('/artist/{slug}/edit', [ArtistsController::class, 'edit']);
Route::post('/artist/{slug}', [ArtistsController::class, 'update']);

Route::get('/artist/{slug}', [ArtistsController::class, 'show']);
