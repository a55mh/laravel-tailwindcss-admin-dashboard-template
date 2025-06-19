<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Donatur;

class DonaturCrud extends Component
{
    public $donaturs, $donatur_id;
    public $tgl_reg, $tipe_donatur, $id_donatur, $nama, $jk, $tempat_lahir, $tgl_lahir, $alamat, $kota, $kodepos, $email, $pekerjaan, $PIC, $jabatan, $no_tlp_pic, $freq_donasi, $sumber_informasi, $npwp, $no_hp_wa, $officer, $catatan;
    public $isOpen = false;

    protected $rules = [
        'tgl_reg' => 'required|date',
        'tipe_donatur' => 'required|string',
        'id_donatur' => 'required|string|max:17',
        'nama' => 'required|string',
        'jk' => 'required|in:L,P',
        'no_hp_wa' => 'required|string',
        'officer' => 'required|string',
        // kolom lain nullable
    ];

    public function render()
    {
        $this->donaturs = Donatur::latest()->get();
        return view('livewire.donatur-crud');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->donatur_id = null;
        $this->tgl_reg = '';
        $this->tipe_donatur = '';
        $this->id_donatur = '';
        $this->nama = '';
        $this->jk = '';
        $this->tempat_lahir = '';
        $this->tgl_lahir = '';
        $this->alamat = '';
        $this->kota = '';
        $this->kodepos = '';
        $this->email = '';
        $this->pekerjaan = '';
        $this->PIC = '';
        $this->jabatan = '';
        $this->no_tlp_pic = '';
        $this->freq_donasi = '';
        $this->sumber_informasi = '';
        $this->npwp = '';
        $this->no_hp_wa = '';
        $this->officer = '';
        $this->catatan = '';
    }

    public function store()
    {
        $this->validate();

        Donatur::updateOrCreate(['id' => $this->donatur_id], [
            'tgl_reg' => $this->tgl_reg,
            'tipe_donatur' => $this->tipe_donatur,
            'id_donatur' => $this->id_donatur,
            'nama' => $this->nama,
            'jk' => $this->jk,
            'tempat_lahir' => $this->tempat_lahir,
            'tgl_lahir' => $this->tgl_lahir,
            'alamat' => $this->alamat,
            'kota' => $this->kota,
            'kodepos' => $this->kodepos,
            'email' => $this->email,
            'pekerjaan' => $this->pekerjaan,
            'PIC' => $this->PIC,
            'jabatan' => $this->jabatan,
            'no_tlp_pic' => $this->no_tlp_pic,
            'freq_donasi' => $this->freq_donasi,
            'sumber_informasi' => $this->sumber_informasi,
            'npwp' => $this->npwp,
            'no_hp_wa' => $this->no_hp_wa,
            'officer' => $this->officer,
            'catatan' => $this->catatan,
        ]);

        session()->flash('message', $this->donatur_id ? 'Donatur updated.' : 'Donatur created.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $donatur = Donatur::findOrFail($id);
        $this->donatur_id = $id;
        $this->tgl_reg = $donatur->tgl_reg;
        $this->tipe_donatur = $donatur->tipe_donatur;
        $this->id_donatur = $donatur->id_donatur;
        $this->nama = $donatur->nama;
        $this->jk = $donatur->jk;
        $this->tempat_lahir = $donatur->tempat_lahir;
        $this->tgl_lahir = $donatur->tgl_lahir;
        $this->alamat = $donatur->alamat;
        $this->kota = $donatur->kota;
        $this->kodepos = $donatur->kodepos;
        $this->email = $donatur->email;
        $this->pekerjaan = $donatur->pekerjaan;
        $this->PIC = $donatur->PIC;
        $this->jabatan = $donatur->jabatan;
        $this->no_tlp_pic = $donatur->no_tlp_pic;
        $this->freq_donasi = $donatur->freq_donasi;
        $this->sumber_informasi = $donatur->sumber_informasi;
        $this->npwp = $donatur->npwp;
        $this->no_hp_wa = $donatur->no_hp_wa;
        $this->officer = $donatur->officer;
        $this->catatan = $donatur->catatan;
        $this->openModal();
    }

    public function delete($id)
    {
        Donatur::find($id)->delete();
        session()->flash('message', 'Donatur deleted.');
    }
}