<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('usernamex')->unique();
            $table->string('users_email')->unique();
            $table->string('passwordx');
            $table->string('nama');
            $table->string('tipe');
            $table->string('tapels_id');
            $table->string('tapels_nama');
            $table->string('kelas_id');
            $table->string('kelas_nama');
            $table->string('moodle_user');
            $table->string('moodle_pass');
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
        Schema::dropIfExists('siswas');
    }
}
