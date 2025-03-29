<?php

namespace App\Livewire\Ticket;

use App\Models\Ticket;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SearchTicketForm extends Component
{
    public ?Ticket $ticket;

    #[Validate]
    public ?string $referenceNumber;

    protected function rules(): array
    {
        return [
            'referenceNumber' => 'required|string|exists:tickets,reference_number',
        ];
    }

    public function mount($referenceNumber = null): void
    {
        $this->referenceNumber = $referenceNumber;

        if ($this->referenceNumber) {
            $this->searchTicket();
        }
    }

    public function searchTicket(): void
    {
        $this->ticket = Ticket::query()
            ->with('replies.user')
            ->where('reference_number', $this->referenceNumber)
            ->orderBy('created_at', 'desc')
            ->first();
    }

    public function render(): View
    {
        return view('livewire.ticket.search-ticket-form');
    }
}
