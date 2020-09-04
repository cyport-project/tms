<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class account extends Model
{
    //protected $table='account';

    protected $fillable = [
        'name', 'sid', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'sid_verified_at' => 'datetime',
    ];
}
