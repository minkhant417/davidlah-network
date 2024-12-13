<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/events', function () {
    return view('events');
})->name('events');
Route::get('/programs', function () {
    return view('programs');
})->name('programs');
Route::get('/career', function () {
    return view('career');
})->name('career');
Route::get('/proposals', function () {
    return view('proposals');
})->name('proposals');
Route::get('/appointments', function () {
    return view('appointments');
})->name('appointments');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
