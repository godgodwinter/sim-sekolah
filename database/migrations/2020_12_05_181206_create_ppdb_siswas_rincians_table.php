<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpdbSiswasRinciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppdb_siswas_rincians', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ppdb_siswas_id')->unsigned();
            $table->foreign('ppdb_siswas_id')
                    ->references('id')
                    ->on('ppdb_siswas')
                    ->onDelete('cascade ')
                    ->onUpdate('cascade');
            //rincian peserta didik
            $table->string('tinggi')->nullable();
            $table->string('berat')->nullable();
            $table->string('lingkarkepala')->nullable();
            $table->string('jarakkesekolah')->nullable();
            $table->string('dalamkilometer')->nullable();
            $table->string('waktutempuh')->nullable();
            $table->string('jmlsaudarakandung')->nullable();
//prestasi

            $table->string('prestasi_jenis')->nullable();
            $table->string('prestasi_tingkat')->nullable();
            $table->string('prestasi_nama')->nullable();
            $table->string('prestasi_tahun')->nullable();
            $table->string('prestasi_penyelenggara')->nullable();
            $table->string('prestasi_peringkat')->nullable();
//beasiswa
            $table->string('beasiswa_jenis')->nullable();
            $table->string('beasiswa_keterangan')->nullable();
            $table->string('beasiswa_tahun_mulai')->nullable();
            $table->string('beasiswa_tahun_selesai')->nullable();
 //kesejahteraanpesertadidik
            $table->string('kesejahteraanpesertadidik_jenis')->nullable();
            $table->string('kesejahteraanpesertadidik_nokartu')->nullable();
            $table->string('kesejahteraanpesertadidik_namadikartu')->nullable();
            // $table->string('kesejahteraanpesertadidik_');

//registrasi peserta didik
            $table->string('regristrasi_kompetensikeahlian')->nullable();
            $table->string('regristrasi_jenisdaftar')->nullable();
            $table->string('regristrasi_nis')->nullable();
            $table->string('regristrasi_tglmasuk')->nullable();
            $table->string('regristrasi_sekolahasal')->nullable();
            $table->string('regristrasi_nomorpeserta_un')->nullable();
            $table->string('regristrasi_noseriijazah')->nullable();
            $table->string('regristrasi_noskhun')->nullable();
            $table->string('regristrasi_wna_keluarkarena')->nullable();
            $table->string('regristrasi_wna_tglkeluar')->nullable();
            $table->string('regristrasi_wna_alasan')->nullable();
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
        Schema::dropIfExists('ppdb_siswas_rincians');
    }
}
