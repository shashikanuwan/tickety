<x-guest-layout>
    <x-ticket.header/>

    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div>
                <x-ticket.support-form/>
            </div>
            <div>
                <livewire:ticket.search-ticket-form :referenceNumber="request('ref')"/>
            </div>
        </div>
    </div>

    @auth
        <x-dashboard-button/>
    @endauth

    @guest
        <x-login-button/>
    @endguest

    <x-ticket.footer/>
</x-guest-layout>
