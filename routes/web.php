<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoomController;
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

Route::group([
    'middleware' => [
        'auth:sanctum',
        'verified'
    ],
], function () {
    Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');
    Route::resource('bookings', BookingController::class)->only('store');
    Route::get('profile/{booking}/generate-pdf', [ProfileController::class, 'generatePdf'])->name('profile.generatePdf');
});

//Home page
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('properties', PropertyController::class);
Route::get('logout', [ProfileController::class, 'logout'])->name('profile.logout');
Route::resource('rooms', RoomController::class);

//Reviews
Route::resource('reviews', ReviewController::class)->only('index');

//Contact - us form
Route::get('contact-us', [HomeController::class, 'contactUs'])->name('contact-us');

//Privacy policy view
Route::get('privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacyPolicy');
