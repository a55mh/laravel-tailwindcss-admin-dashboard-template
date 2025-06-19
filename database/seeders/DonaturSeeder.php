<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Donatur;
use Illuminate\Support\Str;

class DonaturSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Donatur::create([
                'tgl_reg'           => now()->subDays(rand(1, 100)),
                'tipe_donatur'      => rand(0, 1) ? 'Individu' : 'Perusahaan',
                'id_donatur'        => 'DNTR' . str_pad($i, 5, '0', STR_PAD_LEFT),
                'nama'              => 'Donatur ' . $i,
                'jk'                => rand(0, 1) ? 'L' : 'P',
                'tempat_lahir'      => 'Kota ' . $i,
                'tgl_lahir'         => now()->subYears(rand(20, 50))->format('Y-m-d'),
                'alamat'            => 'Jl. Contoh Alamat No. ' . $i,
                'kota'              => 'Kota ' . $i,
                'kodepos'           => '1234' . $i,
                'email'             => 'donatur' . $i . '@mail.com',
                'pekerjaan'         => 'Pekerjaan ' . $i,
                'PIC'               => 'PIC ' . $i,
                'jabatan'           => 'Jabatan ' . $i,
                'no_tlp_pic'        => '0812345678' . $i,
                'freq_donasi'       => rand(0, 1) ? 'Bulanan' : 'Tahunan',
                'sumber_informasi'  => 'Internet',
                'npwp'              => 'NPWP' . $i,
                'no_hp_wa'          => '0812345678' . $i,
                'officer'           => 'Officer ' . $i,
                'catatan'           => 'Catatan untuk donatur ' . $i,
            ]);
        }
    }
}