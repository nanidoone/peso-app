<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

// Home/Landing Page
Route::get('/', [LandingPageController::class, 'index'])->name('home');

// Register Page
Route::get('/register', function () {
    return view('register');
})->name('register');

// Login Page
Route::get('/login', function () {
    return view('login');
})->name('login');

// Login Submit - DIRECT TO DASHBOARD (no validation)
Route::post('/login', function () {
    return redirect()->route('dashboard');
})->name('login.submit');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');