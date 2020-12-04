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
            $table->string('nisn');
            $table->string('nama');
            $table->string('panggilan');
            $table->string('jk');
            $table->string('tempat_lahir');
            $table->string('agama');
            $table->string('telp');
            $table->string('alamat');
            $table->string('email');
            $table->string('ayah_nama');
            $table->string('ayah_pekerjaan');
            $table->string('ayah_telp');
            $table->string('ayah_alamat');
            $table->string('ibu_nama');
            $table->string('ibu_pekerjaan');
            $table->string('ibu_telp');
            $table->string('ibu_alamat');
            $table->string('smp_nama');
            $table->string('pekerjaan');
            $table->string('pekerjaan');
            $table->string('pekerjaan');
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
