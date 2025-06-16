@props(['message'])

<div x-data="{ open: true }" x-show="open" role="alert">
    <div class="text-sm bg-blue-500 text-white rounded-md p-4">
        <div class="flex justify-between items-center">
            <div class="flex gap-2 items-start">
                <svg class="w-4 h-4 mt-0.5" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm1 12H7V7h2v5zM8 6c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1z"/>
                </svg>
                <span>{{ $message }}</span>
            </div>
            <button class="ml-3 hover:text-gray-300" @click="open = false">
                <div class="sr-only">Close</div>
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"/>
                </svg>
            </button>
        </div>
    </div>
</div>
