<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    //
    protected $table = 'dm_agama';

    public function dokters()
    {
      return $this->hasMany('App\Dokter');
    }
}
