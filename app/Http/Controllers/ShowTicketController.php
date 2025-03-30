<?php

namespace App\Http\Controllers;

use App\Enums\TicketStatus;
use App\Models\Ticket;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Tickety\Ticket\Actions\ChangeStatus;

class ShowTicketController extends Controller
{
    public function __construct(protected ChangeStatus $changeStatus) {}

    public function __invoke(Request $request, Ticket $ticket): View
    {
        $this->changeStatus->execute(
            $ticket,
            TicketStatus::OPENED,
        );

        return view('ticket')
            ->with([
                'ticket' => $ticket->load('replies.user'),
            ]);
    }
}
