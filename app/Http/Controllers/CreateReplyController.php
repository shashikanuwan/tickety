<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReplyRequest;
use App\Models\Ticket;
use Illuminate\Http\RedirectResponse;
use Tickety\Reply\Actions\CreateReply;

class CreateReplyController extends Controller
{
    public function __construct(protected CreateReply $createReply) {}

    public function __invoke(CreateReplyRequest $request, Ticket $ticket): RedirectResponse
    {
        $this->createReply->execute(
            $request->validated('message'),
            $ticket,
            $request->user(),
        );

        return back()
            ->with('status', 'Reply saved.');
    }
}
