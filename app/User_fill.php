<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_fill extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nudge_id', 'user_id', 'slow_moving_product_id' 
    ];


    /**
     * Get the user record associated with the fill.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the nudge record associated with the fill.
     */
    public function nudge()
    {
        return $this->belongsTo('App\Nudge');
    }

    /**
     * Get the slow moving product record associated with the fill.
     */
    public function slowMovingProduct()
    {
        return $this->belongsTo('App\Product', 'slow_moving_product_id');
    }

    /**
     * Get the sells for the user fill.
     */
    public function sells()
    {
        return $this->hasMany('App\Sell');
    }
}
