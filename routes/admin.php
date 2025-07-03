<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Controllers;

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [Controllers::DASHBOARD, 'index'])->name('dashboard');
    // Add more admin routes here
});
