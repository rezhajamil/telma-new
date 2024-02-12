<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftars', function (Blueprint $table) {
            $table->id();
            $table->string('kampus_id');
            $table->foreign('kampus_id')->references('NPSN')->on('data_sekolah_sumatera');
            $table->tinyInteger('semester')->unsigned();
            $table->string('nama_lengkap');
            $table->string('email')->unique();
            $table->string('nomor_hp');
            $table->string('nomor_wa');
            $table->enum('hobi', ['olahraga', 'musik', 'menulis']);
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
        Schema::dropIfExists('daftars');
    }
}
