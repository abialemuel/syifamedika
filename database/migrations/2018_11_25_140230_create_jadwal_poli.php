<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalPoli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('jadwal_poli', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('id_kategori');
             $table->string('id_poli');
             $table->string('id_dokter');
             $table->string('hari');
             $table->string('jam');
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
         Schema::dropIfExists('jadwal_poli');
     }
}
