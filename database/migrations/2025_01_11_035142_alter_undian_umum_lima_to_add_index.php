<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUndianUmumLimaToAddIndex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('undian_umum_lima', function (Blueprint $table) {
            $table->index(['nomor_undian', 'nama_peserta'])->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('undian_umum_lima', function (Blueprint $table) {
            $table->dropIndex(['nomor_undian', 'nama_peserta']);
        });
    }
}
