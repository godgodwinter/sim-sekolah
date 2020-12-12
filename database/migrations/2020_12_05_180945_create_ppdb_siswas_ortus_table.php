<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpdbSiswasOrtusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppdb_siswas_ortus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ppdb_siswas_id')->unsigned();
            $table->foreign('ppdb_siswas_id')
                    ->references('id')
                    ->on('ppdb_siswas')
                    ->onDelete('cascade ')
                    ->onUpdate('cascade');
            //data ayah
            $table->string('ayah_nama')->nullable();
            $table->string('ayah_nik')->nullable();
            $table->string('ayah_tahunlahir')->nullable();
            $table->string('ayah_pendidikan')->nullable();
            $table->string('ayah_pekerjaan')->nullable();
            $table->string('ayah_penghasilanbulanan')->nullable();
            $table->string('ayah_berkebutuhankhusus')->nullable();

//data ibu kandung
            $table->string('ibu_nama')->nullable();
            $table->string('ibu_nik')->nullable();
            $table->string('ibu_tahunlahir')->nullable();
            $table->string('ibu_pendidikan')->nullable();
            $table->string('ibu_pekerjaan')->nullable();
            $table->string('ibu_penghasilanbulanan')->nullable();
            $table->string('ibu_berkebutuhankhusus')->nullable();

//wali
$table->string('wali_nama')->nullable();
$table->string('wali_nik')->nullable();
$table->string('wali_tahunlahir')->nullable();
$table->string('wali_pendidikan')->nullable();
$table->string('wali_pekerjaan')->nullable();
$table->string('wali_penghasilanbulanan')->nullable();

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
        Schema::dropIfExists('ppdb_siswas_ortus');
    }
}
