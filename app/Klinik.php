<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klinik extends Model
{
    //
    protected $table = 'dm_poli';
    
    public function reservasi()
    {
      return $this->hasMany('App\RjPoli');
    }
}
