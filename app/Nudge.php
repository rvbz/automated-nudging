<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nudge extends Model
{
    //

    public $timestamps = false;

    /**
     * Get the sells for the nudge.
     */
    public function sells()
    {
        return $this->hasMany('App\Sell');
    }

    /**
     * Get the filled record associated with the nudge.
     */
    public function user_fill()
    {
        return $this->hasMany('App\User_fill');
    }
}
