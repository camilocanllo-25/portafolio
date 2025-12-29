<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Main portfolio routes
Route::get('/', function () {
    return view('portfolio.home');
})->name('portfolio.index');

// Test route
Route::get('/test', function() {
    return view('portfolio.test', ['locale' => 'es']);
});

Route::get('/{locale}', [PortfolioController::class, 'index'])
    ->where('locale', 'es|en|ru')
    ->name('portfolio.index.lang');

// Resume routes
Route::get('/resume', [PortfolioController::class, 'resume'])->name('portfolio.resume');
Route::get('/{locale}/resume', [PortfolioController::class, 'resume'])
    ->where('locale', 'es|en|ru')
    ->name('portfolio.resume.lang');

// Contact form
Route::post('/contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');

// Language switching
Route::get('/lang/{locale}', [PortfolioController::class, 'switchLanguage'])
    ->where('locale', 'es|en|ru')
    ->name('portfolio.lang');

// API endpoints
Route::prefix('api')->group(function () {
    Route::get('/portfolio/{locale?}', [PortfolioController::class, 'apiData'])
        ->where('locale', 'es|en|ru')
        ->name('api.portfolio');
});
