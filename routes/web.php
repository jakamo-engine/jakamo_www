<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index']);
Route::post('/contact', [LandingController::class, 'contact'])->name('contact.submit');
Route::get('/polityka-prywatnosci', [LandingController::class, 'privacy'])->name('privacy');
