<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShowWelcomePage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $products = array('Popcorn', 'Hotdog', 'Nachos', 'Icecream', 'Candies', 'Soda', 'Cold drink, Milkshake', 'Water');

        $products = Product::all();

        return view('welcome', ['products' => $products]);
    }
}
