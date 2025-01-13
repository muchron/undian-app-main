<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUndianGrandprize extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('undian_grandprice', function (Blueprint $table) {
            $table->integer('id', true)->startingValue(10000);
            $table->integer('peserta_grandprice_id');
            $table->string('nomor_undian');
            $table->string('nama_peserta');
            $table->timestamps();
            $table->foreign('peserta_grandprice_id')->references('id')->on('peserta_grandprice')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('undian_grandprice');
    }
}
