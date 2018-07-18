<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    //
    protected $table = 'dm_dokter';
    protected $guarded = [ 'id_dokter' ];

    public function spesialis()
    {
      return $this->belongsTo('App\Spesialis','id_spesialis','id_spesialis');
    }
}
