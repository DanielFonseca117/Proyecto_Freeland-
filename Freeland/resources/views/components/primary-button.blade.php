<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'inline-flex items-center px-4 py-2 bg-purple-700 dark:bg-purple-500 border border-transparent rounded-lg font-semibold text-sm text-white hover:bg-purple-800 focus:bg-purple-800 active:bg-purple-900 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150'
]) }}>
    {{ $slot }}
</button>
