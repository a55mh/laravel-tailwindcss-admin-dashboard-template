@props([
    'id' => 'switch-' . Str::random(5),
    'label' => 'Switch label',
    'initial' => false,
])

<div class="flex items-center" x-data="{ checked: {{ $initial ? 'true' : 'false' }} }">
    <div class="relative">
        <input
            type="checkbox"
            id="{{ $id }}"
            class="sr-only peer"
            x-model="checked"
        >
        <label
            :class="checked ? 'bg-indigo-500' : 'bg-gray-200'"
            for="{{ $id }}"
            class="flex items-center cursor-pointer w-10 h-6 rounded-full transition-colors duration-300 relative dark:bg-gray-700"
        >
            <span
                class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full transition-transform duration-300"
                :class="checked ? 'translate-x-4' : 'translate-x-0'"
                aria-hidden="true"
            ></span>
            <span class="sr-only">{{ $label }}</span>
        </label>
    </div>
    <div class="text-sm text-gray-600 ml-3" x-text="checked ? 'On' : 'Off'"></div>
</div>
