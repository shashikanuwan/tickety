<?php

namespace App\Models;

use Carbon\Carbon;
use Database\Factories\ReplyFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $message
 * @property int $ticket_id
 * @property int|null $user_id
 * @property mixed $ticket
 * @property Carbon $created_at
 */
class Reply extends Model
{
    /** @use HasFactory<ReplyFactory> */
    use HasFactory;

    public function ticket(): BelongsTo
    {
        return $this->BelongsTo(Ticket::class);
    }

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}
