<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    // declare model to tablename

    //
    protected $table = 'dm_admin';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [ ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function karyawan()
    {
      return $this->belongsTo('App\Karyawan', 'id_karyawan', 'id_karyawan');
    }
}
