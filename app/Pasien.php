<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    //
    protected $table = 'dm_pasien';
    protected $guarded = [];
    public $timestamps = false;

    public function reservasi()
    {
      return $this->hasMany('App\RjPoli');
    }
}
