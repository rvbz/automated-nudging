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
    public function comments()
    {
        return $this->hasMany('App\Sell');
    }



    // Add a new attribute
    protected $appends = ['slow_moving'];

    /**
	 * Get the slow moving attribute of a product.
	 *
	 * @return boolean
	 */
	public function getSlowMovingAttribute()
	{
	    if ($this->name == "Nachos") {
	    	return true;
	    } elseif ($this->name == "Candies"){
	    	return true;
	    } else {
	    	return false;
	    }
	}


}
