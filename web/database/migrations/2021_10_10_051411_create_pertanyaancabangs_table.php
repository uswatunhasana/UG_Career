<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaancabangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaancabangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kd_cabang',5);
            $table->text('pertanyaan_cabang');
            //relasi dengan pertanyaan
            $table->unsignedInteger('id_pertanyaan')->nullable();
            $table->foreign('id_pertanyaan')
                ->on('pertanyaans')
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
        Schema::dropIfExists('jawabancabangs');
    }
}
