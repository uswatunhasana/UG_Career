<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKabkotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kabkotas', function (Blueprint $table) {
            $table->increments('id_kabkotas');
            $table->string('kd_kabkota',8);
            $table->string('nama_kabkota',50);
             //relasi kabkota
            $table->unsignedInteger('id_provinsi')->nullable();
            $table->foreign('id_provinsi')
                ->on('provinsis')
                ->references('id_provinsi')
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
        Schema::dropIfExists('kabkotas');
    }
}
