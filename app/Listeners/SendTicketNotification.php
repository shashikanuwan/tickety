<?php

namespace App\Listeners;

use App\Events\TicketProcessed;
use App\Notifications\TicketCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class SendTicketNotification implements ShouldQueue
{
    public function __construct() {}

    public function handle(TicketProcessed $event): void
    {
        Notification::send($event->ticket, new TicketCreated($event->ticket));
    }
}
