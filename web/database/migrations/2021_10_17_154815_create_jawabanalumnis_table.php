<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanalumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawabanalumnis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jawaban');
            //relasi pertanyaan
            // $table->unsignedInteger('kd_pertanyaan')->nullable();
            // $table->foreign('kd_pertanyaan')
            //     ->on('pertanyaans')
            //     ->references('kd_pertanyaan')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
            // //relasi user
            // $table->unsignedInteger('npm')->nullable();
            // $table->foreign('npm')
            //     ->on('alumnis')
            //     ->references('npm')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
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
        Schema::dropIfExists('jawabanalumnis');
    }
}
