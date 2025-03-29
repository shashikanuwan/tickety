<form wire:submit.prevent="searchTicket">
    <div class="mb-4">
        <x-label for="reference_number" value="{{ __('Ticket Reference Number') }}"/>
        <x-input type="text"
                 wire:model.live="referenceNumber"
                 id="reference_number"
                 class="w-full mt-2"
                 required
        />
        <x-input-error for="referenceNumber" class="mt-2"/>
    </div>

    <x-button class="w-full justify-center">
        {{ __('Check Status') }}
    </x-button>
</form>
