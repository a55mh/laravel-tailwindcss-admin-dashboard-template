@props([
    'label' => null,
    'name',
    'id' => $name,
    'value' => 1,
    'checked' => false,
    'disabled' => false,
    'wireModel' => null,
])

<div class="flex items-center mb-2">
    <input
        type="checkbox"
        id="{{ $id }}"
        name="{{ $name }}"
        value="{{ $value }}"
        {{ $checked ? 'checked' : '' }}
        {{ $disabled ? 'disabled' : '' }}
        @if($wireModel)
            wire:model="{{ $wireModel }}"
        @endif
        {{ $attributes->merge(['class' => 'h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500']) }}
    />
    @if($label)
        <label for="{{ $id }}" class="ml-2 block text-sm text-gray-700">
            {{ $label }}
        </label>
    @endif
</div>
@error($name)
    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
@enderror
