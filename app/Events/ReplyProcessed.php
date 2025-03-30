<?php

namespace App\Events;

use App\Models\Reply;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ReplyProcessed
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(public Reply $reply) {}
}
