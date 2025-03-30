<?php

namespace App\Http\Controllers;

use App\Enums\TicketStatus;
use App\Models\Ticket;
use Illuminate\Http\RedirectResponse;
use Tickety\Ticket\Actions\ChangeStatus;

class ClosedTicketController extends Controller
{
    public function __construct(protected ChangeStatus $changeStatus) {}

    public function __invoke(Ticket $ticket): RedirectResponse
    {
        $this->changeStatus->execute(
            $ticket,
            TicketStatus::CLOSED
        );

        return redirect()->route('dashboard')
            ->with('status', 'Ticket has been closed.');
    }
}
