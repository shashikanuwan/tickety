<?php

use App\Models\Reply;
use App\Models\Ticket;
use App\Models\User;
use Tickety\Reply\Actions\CreateReply;

it('can create a reply with user', function () {
    /** @var Ticket $ticket */
    $ticket = Ticket::factory()->create();

    $user = User::factory()->create();

    /** @var Reply $reply */
    $reply = resolve(CreateReply::class)
        ->execute(
            'This is reply message',
            $ticket,
            $user
        );

    expect($reply)
        ->toBeInstanceOf(Reply::class)
        ->and($reply->message)->toBe('This is reply message')
        ->and($reply->ticket_id)->toBe($ticket->id)
        ->and($reply->user_id)->toBe($user->id);
});

it('can create a reply without user', function () {
    /** @var Ticket $ticket */
    $ticket = Ticket::factory()->create();

    /** @var Reply $reply */
    $reply = resolve(CreateReply::class)
        ->execute(
            'This is reply message',
            $ticket
        );

    expect($reply)
        ->toBeInstanceOf(Reply::class)
        ->and($reply->message)->toBe('This is reply message')
        ->and($reply->ticket_id)->toBe($ticket->id);
});
