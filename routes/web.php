<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.index');
    })->name('admin.dashboard');
    Route::get('login', function () {
        return view('admin.auth.login');
    })->name('admin.login');
});
