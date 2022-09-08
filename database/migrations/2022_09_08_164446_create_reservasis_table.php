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
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('paket_id');
            $table->unsignedBigInteger('gaed_id');
            $table->unsignedBigInteger('leader_id');
            $table->date('keberangkatan');
            $table->bigInteger('biaya_luar_paket');
            $table->string('pembayaran');
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('paket_id')->references('id')->on('pakets');
            $table->foreign('leader_id')->references('id')->on('fasilitators');
            $table->foreign('gaed_id')->references('id')->on('fasilitators');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservasis');
    }
};
