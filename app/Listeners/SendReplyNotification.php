<?php

namespace App\Listeners;

use App\Events\ReplyProcessed;
use App\Notifications\TicketReplied;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class SendReplyNotification implements ShouldQueue
{
    public function __construct() {}

    public function handle(ReplyProcessed $event): void
    {
        Notification::send($event->reply->ticket, new TicketReplied($event->reply));
    }
}
