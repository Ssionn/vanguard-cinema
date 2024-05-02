<?php

use App\Http\Api\VidSrcApiController;
use App\Models\User;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function() {
    Route::get('/latest-users', function () {
        return User::latest()->limit(5)->get();
    });
})->middleware(Authenticate::using('sanctum'));

Route::prefix('v1')->group(function() {
    Route::get('/movies/new', [VidSrcApiController::class, 'fetchNewMoviesResponse']);

    Route::get('/series/new', [VidSrcApiController::class, 'fetchNewSeriesResponse']);
});
