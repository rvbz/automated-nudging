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

        $products = Product::all();

        return view('welcome', ['products' => $products]);
    }

    public function getAllProducts() {
        $products = Product::all();

        return response()->json($products);
    }

    /**
     *
     * Get a random nudge to use
     *
     */
    public function getNudge() {

    }
}
