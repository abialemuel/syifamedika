<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    //
    protected $table = 'dm_karyawan';

    public function dokters()
    {
      return $this->hasOne('App\Admin');
    }
}
