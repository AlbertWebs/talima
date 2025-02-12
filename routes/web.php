<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/terms-and-conditions', [App\Http\Controllers\HomeController::class, 'index'])->name('terms-and-conditions');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'index'])->name('privacy-policy');
Route::get('/photo-credits', [App\Http\Controllers\HomeController::class, 'index'])->name('photo-credits');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'index'])->name('contact-us');

Auth::routes();


