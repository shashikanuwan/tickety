<div class="bg-white dark:bg-gray-800 p-6 shadow-lg rounded-lg">
    <h2 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">🔹Check Ticket Status</h2>
    <p class="text-sm mb-6">
        Already submitted a request? Enter your reference number to check the status of your ticket.
    </p>

    <form action="" method="GET">
        <div class="mb-4">
            <x-label for="email" value="{{__('Ticket Reference Number')}}"/>
            <x-input type="text"
                     name="reference_number"
                     id="reference_number"
                     class="w-full mt-2"
                     required/>
        </div>

        <x-button class="w-full justify-center">
            {{__('Check Status')}}
        </x-button>
    </form>
</div>
