<?php

use App\Http\Controllers\ClosedTicketController;
use App\Http\Controllers\CreateReplyController;
use App\Http\Controllers\CreateTicketController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ShowTicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)
    ->name('welcome');

Route::post('tickets', CreateTicketController::class)
    ->name('tickets.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])
    ->group(function () {
        Route::get('dashboard', DashboardController::class)
            ->name('dashboard');

        Route::get('tickets/{ticket}/show', ShowTicketController::class)
            ->name('tickets.show');

        Route::patch('tickets/{ticket}', ClosedTicketController::class)
            ->name('tickets.close');

        Route::post('tickets/{ticket}/reply', CreateReplyController::class)
            ->name('tickets.reply.store');
    });
