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
            $table->string('ayah_nama');
            $table->string('ayah_nik');
            $table->string('ayah_tahunlahir');
            $table->string('ayah_pendidikan');
            $table->string('ayah_pekerjaan');
            $table->string('ayah_penghasilanbulanan');
            $table->string('ayah_berkebutuhankhusus');

//data ibu kandung
            $table->string('ibu_nama');
            $table->string('ibu_nik');
            $table->string('ibu_tahunlahir');
            $table->string('ibu_pendidikan');
            $table->string('ibu_pekerjaan');
            $table->string('ibu_penghasilanbulanan');
            $table->string('ibu_berkebutuhankhusus');
            
//wali
$table->string('wali_nama');
$table->string('wali_nik');
$table->string('wali_tahunlahir');
$table->string('wali_pendidikan');
$table->string('wali_pekerjaan');
$table->string('wali_penghasilanbulanan');

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
