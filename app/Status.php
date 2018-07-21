<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    protected $table = 'dm_status';

    public function dokters()
    {
      return $this->hasMany('App\Status');
    }
}
