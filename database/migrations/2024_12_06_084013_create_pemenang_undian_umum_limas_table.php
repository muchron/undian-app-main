<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemenangUndianUmumLimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemenang_undian_umum_lima', function (Blueprint $table) {
            $table->id()->startingValue(10000);
            $table->integer('undian_id');
            $table->timestamps();
            $table->foreign('undian_id')->references('id')->on('undian_umum_lima')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemenang_undian_umum_lima');
    }
}
