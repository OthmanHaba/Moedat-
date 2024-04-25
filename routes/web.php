<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::resource('drivers', \App\Http\Controllers\DriverController::class)->only(['index', 'create', 'show', 'store', 'destroy', 'edit']);
    Route::resource('machines', \App\Http\Controllers\MachineController::class)->only(['index', 'create', 'show', 'store', 'destroy', 'edit']);
    Route::resource('contracts', \App\Http\Controllers\ContractController::class)->only(['index', 'create', 'show', 'store', 'destroy', 'edit']);

});


