<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
	/**
     * Get the product that owns the sell.
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
