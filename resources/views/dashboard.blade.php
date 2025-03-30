<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <div class="text-center mt-2">
                    <x-flash-message/>
                </div>
                <livewire:ticket.show-tickets/>
            </div>
        </div>
    </div>
</x-app-layout>
