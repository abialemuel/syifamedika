<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RjPoliRemoveNotNull extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('rj_poli', function (Blueprint $table) {
            $table->string('jenis_kunjungan', 10)->nullable()->change();
            $table->text('keluhan')->nullable()->change();
            $table->string('total', 12)->nullable()->change();
            $table->string('bayar', 12)->nullable()->change();
            $table->string('sisa', 12)->nullable()->change();
            $table->string('status', 15)->nullable()->change();
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
    }
}
