<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index']);
Route::post('/contact', [LandingController::class, 'contact'])->name('contact.submit')->middleware('throttle:5,1');
Route::get('/polityka-prywatnosci', [LandingController::class, 'privacy'])->name('privacy');

Route::middleware(['auth'])->group(function () {
    Route::get('/crm/leads/{lead}/download', [AdminController::class, 'downloadExcel'])
        ->name('admin.lead.download');
});
