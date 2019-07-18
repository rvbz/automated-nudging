<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 
    ];

    /**
     * Get the sells for the user.
     */
    public function sells()
    {
        return $this->hasMany('App\Sell');
    }

    /**
     * Get the filled record associated with the user.
     */
    public function user_fill()
    {
        return $this->hasOne('App\User_fill');
    }
}
