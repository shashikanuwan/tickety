<?php

namespace App\Models;

use Database\Factories\ReplyFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $message
 * @property int $ticket_id
 * @property int|null $user_id
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
