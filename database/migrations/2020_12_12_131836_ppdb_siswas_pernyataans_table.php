<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PpdbSiswasPernyataansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppdb_siswas_pernyataans_table', function (Blueprint $table) {
            $table->id();
            $table->string('users_email')->indeks();
            $table->foreign('users_email')
                    ->references('email')
                    ->on('users')
                    ->onDelete('cascade ')
                    ->onUpdate('cascade');
            $table->string('pernyataan1')->nullable();
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
        Schema::dropIfExists('ppdb_siswas_pernyataans_table');
    }
}
