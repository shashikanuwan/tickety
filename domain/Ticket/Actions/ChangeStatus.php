<?php

namespace Tickety\Ticket\Actions;

use App\Enums\TicketStatus;
use App\Models\Ticket;

class ChangeStatus
{
    public function execute(
        Ticket $ticket,
        TicketStatus $status
    ): void {
        if ($ticket->isPending()) {
            $ticket->update(['status' => $status]);
        }

        if ($ticket->isOpened()) {
            $ticket->update(['status' => $status]);
        }
    }
}
