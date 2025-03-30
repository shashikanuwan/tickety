<?php

namespace App\Livewire\Ticket;

use App\Enums\TicketStatus;
use App\Models\Ticket;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class ShowTickets extends Component
{
    use WithPagination;

    public ?string $customerName = '';

    public ?TicketStatus $ticketStatus = null;

    #[Computed]
    public function tickets(): LengthAwarePaginator
    {
        return Ticket::query()
            ->when($this->customerName, fn ($query) => $query->where('customer_name', 'like', "%{$this->customerName}%"))
            ->when($this->ticketStatus, fn ($query) => $query->where('status', $this->ticketStatus))
            ->orderBy('id', 'desc')
            ->paginate(10);
    }

    public function render(): View
    {
        return view('livewire.ticket.show-tickets');
    }
}
