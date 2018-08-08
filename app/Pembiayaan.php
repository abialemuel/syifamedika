<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembiayaan extends Model
{
  protected $table = 'dm_pembiayaan';
    //

    public function reservasi()
    {
      return $this->hasMany('App\RjPoli');
    }
}
