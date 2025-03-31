<div class="fixed top-5 right-5 z-50 space-y-2 max-w-sm" x-data="{ notifications: [] }"
     @remove-notification.window="notifications = notifications.filter(n => n.id !== $event.detail.id)">
    @foreach ($notifications as $notification)
        <div
            x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 4000)"
            x-show="show"
            x-transition:enter="transition transform ease-out duration-300"
            x-transition:enter-start="translate-y-5 opacity-0"
            x-transition:enter-end="translate-y-0 opacity-100"
            x-transition:leave="transition transform ease-in duration-300"
            x-transition:leave-start="translate-y-0 opacity-100"
            x-transition:leave-end="translate-y-5 opacity-0"
            class="bg-blue-600 text-white p-4 rounded-lg shadow-lg flex items-center space-x-4">

            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 8v4m0 4h.01M4.93 4.93l7.07-7.07 7.07 7.07-7.07 7.07-7.07-7.07z"/>
            </svg>

            <span>{{ $notification['message'] }}</span>

            <button @click="$wire.removeNotification('{{ $notification['id'] }}')" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    @endforeach
</div>
