<div class="bg-white dark:bg-gray-800 p-6 shadow-lg rounded-lg">
    <h2 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">🔹 Open a Support Ticket</h2>
    <p class="text-sm mb-6">
        Facing an issue? Fill out the form to create a support ticket.
        You'll receive a unique reference number to track your request.
    </p>

    <form action="" method="POST">
        @csrf
        <div class="mb-4">
            <x-label for="email" value="{{__('Customer Name')}}"/>
            <x-input type="text"
                     name="customer_name"
                     id="customer_name"
                     class="w-full mt-2"
                     required/>
        </div>

        <div class="mb-4">
            <x-label for="email" value="{{__('Problem Description')}}"/>
            <textarea name="description"
                      id="description"
                      rows="4"
                      class="w-full mt-2 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                      required>

            </textarea>
        </div>

        <div class="mb-4">
            <x-label for="email" value="{{__('Email')}}"/>
            <x-input type="email"
                   name="email"
                   id="email"
                   class="w-full mt-2"
                   required />
        </div>

        <div class="mb-4">
            <x-label for="email" value="{{__('Phone Number')}}"/>
            <x-input type="tel"
                   name="phone_number"
                   id="phone_number"
                   class="w-full mt-2"
                   required />
        </div>

        <x-button class="w-full justify-center">
            {{__('Submit Ticket')}}
        </x-button>
    </form>
</div>
