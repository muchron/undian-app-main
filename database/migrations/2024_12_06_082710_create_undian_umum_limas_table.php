<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUndianUmumLimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('undian_umum_lima', function (Blueprint $table) {
            $table->integer('id', true)->startingValue(10000);
            $table->integer('peserta_umum_lima_id');
            $table->string('nomor_undian');
            $table->string('nama_peserta');
            $table->timestamps();
            $table->foreign('peserta_umum_lima_id')->references('id')->on('peserta_umum_lima')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('undian_umum_lima');
    }
}
