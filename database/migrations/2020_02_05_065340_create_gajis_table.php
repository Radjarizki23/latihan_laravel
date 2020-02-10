<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajisTable extends Migration
{

    public function up()
    {
        Schema::create('gajis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nip');
            $table->string('nama');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('jabatan');
            $table->integer('jam_kerja');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gajis');
    }
}
