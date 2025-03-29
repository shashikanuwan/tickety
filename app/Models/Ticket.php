<?php

namespace App\Models;

use App\Enums\TicketStatus;
use Database\Factories\TicketFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Str;

class Ticket extends Model
{
    /** @use HasFactory<TicketFactory> */
    use HasFactory;

    protected function casts(): array
    {
        return [
            'status' => TicketStatus::class,
        ];
    }

    protected static function boot(): void
    {
        parent::boot();

        static::creating(fn ($ticket) => $ticket->reference_number ??= $ticket->generateReferenceNumber());
    }

    protected function generateReferenceNumber(): string
    {
        return 'TICKET-'.now()->format('Ymd').'-'.Str::uuid();
    }

    public function reply(): HasOne
    {
        return $this->hasOne(Reply::class);
    }
}
