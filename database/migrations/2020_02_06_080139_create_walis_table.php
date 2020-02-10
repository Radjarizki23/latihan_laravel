<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalisTable extends Migration
{

    public function up()

	{
Schema::create('walis', function(Blueprint $table)
{
	$table->bigIncrements('id');

	$table->string('nama');
	$table->unsignedBigInteger('id_mahasiswa');
	$table->foreign('id_mahasiswa')->references('id')->on('mahasiswas')->onDelete('cascade');

	$table->timestamps();
});
	}

public function down()
{
	Schema::dropIfExists('walis');
}
}