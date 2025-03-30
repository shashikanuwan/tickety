<?php

namespace App\Http\Controllers;

use App\Enums\TicketStatus;
use App\Http\Requests\CreateTicketRequest;
use Illuminate\Http\RedirectResponse;
use Tickety\Ticket\Actions\CreateTicket;

class CreateTicketController extends Controller
{
    public function __construct(protected CreateTicket $createTicket) {}

    public function __invoke(CreateTicketRequest $request): RedirectResponse
    {
        $ticket = $this->createTicket->execute(
            $request->validated('customer_name'),
            $request->validated('email'),
            $request->validated('phone_number'),
            $request->validated('description'),
            TicketStatus::PENDING
        );

        return back()
            ->with('reference_number', $ticket->reference_number);
    }
}
