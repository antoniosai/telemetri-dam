<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bendungan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bendungan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_bendungan');
            $table->string('nama');
            $table->string('keterangan')->nullable();
            $table->string('alamat');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('token');
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
        Schema::dropIfExists('bendungan');
    }
}
