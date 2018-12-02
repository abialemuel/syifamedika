<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalPoli extends Model
{
    //
    protected $table = 'jadwal_poli';
    public $timestamps = false;

    public function dokter()
    {
      return $this->belongsTo('App\Dokter','id_dokter','id_dokter');
    }

    public function kategori()
    {
      return $this->belongsTo('App\Kategori','id_kategori','id');
    }

    public function klinik()
    {
      return $this->belongsTo('App\Klinik','id_poli','id_poli');
    }
}
