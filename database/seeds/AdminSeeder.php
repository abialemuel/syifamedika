<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('dm_admin')->insert([
            'id_admin' => 'newadmin',
            'id_karyawan' => '1',
            'password' => '80396443f055ea0c4fd9719ecefcc25a',
            'bidang' => 'admin',
            'level' => 1,
        ]);
    }
}
