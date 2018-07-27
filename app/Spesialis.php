<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spesialis extends Model
{
    //
    protected $table = 'dm_spesialis';

    public function dokters()
    {
      return $this->hasMany('App\Dokter');
    }
}
