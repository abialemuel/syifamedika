<?php

use Illuminate\Database\Seeder;

class PerusahaanKerjasama extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('perusahaan_kerjasama')->insert(array(
          array('nama_perusahaan'=>'Chail Jedang Indonesia',
            'path'=>'user\images\kerjasama\1.jpg'
          ),
          array('nama_perusahaan'=>'Angkasa Pura I',
            'path'=>'user\images\kerjasama\2.png'
          ),
          array('nama_perusahaan'=>'Wana Artha Life',
            'path'=>'user\images\kerjasama\3.png'
          ),
          array('nama_perusahaan'=>'Japfa',
            'path'=>'user\images\kerjasama\4.png'
          ),
          array('nama_perusahaan'=>'Airnav Indonesia',
            'path'=>'user\images\kerjasama\5.png'
          ),
          array('nama_perusahaan'=>'Avrist Indonesia',
            'path'=>'user\images\kerjasama\6.jpg'
          ),
          array('nama_perusahaan'=>'Bureau Veritas Indonesia',
            'path'=>'user\images\kerjasama\7.jpg'
          ),
          array('nama_perusahaan'=>'Jardine Lloyd Thompson',
            'path'=>'user\images\kerjasama\8.png'
          ),
          array('nama_perusahaan'=>'Astra International',
            'path'=>'user\images\kerjasama\9.jpg'
          ),
          array('nama_perusahaan'=>'Asuransi Astra',
            'path'=>'user\images\kerjasama\10.png'
          ),
          array('nama_perusahaan'=>'BPJS Kesehatan',
            'path'=>'user\images\kerjasama\11.png'
          ),
          array('nama_perusahaan'=>'FIF Group',
            'path'=>'user\images\kerjasama\12.jpg'
          ),
          array('nama_perusahaan'=>'Hexindo',
            'path'=>'user\images\kerjasama\13.png'
          ),
          array('nama_perusahaan'=>'PT. PLN',
            'path'=>'user\images\kerjasama\14.png'
          ),
          array('nama_perusahaan'=>'Prudential',
            'path'=>'user\images\kerjasama\15.png'
          ),
          array('nama_perusahaan'=>'Asuransi Sinarmas',
            'path'=>'user\images\kerjasama\16.jpg'
          ),
          array('nama_perusahaan'=>'Takaful Keluarga',
            'path'=>'user\images\kerjasama\17.jpg'
          )
        ));
    }
}
