<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSekjursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekjurs', function (Blueprint $table) {
            $table->increments('id_sekjur');
            $table->string('nama_sekjur',30);
            $table->string('jabatan',25);
            $table->string('fakultas',100);
            //relasi user
            $table->unsignedInteger('id_user')->nullable();
            $table->foreign('id_user')
                ->on('users')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            //relasi prodi
            $table->unsignedInteger('id_prodi')->nullable();
            $table->foreign('id_prodi')
                ->on('prodis')
                ->references('id_prodi')
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
        Schema::dropIfExists('sekjurs');
    }
}