<div class="bg-gray-100 dark:bg-gray-900 p-4 rounded-lg shadow-md">
    <form action="{{route('tickets.reply.store', $ticket)}}" class="flex flex-col space-y-3" method="POST">
        @csrf

        <textarea
            name="message"
            id="message"
            rows="3"
            placeholder="Write your reply here..."
            class="mt-2 w-full px-4 py-2 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
        >{{ old('message') }}</textarea>

        <x-input-error for="message" class="mt-2"/>

        <div class="flex justify-between space-x-2">
            <div>
                <x-danger-button
                    formaction="{{route('tickets.close', $ticket)}}"
                    formmethod="POST"
                    name="_method"
                    value="PATCH"
                    type="submit"
                >
                    {{__('Mark as closed')}}
                </x-danger-button>
            </div>

            <div>
                <x-button type="submit" class="w-full justify-center">
                    {{__('Reply')}}
                </x-button>

                <x-flash-message/>
            </div>
        </div>
    </form>
</div>
