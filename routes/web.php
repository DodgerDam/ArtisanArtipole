<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InspirationsController;
use App\Http\Controllers\ExpositionController;
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

// Route for Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route for Inspirations
Route::get('/inspirations', [InspirationsController::class, 'index'])->name('inspirations');

// Route for Exposition
Route::get('/exposition', [ExpositionController::class, 'index'])->name('exposition');

// Route for Listing-artisan
Route::get('/listing-artisan/{id}', [ListingController::class, 'show'])->name('listing-artisan');
Route::get('/artisansJson', [ListingController::class, 'json']);


Route::get('/communes', [ListingController::class, 'communes'])->name('communes');
