<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HireMeController;
use Illuminate\Support\Facades\Route;

// The portfolio remains publicly accessible.
Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::post('/hire-me', [HireMeController::class, 'store'])->name('hire-me.store');

// Only the CV endpoint requires LinkedIn authentication.
Route::get('/view-cv', [FrontendController::class, 'downloadCv'])->name('view.cv');

Route::get('/auth/linkedin', [FrontendController::class, 'redirectToLinkedin'])
    ->name('linkedin.redirect');

Route::get('/auth/linkedin/callback', [FrontendController::class, 'handleLinkedinCallback'])
    ->name('linkedin.callback');
