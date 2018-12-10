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
         DB::table('dm_kategori')->insert(array(

             array('nama_kategori' => 'POLI SPESIALIS NON BPJS'),
            array('nama_kategori' => 'POLI SPESIAL BPJS DAN NON BPJS')
         ));
     }
}
