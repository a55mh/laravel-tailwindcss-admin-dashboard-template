@props(['open' => false, 'title' => 'Success Modal', 'message' => ''])

<div x-data="{ modalOpen: @js($open) }">
    <button class="btn bg-gray-900 text-gray-100" @click.prevent="modalOpen = true">{{ $title }}</button>

    <!-- Backdrop -->
    <div
        class="fixed inset-0 bg-gray-900/75 z-40"
        x-show="modalOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        style="display: none;"
    ></div>

    <!-- Modal -->
    <div
        class="fixed inset-0 z-50 flex items-center justify-center"
        x-show="modalOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        style="display: none;"
        role="dialog"
        aria-modal="true"
    >
        <div class="bg-white p-6 rounded-lg shadow-xl w-full max-w-md" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
            <div class="flex space-x-3">
                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-green-100 text-green-600">
                    ✔
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">{{ $title }}</h3>
                    <p class="mt-1 text-sm text-gray-600">{{ $message }}</p>
                </div>
            </div>
            <div class="mt-4 flex justify-end space-x-2">
                <button class="text-gray-700 px-4 py-2" @click="modalOpen = false">Cancel</button>
                <button class="bg-gray-900 text-white px-4 py-2 rounded">Yes, Continue</button>
            </div>
        </div>
    </div>
</div>
