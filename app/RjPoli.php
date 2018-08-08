<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RjPoli extends Model
{
    //
    protected $table = "rj_poli";
    protected $guarded = [];
    public $timestamps = false;

    public function pasien()
    {
      return $this->belongsTo('App\Pasien', 'id_pasien', 'id_pasien');
    }

    public function dokter()
    {
      return $this->belongsTo('App\Dokter', 'id_dokter', 'id_dokter');
    }

    public function klinik()
    {
      return $this->belongsTo('App\Klinik', 'id_poli', 'id_poli');
    }

    public function pembiayaan()
    {
      return $this->belongsTo('App\Pembiayaan', 'id_pembiayaan', 'id_pembiayaan');
    }
}
