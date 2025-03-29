<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Ticket\CreateTicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)
    ->name('welcome');

Route::post('tickets', CreateTicketController::class)
    ->name('tickets.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
