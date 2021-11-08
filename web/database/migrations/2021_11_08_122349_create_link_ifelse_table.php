<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkIfelseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_ifelse', function (Blueprint $table) {
            $table->increments('id');
            //relasi pertanyaan cabang
            $table->unsignedInteger('id_pertanyaancabang')->nullable();
            $table->foreign('id_pertanyaancabang')
                ->on('pertanyaancabangs')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
           
            //relasi pilihan jawaban
            $table->unsignedInteger('id_pilihanjawaban')->nullable();
            $table->foreign('id_pilihanjawaban')
                ->on('pilihanjawabans')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('link_ifelse');
    }
}
