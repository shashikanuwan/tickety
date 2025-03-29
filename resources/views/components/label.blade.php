@props(['value', 'required' => true])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}

    @if ($required)
        <sup class="text-red-600 dark:text-red-400 font-medium">*</sup>
    @endif
</label>
