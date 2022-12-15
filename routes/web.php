<?php

use App\Http\Controllers\API\CommunesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EditionController;
use App\Http\Controllers\ExpositionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InspirationsController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\MentionsController;
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


Route::get('/admin', [EditionController::class, 'index'])->name('admin');
//Edition
Route::post('/admin/update', [EditionController::class, 'update'])->name('admin.update');
Route::post('/admin/remove', [EditionController::class, 'remove'])->name('admin.remove');
Route::get('/admin/show', [EditionController::class, 'show'])->name('admin.show');
//Users
Route::get('/admin/users', [EditionController::class, 'usersShow'])->name('admin.users.show');


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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
]);
