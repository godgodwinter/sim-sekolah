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
            //rincian peserta didik
            $table->string('tinggi');
            $table->string('berat');
            $table->string('lingkarkepala');
            $table->string('jarakkesekolah');
            $table->string('dalamkilometer');
            $table->string('waktutempuh');
            $table->string('jmlsaudarakandung');
//prestasi

            $table->string('prestasi_jenis');
            $table->string('prestasi_tingkat');
            $table->string('prestasi_nama');
            $table->string('prestasi_tahun');
            $table->string('prestasi_penyelenggara');
            $table->string('prestasi_peringkat');
//beasiswa
            $table->string('beasiswa_jenis');
            $table->string('beasiswa_keterangan');
            $table->string('beasiswa_tahun_mulai');
            $table->string('beasiswa_tahun_selesai');
 //kesejahteraanpesertadidik           
            $table->string('kesejahteraanpesertadidik_jenis');
            $table->string('kesejahteraanpesertadidik_nokartu');
            $table->string('kesejahteraanpesertadidik_namadikartu');
            $table->string('kesejahteraanpesertadidik_');

//registrasi peserta didik
            $table->string('regristrasi_kompetensikeahlian');
            $table->string('regristrasi_jenisdaftar');
            $table->string('regristrasi_nis');
            $table->string('regristrasi_tglmasuk');
            $table->string('regristrasi_sekolahasal');
            $table->string('regristrasi_nomorpeserta_un');
            $table->string('regristrasi_noseriijazah');
            $table->string('regristrasi_noskhun');
            $table->string('regristrasi_wna_keluarkarena');
            $table->string('regristrasi_wna_tglkeluar');
            $table->string('regristrasi_wna_alasan');
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
