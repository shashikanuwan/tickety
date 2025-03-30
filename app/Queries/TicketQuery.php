<?php

namespace App\Queries;

use App\Enums\TicketStatus;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class TicketQuery
{
    public static function getTickets(
        ?string $customerName = null,
        ?TicketStatus $ticketStatus = null,
        int $perPage = 10
    ): LengthAwarePaginator {
        return self::applyFilters(Ticket::query(), $customerName, $ticketStatus)
            ->latest('id')
            ->paginate($perPage);
    }

    public static function findByReferenceNumber(string $referenceNumber): ?Ticket
    {
        return Ticket::query()
            ->with('replies.user')
            ->where('reference_number', $referenceNumber)
            ->latest('created_at')
            ->first();
    }

    private static function applyFilters(
        Builder $query,
        ?string $customerName,
        ?TicketStatus $ticketStatus
    ): Builder {
        return $query
            ->when($customerName, fn ($q) => $q->where('customer_name', 'like', "%{$customerName}%"))
            ->when($ticketStatus, fn ($q) => $q->where('status', $ticketStatus));
    }
}
