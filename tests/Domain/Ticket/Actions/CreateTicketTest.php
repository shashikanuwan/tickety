<?php

use App\Enums\TicketStatus;
use App\Events\TicketProcessed;
use App\Models\Ticket;
use Illuminate\Support\Facades\Event;
use Tickety\Ticket\Actions\CreateTicket;

it('can create ticket', function () {
    Event::fake([
        TicketProcessed::class,
    ]);

    $ticket = resolve(CreateTicket::class)
        ->execute(
            'User one',
            'user_1@tickety.com',
            '0778899666',
            'This is ticket description',
            TicketStatus::PENDING
        );

    expect($ticket)
        ->toBeInstanceOf(Ticket::class)
        ->and($ticket->customer_name)->toBe('User one')
        ->and($ticket->email)->toBe('user_1@tickety.com')
        ->and($ticket->description)->toBe('This is ticket description')
        ->and($ticket->status)->toBe(TicketStatus::PENDING);
});
