@if (session('status'))
    <div
        x-data="{ shown: true }"
        x-init="setTimeout(() => { shown = false }, 2000)"
        x-show="shown"
        x-transition:leave.opacity.duration.1500ms
        class="font-medium text-sm MB-2 text-green-600 dark:text-green-400">
        {{ session('status') }}
    </div>
@endif
