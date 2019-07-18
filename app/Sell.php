<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'qty', 'was_slow_moving', 'user_fill_id'
    ];


	/**
     * Get the product that owns the sell.
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    /**
     * Get the user that owns the sell.
     */
    public function user_fill()
    {
        return $this->belongsTo('App\User_fill');
    }
}

