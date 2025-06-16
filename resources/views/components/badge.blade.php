@props([
    'type' => 'default', // default, primary, secondary, violet, gray, etc
    'label' => '',       // isi teks badge
])

@php
$baseClasses = 'inline-flex items-center px-2 py-1 rounded-full text-xs font-medium';
$colorClasses = match($type) {
    'primary' => 'bg-blue-100 text-blue-600',
    'secondary' => 'bg-green-100 text-green-600',
    'violet' => 'bg-violet-100 text-violet-600',
    'gray' => 'bg-gray-200 text-gray-700 dark:bg-white-200',
    'announcement' => 'bg-yellow-50 text-yellow-700',
    'bug' => 'bg-red-100 text-red-700',
    'product' => 'bg-indigo-100 text-indigo-600',
    'customer' => 'bg-pink-100 text-pink-600',
    default => 'bg-gray-200 text-gray-700 dark:bg-white-200',
};
@endphp

<div {{ $attributes->merge(['class' => "$baseClasses $colorClasses"]) }}>
    {{ $label }}
</div>
