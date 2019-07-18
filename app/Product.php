<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    public $timestamps = false;


    /**
     * Get the sells for the product.
     */
    public function sells()
    {
        return $this->hasMany('App\Sell');
    }


    /**
     * Get the filled record associated with the product as slow moving product.
     */
    public function user_fill()
    {
        return $this->hasOne('App\User_fill', 'slow_moving_product_id');
    }
 


}
