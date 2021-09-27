<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanRespondensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_respondens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jawaban');
            $table->enum('kategori_responden',['alumni','perusahaan']);
            //relasi pertanyaan
            $table->unsignedInteger('id_pertanyaan')->nullable();
            $table->foreign('id_pertanyaan')
                ->on('pertanyaans')
                ->references('id')
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('hasil_perusahaans');
    }
}
