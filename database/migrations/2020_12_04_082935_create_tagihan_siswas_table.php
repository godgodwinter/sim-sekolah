<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagihanSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihan_siswas', function (Blueprint $table) {
            $table->id();
            $table->string('username_siswa');
            $table->string('nama');
            $table->string('tapel');
            $table->string('kelas');
            $table->string('tagihan_atur_id');
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
        Schema::dropIfExists('tagihan_siswas');
    }
}
