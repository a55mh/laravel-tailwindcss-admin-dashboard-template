<div>
    <x-vbutton variant="primary" wire:click="openModal">Buka Modal</x-vbutton>

    <x-modal wire:model="showModal" maxWidth="2xl">
        <div class="p-6">
            <h2 class="text-lg font-bold mb-4">Judul Modal</h2>
            <p>Ini isi dari modal. menggunakan bawaan Jetstream</p>

            <div class="mt-4">
                <x-button wire:click="$set('showModal', false)">Tutup</x-button>
            </div>
        </div>
    </x-modal>
</div>
