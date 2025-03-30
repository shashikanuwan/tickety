<div class="mb-4">
    <x-label for="reference_number" value="{{ __('Ticket Reference Number') }}"/>
    <x-input type="text"
             wire:model.live="referenceNumber"
             id="reference_number"
             placeholder="Enter your reference number"
             class="w-full mt-2"
    />
    <x-input-error for="referenceNumber" class="mt-2"/>
</div>
