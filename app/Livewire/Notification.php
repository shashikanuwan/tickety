<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Notification extends Component
{
    public array $notifications = [];

    protected $listeners = ['displayNotification'];

    public function displayNotification($message): void
    {
        $id = uniqid();
        $this->notifications[] = ['id' => $id, 'message' => $message];

        $this->dispatch('removeNotification', $id);
    }

    public function removeNotification($id): void
    {
        $this->notifications = array_filter($this->notifications, fn ($notification) => $notification['id'] !== $id);
    }

    public function render(): View
    {
        return view('livewire.notification');
    }
}
