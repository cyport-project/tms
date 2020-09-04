<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class accounts extends Authenticatable
{
    //protected $table='account';

    protected $fillable = [
        'name', 'sid', 'password','mode','delete_flag',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'sid_verified_at' => 'datetime',
    ];
}
