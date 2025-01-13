<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemenangUndianGrandprize extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemenang_undian_grandprice', function (Blueprint $table) {
            $table->integer('id', true)->startingValue(10000);
            $table->integer('undian_id');
            $table->timestamps();
            $table->foreign('undian_id')->references('id')->on('undian_grandprice')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemenang_undian_grandprice');
    }
}
