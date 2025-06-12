@props([
    'variant' => 'primary',
    'loading' => false,
    'disabled' => false,
])

@php
    $baseClasses = 'btn inline-flex items-center justify-center transition-colors duration-200';

    $variants = [
        'primary' => 'bg-gray-900 text-white hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-900 dark:hover:bg-white',
        'secondary' => 'bg-white border border-gray-200 text-gray-800 hover:bg-gray-100 dark:bg-gray-800 dark:text-gray-100 dark:border-gray-700 dark:hover:bg-gray-700',
        'tertiary' => 'bg-white border border-gray-200 text-gray-800 hover:bg-gray-50 hover:text-gray-900 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:text-white',
        'danger' => 'bg-red-600 text-white hover:bg-red-700 dark:bg-red-500 dark:hover:bg-red-600',
        'danger-outline' => 'bg-white border border-gray-200 text-red-600 hover:bg-red-50 dark:bg-gray-900 dark:border-red-400 dark:text-red-400 dark:hover:bg-red-950',
        'success' => 'bg-green-500 text-white hover:bg-green-600 dark:bg-green-400 dark:hover:bg-green-500',
        'success-outline' => 'bg-white border border-gray-200 text-green-600 hover:bg-green-50 dark:bg-gray-900 dark:border-green-400 dark:text-green-400 dark:hover:bg-green-950',
    ];

    $variantClass = $variants[$variant] ?? $variants['primary'];

    $disabledClasses = $disabled || $loading
        ? 'opacity-50 cursor-not-allowed'
        : '';
@endphp

<button
    {{ $attributes->merge([
        'class' => "$baseClasses $variantClass $disabledClasses",
        'disabled' => $disabled || $loading
    ]) }}
>
    @if ($loading)
        <svg class="animate-spin mr-2 h-4 w-4 fill-current" viewBox="0 0 16 16">
            <path d="M8 16a7.928 7.928 0 01-3.428-.77l.857-1.807A6.006 6.006 0 0014 8c0-3.309-2.691-6-6-6a6.006 6.006 0 00-5.422 8.572l-1.806.859A7.929 7.929 0 010 8c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8z"></path>
        </svg>
        <span>Loading</span>
    @else
        {{ $slot }}
    @endif
</button>
