<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\Controllers;

// Client Routes
Route::name('client.')->group(function () {
    Route::get('/', [Controllers::HOME, 'index'])->name('home');
    // Add more client routes here
});
