<div class="bg-white dark:bg-gray-800 p-6 shadow-lg rounded-lg">
    <h2 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">
        🔹Check Ticket Status
    </h2>

    <p class="text-sm mb-6">
        Already submitted a request? Enter your reference number to check the status of your ticket.
    </p>

    <x-ticket.search-form/>

    @if ($ticket)
        <div class="mt-6 max-h-[365px] overflow-y-auto">
            <x-ticket.ticket-card :$ticket/>
            <x-ticket.reply-card :$ticket/>
        </div>
    @elseif(empty($ticket) && $referenceNumber != '')
        <div class="mt-4 p-4 text-center text-gray-500 dark:text-gray-400 italic">
            Please enter a valid number ☹️
        </div>
    @endif
</div>
