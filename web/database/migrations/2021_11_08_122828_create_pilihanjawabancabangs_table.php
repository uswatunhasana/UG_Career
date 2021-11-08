<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePilihanjawabancabangsTable extends Migration
{
    public function up()
    {
        Schema::create('pilihanjawabancabangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jawaban');
            $table->string('kd_jawaban');
            //relasi pertanyaan cabang
            $table->unsignedInteger('id_pertanyaancabang')->nullable();
            $table->foreign('id_pertanyaancabang')
                ->on('pertanyaancabangs')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('pilihanjawabancabangs');
    }
}
