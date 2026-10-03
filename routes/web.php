<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookController1;

Route::get('/books', [BookController::class, 'index']);

Route::resource('books', BookController1::class);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard'); // pengaplikasian :: yang diturunkan dari bahasa c
});

require __DIR__.'/settings.php';
