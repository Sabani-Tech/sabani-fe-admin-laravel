<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.index');
    })->name('admin.dashboard');
});
