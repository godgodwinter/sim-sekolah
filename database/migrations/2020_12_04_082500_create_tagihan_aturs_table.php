<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagihanAtursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihan_aturs', function (Blueprint $table) {
            $table->id();
            $table->string('tapel_id');
            $table->string('tapel');
            $table->string('kelas_id');
            $table->string('kelas');
            $table->bigInteger('nominal_tagihan');
            $table->string('user_foto');
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
        Schema::dropIfExists('tagihan_aturs');
    }
}
