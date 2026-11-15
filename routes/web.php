<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HireMeController;
use Illuminate\Support\Facades\Route;

// Frontend routes
Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::post('/hire-me', [HireMeController::class, 'store']);

Route::get('/view-cv', function () {
    // If file is stored in public/doc
    $file = public_path('doc/cv.pdf');

    // Or if it’s in storage:
    // $file = storage_path('app/public/doc/cv.pdf');

    if (file_exists($file)) {
        return response()->file($file, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="CNdrih_CV.pdf"'
        ]);
    } else {
        abort(404, 'File not found.');
    }
})->name('view.cv');

Route::get('/auth/linkedin', [FrontendController::class, 'redirectToLinkedin']);

Route::get('/auth/linkedin/callback', [FrontendController::class, 'handleLinkedinCallback']);