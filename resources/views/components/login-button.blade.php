<a href="{{ route('login') }}"
   class="fixed bottom-4 right-4 bg-blue-600 text-white px-4 py-2 md:px-5 md:py-3 rounded-full shadow-lg
          hover:bg-blue-700 transition-all duration-300 flex items-center space-x-2 text-sm md:text-base"
>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
         class="w-5 h-5 md:w-6 md:h-6">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25"/>
    </svg>

    <span class="font-semibold hidden sm:block">{{ __('Login') }}</span>
</a>
