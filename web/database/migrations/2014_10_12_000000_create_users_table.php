<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('username',15)->unique(); // baru
            $table->string('email',25)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('level',['admin','prodi','mahasiswa','perusahaan']);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('users');
    }
}
