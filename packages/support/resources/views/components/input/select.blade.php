@props([
    'error' => false,
    'prefix' => false,
    'suffix' => false,
])

<select
    {{ $attributes->class([
        'filament-select-input text-gray-900 block w-full transition duration-75 shadow-sm focus:border-primary-500 focus:ring-1 focus:ring-inset focus:ring-primary-500 disabled:opacity-70 dark:bg-gray-700 dark:text-white dark:focus:border-primary-500',
        'border-gray-300 dark:border-gray-600' => ! $error,
        'border-danger-600 ring-danger-600 dark:border-danger-400 dark:ring-danger-400' => $error,
        'rounded-l-lg' => ! $prefix,
        'rounded-r-lg' => ! $suffix,
    ]) }}
>
    {{ $slot }}
</select>
