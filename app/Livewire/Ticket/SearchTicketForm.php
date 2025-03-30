<?php

namespace App\Livewire\Ticket;

use App\Models\Ticket;
use App\Queries\TicketQuery;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class SearchTicketForm extends Component
{
    public ?string $referenceNumber = null;

    public ?Ticket $searchedTicket = null;

    public function mount(?string $referenceNumber = null): void
    {
        $this->referenceNumber = $referenceNumber;

        if ($this->referenceNumber) {
            $this->searchTicket();
        }
    }

    public function updatedReferenceNumber(): void
    {
        if ($this->referenceNumber) {
            $this->searchTicket();
        } else {
            $this->searchedTicket = null;
        }
    }

    private function searchTicket(): void
    {
        $this->searchedTicket = TicketQuery::findByReferenceNumber($this->referenceNumber);
    }

    public function render(): View
    {
        return view('livewire.ticket.search-ticket-form', [
            'ticket' => $this->searchedTicket,
        ]);
    }
}
