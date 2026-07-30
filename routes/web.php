<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HseController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/services',[ServicesController::class, 'index'])->name('servies');
Route::get('/hse',[HseController::class, 'index'])->name('hse');
Route::get('/contact',[ContactController::class, 'index'])->name('contact');
Route::get('/about',[AboutController::class, 'index'])->name('about');
