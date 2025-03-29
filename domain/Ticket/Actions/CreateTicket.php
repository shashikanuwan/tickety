<?php

namespace Tickety\Ticket\Actions;

use App\Enums\TicketStatus;
use App\Models\Ticket;

class CreateTicket
{
    public function execute(
        string $customerName,
        string $email,
        string $phoneNumber,
        string $description,
        TicketStatus $status,
    ): Ticket {
        $ticket = new Ticket;
        $ticket->customer_name = $customerName;
        $ticket->email = $email;
        $ticket->phone_number = $phoneNumber;
        $ticket->description = $description;
        $ticket->status = $status;
        $ticket->save();

        return $ticket;
    }
}
