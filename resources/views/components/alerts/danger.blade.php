@props(['message'])

<div x-data="{ open: true }" x-show="open" role="alert">
    <div class="text-sm bg-red-600 rounded-md p-4 text-white">
        <div class="flex justify-between items-center">
            <div class="flex gap-2">
                <svg class="w-4 h-4 mt-0.5" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"/>
                </svg>
                <span>{{ $message }}</span>
            </div>
            <button @click="open = false" class="ml-3 hover:text-gray-300">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"/>
                </svg>
            </button>
        </div>
    </div>
</div>
