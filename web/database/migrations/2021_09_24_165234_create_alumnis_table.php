<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin',['P','L']);
            $table->text('alamat_sekarang');
            $table->text('alamat_tetap');
            $table->string('no_telp',15);
            $table->string('tahun_lulus',4);
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
        Schema::dropIfExists('alumnis');
    }
}
