<?php

/**
 * Flowblade Component Preview Routes
 *
 * This file defines routes for previewing Flowblade components.
 * Include this file in your Laravel application's routes to enable component previews.
 *
 * Usage in routes/web.php:
 * require base_path('vendor/mellivora/flowblade/routes/preview.php');
 */

use Illuminate\Support\Facades\Route;
use Flowblade\Http\Controllers\PreviewController;

Route::middleware(['web'])->group(function () {
    // Component preview routes
    Route::get('/preview', [PreviewController::class, 'index'])->name('flowblade.preview.index');
    Route::get('/preview/components', [PreviewController::class, 'components'])->name('flowblade.preview.components');
    Route::get('/preview/component/{component}', [PreviewController::class, 'show'])->name('flowblade.preview.show');
    Route::get('/preview/search', [PreviewController::class, 'search'])->name('flowblade.preview.search');
    Route::get('/preview/category/{category}', [PreviewController::class, 'category'])->name('flowblade.preview.category');
});

