<div>
    <div class="max-w-lg p-6">
        <form>
            <div class="flex flex-wrap items-center justify-center gap-2">
                <div class="w-full sm:flex-1">
                    <x-input type="text"
                             wire:model.live="customerName"
                             id="customer_name"
                             class="w-full mt-2 sm:mt-0"
                             placeholder="Search by customer name"
                             required
                    />
                    <x-input-error for="customer_name" class="mt-2"/>
                </div>

                <div class="w-full sm:flex-1">
                    <select wire:model.live="ticketStatus"
                            id="ticket_status"
                            class="w-full mt-2 sm:mt-0 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                            required>
                        <option value="">{{__('Select Status')}}</option>
                        @foreach(App\Enums\TicketStatus::cases() as $ticketStatus)
                            <option value="{{$ticketStatus->value}}">{{$ticketStatus->label()}}</option>
                        @endforeach
                    </select>
                    <x-input-error for="status" class="mt-2"/>
                </div>
            </div>
        </form>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-b-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        {{__('Customer Name')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('Phone Number')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('Email')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('Status')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">{{__('View')}}</span>
                    </th>
                </tr>
            </thead>

            <tbody>
                @forelse($this->tickets as $ticket)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$ticket->customer_name}}
                        </th>

                        <td class="px-6 py-4">
                            {{$ticket->phone_number}}
                        </td>

                        <td class="px-6 py-4">
                            {{$ticket->email}}
                        </td>

                        <td class="px-6 py-4">
                            {!! $ticket->status->html() !!}
                        </td>

                        <td class="px-6 py-4 text-right">
                            <a href="{{route('tickets.show', $ticket)}}"
                               class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{('View')}}</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center">
                            <span class="text-gray-500 dark:text-gray-400">{{__('No tickets found')}}</span>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="mx-auto p-2">
            {{ $this->tickets->links() }}
        </div>
    </div>
</div>
