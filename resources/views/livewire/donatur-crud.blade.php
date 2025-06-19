{{-- filepath: resources/views/livewire/donatur-crud.blade.php --}}
<div class="py-4">
    <div class="mb-4 flex justify-between items-center">
        <x-button wire:click="create">Tambah Donatur</x-button>
    </div>

    @if (session()->has('message'))
        <x-alerts.success :message="session('message')" />
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded shadow text-xs">
            <thead>
                <tr>
                    <th class="px-2 py-1">Nama</th>
                    <th class="px-2 py-1">Tipe</th>
                    <th class="px-2 py-1">JK</th>
                    <th class="px-2 py-1">No HP/WA</th>
                    <th class="px-2 py-1">Officer</th>
                    <th class="px-2 py-1">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($donaturs as $donatur)
                <tr>
                    <td class="border px-2 py-1">{{ $donatur->nama }}</td>
                    <td class="border px-2 py-1">{{ $donatur->tipe_donatur }}</td>
                    <td class="border px-2 py-1">{{ $donatur->jk }}</td>
                    <td class="border px-2 py-1">{{ $donatur->no_hp_wa }}</td>
                    <td class="border px-2 py-1">{{ $donatur->officer }}</td>
                    <td class="border px-2 py-1">
                        <x-button wire:click="edit({{ $donatur->id }})" class="mr-1">Edit</x-button>
                        <x-vbutton variant="danger" wire:click="delete({{ $donatur->id }})">Hapus</x-vbutton>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center py-2">Belum ada data donatur.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Modal Edit/Tambah --}}
    <x-modal-feedback :open="$isOpen" title="{{ $donatur_id ? 'Edit Donatur' : 'feedback Donatur' }}">
        <form wire:submit.prevent="store">
            <div class="grid grid-cols-2 gap-2">
                <x-input-form label="Tanggal Registrasi" type="datetime-local" wire:model.defer="tgl_reg" required id="tgl_reg" />
                <x-input-form label="Tipe Donatur" wire:model.defer="tipe_donatur" required id="tipe_donatur" />
                <x-input-form label="ID Donatur" wire:model.defer="id_donatur" maxlength="17" required id="id_donatur" />
                <x-input-form label="Nama" wire:model.defer="nama" required id="nama" />
                <x-select 
                    label="Jenis Kelamin" 
                    :options="['L'=>'Laki-laki','P'=>'Perempuan']" 
                    wireModel="jk" 
                    required 
                    name="jk"
                />
                <x-input-form label="Tempat Lahir" wire:model.defer="tempat_lahir" id="tempat_lahir" />
                <x-input-form label="Tanggal Lahir" type="date" wire:model.defer="tgl_lahir" id="tgl_lahir" />
                <x-input-form label="Kota" wire:model.defer="kota" id="kota" />
                <x-input-form label="Kodepos" wire:model.defer="kodepos" id="kodepos" />
                <x-input-form label="Email" type="email" wire:model.defer="email" id="email" />
                <x-input-form label="Pekerjaan" wire:model.defer="pekerjaan" id="pekerjaan" />
                <x-input-form label="PIC" wire:model.defer="PIC" id="PIC" />
                <x-input-form label="Jabatan" wire:model.defer="jabatan" id="jabatan" />
                <x-input-form label="No Tlp PIC" wire:model.defer="no_tlp_pic" id="no_tlp_pic" />
                <x-input-form label="Frekuensi Donasi" wire:model.defer="freq_donasi" id="freq_donasi" />
                <x-input-form label="Sumber Informasi" wire:model.defer="sumber_informasi" id="sumber_informasi" />
                <x-input-form label="NPWP" wire:model.defer="npwp" id="npwp" />
                <x-input-form label="No HP/WA" wire:model.defer="no_hp_wa" required id="no_hp_wa" />
                <x-input-form label="Officer" wire:model.defer="officer" required id="officer" />
            </div>
            <div class="mt-2">
                <x-input-form label="Alamat" wire:model.defer="alamat" id="alamat" />
            </div>
            <div class="mt-2">
                <x-input-form label="Catatan" wire:model.defer="catatan" id="catatan" />
            </div>
            <div class="flex justify-end gap-2 mt-4">
                <x-vbutton variant="secondary" type="button" wire:click="closeModal">Batal</x-vbutton>
                <x-button type="submit">Simpan</x-button>
            </div>
        </form>
    </x-modal-feedback>
</div>