<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FasilitasKamar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('fasilitas_kamar', function (Blueprint $table) {
             $table->increments('id');
             $table->string('id_jeniskamar');
             $table->string('fasilitas');
             $table->boolean('status');
             $table->string('foto');             
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
