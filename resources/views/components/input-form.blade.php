@props([
    'label' => '',
     'id' => '',
    'type' => 'text', 
    'required' => false, 
    'placeholder' => '', 
    'prefix' => null, 
    'suffix' => null, 
    'icon' => null, 
    'tooltip' => null, 
    'supportText' => null, 
    'state' => null,
    'size' => 'default', // small, default, large
])

@php
    $name = $name ?? $id;
    $heightClass = match($size) {
        'small' => 'h-7',    // 1.75rem
        'large' => 'h-12',   // 3rem
        default => 'h-10',   // 2.5rem
    };
@endphp

<div class="space-y-1">
    @if ($label)
        <label for="{{ $id }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
            {{ $label }}
            @if ($required)
                <span class="text-red-500">*</span>
            @endif
            @if ($tooltip)
                <span class="ml-1 cursor-pointer text-gray-400" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <svg class="w-4 h-4 inline" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 108 8A8 8 0 008 0zm0 12a1 1 0 111-1 1 1 0 01-1 1zm1-3H7V4h2z" />
                    </svg>
                    <div x-show="open" class="absolute bg-white dark:bg-gray-700 p-2 text-sm rounded shadow text-gray-700 dark:text-gray-200 z-10 mt-1 w-48">
                        {{ $tooltip }}
                    </div>
                </span>
            @endif
        </label>
    @endif

    <div class="relative">
        @if ($prefix)
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-sm text-gray-500">
                {{ $prefix }}
            </div>
        @endif

        <input
            id="{{ $id }}"
            name="{{ $id }}"
            type="{{ $type }}"
            placeholder="{{ $placeholder }}"
            {{ $required ? 'required' : '' }}
            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm 
                @if($prefix) pl-10 @endif
                @if($suffix) pr-10 @endif
                @if($state === 'error') border-red-500 text-red-600 @endif
                @if($state === 'success') border-green-500 text-green-600 @endif
                {{ $heightClass }}
                {{ $attributes }}"
        >

        @if ($suffix)
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-sm text-gray-500">
                {{ $suffix }}
            </div>
        @endif

        @if ($icon)
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                {!! $icon !!}
            </div>
        @endif
    </div>

    @if ($supportText)
        <p class="text-xs text-gray-500 mt-1">{{ $supportText }}</p>
    @endif

    @if ($state === 'error')
        <p class="text-xs text-red-600 mt-1">This field is required!</p>
    @endif
    @if ($state === 'success')
        <p class="text-xs text-green-600 mt-1">Sounds good!</p>
    @endif
</div>
