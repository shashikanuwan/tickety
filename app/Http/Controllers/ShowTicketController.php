<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ShowTicketController extends Controller
{
    public function __invoke(Request $request, Ticket $ticket): View
    {
        return view('ticket')
            ->with([
                'ticket' => $ticket->load('replies.user'),
            ]);
    }
}
