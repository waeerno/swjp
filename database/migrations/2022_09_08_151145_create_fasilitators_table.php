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
        Schema::create('fasilitators', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('wilayah_kode');
            $table->string('nama');
            $table->string('jenis');
            $table->timestamps();
            //relation user
            $table->foreign('user_id')->references('id')->on('users');
            //relation wilayah
            $table->foreign('wilayah_kode')->references('kode')->on('wilayahs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fasilitators');
    }
};
