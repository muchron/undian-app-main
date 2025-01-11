<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPesertaUmumIdToUndian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('undian', function (Blueprint $table) {
            $table->foreignUuid('peserta_umum_id')->nullable()->after('nama_peserta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('undian', function (Blueprint $table) {
            $table->dropColumn('peserta_umum_id');
        });
    }
}
