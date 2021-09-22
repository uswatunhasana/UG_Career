<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilPerusahaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_perusahaans', function (Blueprint $table) {
            $table->increments('id_hasilperusahaan');
            $table->integer('jawaban');
            //relasi pertanyaan
            $table->unsignedInteger('id_pertanyaan')->nullable();
            $table->foreign('id_pertanyaan')
                ->on('pertanyaans')
                ->references('id_pertanyaan')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            //relasi user
            $table->unsignedInteger('id_user')->nullable();
            $table->foreign('id_user')
                ->on('users')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('hasil_perusahaans');
    }
}
