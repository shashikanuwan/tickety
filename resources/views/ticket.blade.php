<x-app-layout>
    <div class="container mx-auto mt-6 bg-white dark:bg-gray-800 shadow-xl rounded-lg p-6 overflow-y-auto max-h-[60vh]">
        <div class="flex-grow">
            <x-ticket.ticket-card :$ticket/>
            <x-ticket.reply-card :$ticket/>
        </div>
    </div>
    <div class="container mx-auto mt-4">
        <x-ticket.reply-form :$ticket/>
    </div>
</x-app-layout>
