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
        $ticket->update([
            'status' => $status,
        ]);
    }
}
