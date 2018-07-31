<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DmAdminRemovePrimaryKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('dm_admin', function (Blueprint $table) {
            $table->dropPrimary('id_admin'); // Drops index 'geo_state_index'
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
        Schema::table('dm_admin', function (Blueprint $table) {
            $table->primary('id_admin'); // Drops index 'geo_state_index'
        });
    }
}
