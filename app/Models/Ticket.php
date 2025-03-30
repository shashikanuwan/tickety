<?php

namespace App\Models;

use App\Enums\TicketStatus;
use Carbon\Carbon;
use Database\Factories\TicketFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

/**
 * @property int $id
 * @property string $customer_name
 * @property string $email
 * @property string $phone_number
 * @property string $description
 * @property TicketStatus $status
 * @property string $reference_number
 * @property Carbon $created_at
 */
class Ticket extends Model
{
    /** @use HasFactory<TicketFactory> */
    use HasFactory;

    use Notifiable;

    protected $fillable = [
        'status',
    ];

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

    public function replies(): HasMany
    {
        return $this->hasMany(Reply::class);
    }

    public function isClosed(): bool
    {
        return $this->status === TicketStatus::CLOSED;
    }

    public function isOpened(): bool
    {
        return $this->status === TicketStatus::OPENED;
    }

    public function isPending(): bool
    {
        return $this->status === TicketStatus::PENDING;
    }
}
