<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Nudge;

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
        // Get a list of available products
        $products = Product::all();


        return response()->json($products);
    }

    /**
     *
     * Get a random nudge to use
     *
     */
    public function getNudge() {
        $nudge = Nudge::inRandomOrder()->first();

        return response()->json($nudge);
    }

    /**
     *
     * Get the slow-moving product
     *
     */
    public function getSlowMovingProduct() {
        // NEE TO CHANGE THIS FOR A LOGIC GETTING
        $product = Product::inRandomOrder()->first();

        return response()->json($product);
    }
}
