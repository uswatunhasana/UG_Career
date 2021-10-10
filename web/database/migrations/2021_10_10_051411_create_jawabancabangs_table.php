<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabancabangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawabancabangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kd_cabang',5);
            $table->text('kategori_cabang');
            //relasi dengan pertanyaan
            $table->unsignedInteger('id_pilihanjawaban')->nullable();
            $table->foreign('id_pilihanjawaban')
                ->on('pilihanjawabans')
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
