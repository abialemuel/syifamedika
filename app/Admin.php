<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    // declare model to tablename

    //
    protected $guard = 'admin';
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
}