<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaUmumLimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta_umum_lima', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('noreg');
            $table->string('nik');
            $table->string('nama_peserta');
            $table->date('tanggal_lahir');
            $table->double('saldo');
            $table->integer('poin');
            $table->integer('status')->comment('0 = BELUM DAPAT, 1 = SUDAH DAPAT')->default(0);
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
        Schema::dropIfExists('peserta_umum_lima');
    }
}