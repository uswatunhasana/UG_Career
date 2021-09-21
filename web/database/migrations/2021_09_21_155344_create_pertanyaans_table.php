<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaansTable extends Migration
{
    public function up()
    {
        Schema::create('pertanyaans', function (Blueprint $table) {
            $table->increments('id_pertanyaan');
            $table->enum('jenis_pertanyaan',['text','pilihan','checklist']);
            $table->enum('kategori_pertanyaan',['alumni','perusahaan']);
            $table->string('kd_pertanyaan',5);
            $table->text('pertanyaan');
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
        Schema::dropIfExists('pertanyaans');
    }
}
