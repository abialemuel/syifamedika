<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    //
    protected $table = 'dm_pasien';
    protected $guarded = [ 'id_pasien' ];
}
