<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TagihanSiswasDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tagihan_siswas_details', function (Blueprint $table) {
            $table->id();
            $table->string('tagihan_siswas_username')->indeks();
            // $table->foreign('tagihan_siswas_id')
            //         ->references('id')
            //         ->on('tagihan_siswas')
            //         ->onDelete('cascade ');
            $table->string('jml_bayar')->nullable();
            $table->string('tgl_bayar')->nullable();
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
        //
    }
}
