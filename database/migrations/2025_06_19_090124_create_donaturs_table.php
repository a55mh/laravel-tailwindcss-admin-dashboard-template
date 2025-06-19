<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('donaturs', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tgl_reg');
            $table->string('tipe_donatur');
            $table->string('id_donatur', 17);
            $table->string('nama');
            $table->enum('jk', ['L', 'P']);
            $table->string('tempat_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->text('alamat')->nullable();
            $table->string('kota')->nullable();
            $table->string('kodepos')->nullable();
            $table->string('email')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('PIC')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('no_tlp_pic')->nullable();
            $table->string('freq_donasi')->nullable();
            $table->string('sumber_informasi')->nullable();
            $table->string('npwp')->nullable();
            $table->string('no_hp_wa');
            $table->string('officer');
            $table->text('catatan')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('donaturs');
    }
};