@if (session('reference_number'))
<div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 relative">
    <p class="font-semibold">
        Your support ticket has been created successfully! 🎉
    </p>
    <p class="mt-2">
        We've sent your reference number to your registered email address.
    </p>

    <div class="mt-3 grid grid-cols-1 md:grid-cols-2 items-center gap-2">
        <div class="flex justify-start items-center">
            <span>Reference Number:</span>

            <button onclick="copyToClipboard('{{ session('reference_number') }}')"
                    class="text-green-600 hover:text-green-800 transition-colors"
                    title="Copy to clipboard">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15.666 3.888A2.25 2.25 0 0 0 13.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 0 1-.75.75H9a.75.75 0 0 1-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 0 1 1.927-.184"/>
                </svg>
            </button>

            <div id="copyToast"
                 class=" text-green-900 px-2 py-1 rounded-lg shadow-lg transition-opacity duration-300 opacity-0 pointer-events-none text-sm whitespace-nowrap md:bottom-[-3rem] md:px-4 md:py-2">
                Copied!
            </div>
        </div>

        <div class="flex item-start">
            <span class="font-bold">
                {{ session('reference_number') }}
            </span>
        </div>
    </div>

    <p class="mt-2 font-bold text-orange-500">Please keep this number safe to track your ticket status.</p>
</div>
@endif

<script>
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(() => {
            const toast = document.getElementById('copyToast');
            toast.classList.remove('opacity-0', 'pointer-events-none');
            toast.classList.add('opacity-100');

            setTimeout(() => {
                toast.classList.remove('opacity-100');
                toast.classList.add('opacity-0', 'pointer-events-none');
            }, 2000);
        }).catch(error => {
            console.error('Failed to copy text: ', error);
        });
    }
</script>
