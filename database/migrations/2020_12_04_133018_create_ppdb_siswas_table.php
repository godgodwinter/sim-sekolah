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
            $table->string('users_email')->unique();
            $table->foreign('users_email')
                    ->references('email')
                    ->on('users')
                    ->onDelete('cascade ')
                    ->onUpdate('cascade');
            $table->string('nama')->nullable();
            $table->string('jk')->nullable();
            $table->string('nisn')->nullable();
            $table->string('nik')->nullable();
            $table->string('no_kk')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('no_registrasi_akta_lahir')->nullable();
            $table->string('agama')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('berkebutuhankhusus')->nullable();
            $table->string('alamat_jalan')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('nama_dusun')->nullable();
            $table->string('nama_kelurahan_desa')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kodepos')->nullable();
            $table->string('tempattinggal')->nullable();
            $table->string('modatransportasi')->nullable();
            $table->string('anakkeberapa')->nullable();
            $table->string('apakahpunyakip')->nullable();
            $table->string('apakahmenerimakip')->nullable();
            $table->string('alasanmenonakpip')->nullable();

//kontak
            $table->string('telp')->nullable();
            $table->string('hp')->nullable();


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
