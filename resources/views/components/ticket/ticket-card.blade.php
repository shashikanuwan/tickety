<div class="mt-6 p-4 bg-gray-100 dark:bg-gray-900 rounded-lg shadow-md">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">🎟 Ticket Details</h3>
    <div class="mt-4 space-y-2 text-gray-700 dark:text-gray-300">
        <p><strong>Reference No:</strong> {{ $ticket->reference_number }}</p>
        <p><strong>Customer Name:</strong> {{ $ticket->customer_name }}</p>
        <p><strong>Email:</strong> {{ $ticket->email }}</p>
        <p><strong>Phone:</strong> {{ $ticket->phone_number }}</p>
        <p><strong>Status:</strong> {!! $ticket->status->html() !!}</p>
        <p class="mt-2"><strong>Description:</strong> {{ $ticket->description }}</p>
    </div>
</div>
