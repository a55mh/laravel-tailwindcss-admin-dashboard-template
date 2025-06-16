@props([
    'label' => '',
    'position' => 'top', // top, right, bottom, left
    'width' => 'w-64', // max-w-xs, max-w-sm, max-w-md, etc
])

@php
$positionClasses = match($position) {
    'top' => 'bottom-full mb-2 left-1/2 transform -translate-x-1/2',
    'right' => 'left-full ml-2 top-1/2 transform -translate-y-1/2',
    'bottom' => 'top-full mt-2 left-1/2 transform -translate-x-1/2',
    'left' => 'right-full mr-2 top-1/2 transform -translate-y-1/2',
    default => 'bottom-full mb-2 left-1/2 transform -translate-x-1/2',
};
@endphp

<div x-data="{ open: false }" class="relative inline-flex items-center gap-1"
     @mouseenter="open = true"
     @mouseleave="open = false"
     @focusin="open = true"
     @focusout="open = false">

    {{-- Optional label --}}
    
    <!-- Icon button -->
    <button class="block p-1 focus:outline-none" type="button"
        aria-haspopup="true"
        :aria-expanded="open"
        @click.prevent="">
        <svg class="text-gray-500 hover:text-violet-600 transition-colors duration-150" width="16" height="16" viewBox="0 0 16 16">
            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
        </svg>
    </button>

    @if($label)
        <span class="text-sm text-gray-700 dark:text-gray-300">{{ $label }}</span>
    @endif

    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute z-50 {{ $positionClasses }} {{ $width }} bg-white border border-gray-200 shadow-md text-sm text-gray-700 rounded px-3 py-2"
        x-cloak
    >
        {{ $slot }}
    </div>
</div>
