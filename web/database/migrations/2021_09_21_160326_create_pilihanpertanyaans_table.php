<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePilihanpertanyaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilihanpertanyaans', function (Blueprint $table) {
            $table->increments('id_pilihanpertanyaan');
            $table->text('pilihan_pertanyaan');
            //relasi dengan pertanyaan
            $table->unsignedInteger('id_pertanyaan')->nullable();
            $table->foreign('id_pertanyaan')
                ->on('pertanyaans')
                ->references('id_pertanyaan')
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
        Schema::dropIfExists('pilihanpertanyaans');
    }
}
