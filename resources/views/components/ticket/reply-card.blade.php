<div class="mt-6 p-4 bg-white dark:bg-gray-900 rounded-lg shadow-md">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
        📩 Ticket Replies
    </h3>

    <div class="mt-4 space-y-4">
        @forelse ($ticket->replies as $reply)
            <div class="p-4 rounded-md border bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <p class="text-sm text-gray-900 dark:text-white font-semibold">
                    {{ $reply->user->name ?? 'Support Team' }}
                    <span class="text-xs text-gray-500 dark:text-gray-400">
                        - {{ $reply->created_at->diffForHumans() }}
                    </span>
                </p>
                <p class="mt-2 text-gray-700 dark:text-gray-300">
                    {{ $reply->message }}
                </p>
            </div>
        @empty
            <div class="mt-4 p-4 text-center text-gray-500 dark:text-gray-400 italic">
                No replies yet ☹️
            </div>
        @endforelse
    </div>
</div>
