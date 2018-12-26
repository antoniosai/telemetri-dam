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
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('token');
            $table->char('desa_id', 10)->nullable();
            $table->char('kecamatan_id', 7)->nullable();
            $table->char('kota_id', 4)->nullable();
            $table->char('provinsi_id', 2)->nullable();
            $table->datetime('last_response')->nullable();
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
