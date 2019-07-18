<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;
use App\Nudge;
use App\Sell;

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

        $email = urldecode(request()->email);

        return view('welcome', ['email' => $email]);
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
        // Get the products sold, group by their product_id and adding a column with their count
        // Then order those by the less sold and got the firts one
        // THAT'S OUR SLOW MOVING PRODUCT
        $product = DB::table('sells')
                 ->join('products', 'sells.product_id', '=', 'products.id')
                 ->select(DB::raw('count(*) as total_sells'), 'products.*')
                 ->groupBy('product_id')
                 ->orderBy('total_sells', 'asc')
                 ->first();

        return response()->json($product);
    }


}
