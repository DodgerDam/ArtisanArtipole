<?php

use App\Http\Controllers\API\CommunesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExpositionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InspirationsController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\MentionsController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

// Route for Listing-artisan & Fiche-artisan
Route::get('/listing-artisan/{id}', [ListingController::class, 'show'])->name('listing-artisan');
Route::get('/artisansJson', [ListingController::class, 'json']);

// Route for Mentions-legales
Route::get('mentions-legales', [MentionsController::class, 'index'])->name('informations/mentions-legales');

// Route for Politique-confidentialie
Route::get('politique-confidentialite', [MentionsController::class, 'index'])->name('informations/politique-de-confidentialite');

// Route for Contact
Route::get('contact', [ContactController::class, 'index'])->name('informations/contact');

// Route for CommunesAPI
Route::apiResource('api/communes', CommunesController::class);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

