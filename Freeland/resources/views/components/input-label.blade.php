@props(['value'])

<label {{ $attributes->merge(['class' => "block font-semibold text-sm text-purple-700 dark:text-purple-300 mb-1"]) }}>
    {{ $value ?? $slot }}
</label>

