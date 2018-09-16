<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Mockery\Mock;

class User extends Model
{

    protected $table = 'user';

    protected $fillable = [
        'userFullName', 'userEmail', 'userPhoneNumber', 'userAddress', 'userPassword', 'userNote', 'userStatus'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
