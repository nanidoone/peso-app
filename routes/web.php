<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

// Home/Landing Page
Route::get('/', [LandingPageController::class, 'index']);

// Register Page (UI only - no backend yet)
Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
})->name('login');