<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpdbSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppdb_siswas', function (Blueprint $table) {
            $table->id();
            $table->string('users_email')->indeks();
            $table->foreign('users_email')
                    ->references('email')
                    ->on('users')
                    ->onDelete('cascade ')
                    ->onUpdate('cascade');
            $table->string('nama');
            $table->string('jk');
            $table->string('nisn');
            $table->string('nik');
            $table->string('no_kk');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('no_registrasi_akta_lahir');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->string('berkebutuhankhusus');
            $table->string('alamat_jalan');
            $table->string('rt');
            $table->string('rw');
            $table->string('nama_dusun');
            $table->string('nama_kelurahan_desa');
            $table->string('kecamatan');
            $table->string('kodepos');
            $table->string('tempattinggal');
            $table->string('modatransportasi');
            $table->string('anakkeberapa');
            $table->string('apakahpunyakip');
            $table->string('apakahmenerimakip');
            $table->string('alasanmenonakpip');

//kontak
            $table->string('telp');
            $table->string('hp');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ppdb_siswas');
    }
}
