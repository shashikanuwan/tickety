<?php

namespace App\Livewire\Ticket;

use App\Enums\TicketStatus;
use App\Queries\TicketQuery;
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

    public function getListeners(): array
    {
        return [
            'echo-private:tickets,TicketProcessed' => 'notifyNewTicketCreated',
        ];
    }

    #[Computed]
    public function tickets(): LengthAwarePaginator
    {
        return TicketQuery::getTickets($this->customerName, $this->ticketStatus);
    }

    public function notifyNewTicketCreated($eventData): void
    {
        $this->dispatch('displayNotification', 'New ticket created for '.$eventData['customer_name']);
    }

    public function updated($propertyName): void
    {
        if (in_array($propertyName, ['customerName', 'ticketStatus'])) {
            $this->resetPage();
        }
    }

    public function render(): View
    {
        return view('livewire.ticket.show-tickets');
    }
}
