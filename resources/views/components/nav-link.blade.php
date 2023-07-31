@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-yellow-400 dark:border-yellow-600 text-sm font-medium leading-5 text-black-900 dark:text-black-100 focus:outline-none focus:border-yellow-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-yellow-300 dark:hover:border-yellow-700 focus:outline-none focus:text-yellow-700 dark:focus:text-yellow-300 focus:border-yellow-300 dark:focus:border-yellow-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
