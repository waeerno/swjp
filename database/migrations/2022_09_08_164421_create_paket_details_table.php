<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paket_id');
            $table->string('nama');
            $table->string('deskripsi');
            $table->string('wilayah_kode');
            $table->unsignedBigInteger('kendaraan_id');
            $table->unsignedBigInteger('hotel_id');
            $table->timestamps();
            // relation paket
            $table->foreign('paket_id')->references('id')->on('pakets');
            $table->foreign('wilayah_kode')->references('kode')->on('wilayahs');
            $table->foreign('kendaraan_id')->references('id')->on('kendaraans');
            $table->foreign('hotel_id')->references('id')->on('hotels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket_details');
    }
};
