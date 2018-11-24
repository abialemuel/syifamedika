<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PerusahaanKerjasama extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ls_perusahaan_kerjasama', function (Blueprint $table) {
            $table->string('nama');
            $table->string('path_gambar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('ls_perusahaan_kerjasama');
    }
}
