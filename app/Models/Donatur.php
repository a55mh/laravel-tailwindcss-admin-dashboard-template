<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donatur extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'tgl_reg',
        'tipe_donatur',
        'id_donatur',
        'nama',
        'jk',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'kota',
        'kodepos',
        'email',
        'pekerjaan',
        'PIC',
        'jabatan',
        'no_tlp_pic',
        'freq_donasi',
        'sumber_informasi',
        'npwp',
        'no_hp_wa',
        'officer',
        'catatan',
    ];
}