<?php

namespace Tickety\Reply\Actions;

use App\Models\Reply;
use App\Models\Ticket;
use App\Models\User;

class CreateReply
{
    public function execute(
        string $message,
        Ticket $ticket,
        ?User $user = null,
    ): Reply {
        $reply = new Reply;
        $reply->message = $message;
        $reply->ticket()->associate($ticket);
        $reply->user()->associate($user);
        $reply->save();

        return $reply;
    }
}
