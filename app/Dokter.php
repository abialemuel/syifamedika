<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    //
    protected $table = 'dm_dokter';
    protected $guarded = [ ];
    public $timestamps = false;

    public function spesialis()
    {
      return $this->belongsTo('App\Spesialis','id_spesialis','id_spesialis');
    }
    public function agama()
    {
      return $this->belongsTo('App\Agama','agama','no');
    }
    public function status()
    {
      return $this->belongsTo('App\Status','status','no');
    }

    public function reservasi()
    {
      return $this->hasMany('App\RjPoli');
    }
}
