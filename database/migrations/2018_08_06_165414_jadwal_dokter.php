<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JadwalDokter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('jadwal_dokter', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_poli');
            $table->string('id_dokter');
            $table->date('hari');
            $table->time('mulaijam');
            $table->time('selesaijam');
            $table->text('txtjam');
            $table->boolean('void');
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
        Schema::dropIfExists('fasilitas_kamar');
    }
}
