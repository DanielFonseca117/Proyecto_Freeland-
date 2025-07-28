@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge([
    'class' => "border-purple-300 dark:border-purple-600 dark:bg-gray-900 dark:text-white focus:border-purple-500 focus:ring-purple-500 rounded-lg shadow-sm px-4 py-2"
]) }}>
