<?php

use Illuminate\Database\Seeder;

class DmKategori extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         //
         DB::table('dm_kategori')->insert(
           [
             'name' => 'POLI SPESIALIS NON BPJS',
           ],
           [
             'name' => 'POLI SPESIAL BPJS DAN NON BPJS',
           ]
         );
     }
}
