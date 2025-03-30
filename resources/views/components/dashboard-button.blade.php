<a href="{{ route('dashboard') }}"
   class="fixed bottom-4 right-4 bg-blue-600 text-white px-4 py-2 md:px-5 md:py-3 rounded-full shadow-lg
          hover:bg-blue-700 transition-all duration-300 flex items-center space-x-2 text-sm md:text-base"
>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
         class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
    </svg>

    <span class="font-semibold hidden sm:block">{{ __('Dashboard') }}</span>
</a>
