<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Sell;
use App\User_fill;

class UserController extends Controller
{
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validating data
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users|email|max:255|string',
        ], [
        	'email.unique' => 'Looks like you have answered this research before, I am affraid you can only answer once', 
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        // After validation, store the info
        // Create an instance of roles 
        $user = User::create([
            'email' => $request->email,
        ]);
        
        return $user;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSells(Request $request)
    {
        // Validating data
        $validator = Validator::make($request->all(), [
            'cart' => 'required|array',
			'user_fill_id' => 'required|integer',
			'slow_moving_product_id' => 'required|integer',
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $counter = 0;
        foreach ($request->cart as $product) {
        	$isSlowMoving = false;
        	if ($request->slow_moving_product_id == $product['id']) {
        		$isSlowMoving = true;
        	}

        	// Create an instance of sells
        	$sell = new Sell;

        	$sell->product_id = $product['id'];
        	$sell->qty = $product['qty'];
        	$sell->user_fill_id = $request->user_fill_id;
        	$sell->was_slow_moving = $isSlowMoving;

        	if ($sell->save()) {
        		$counter++;
        	}
        }

        if (count($request->cart) == $counter) {
        	// All products saved successfully
        	return 'All saved';
        } 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeFills(Request $request)
    {
        // Validating data
        $validator = Validator::make($request->all(), [
			'user_id' => 'required|integer',
			'nudge_id' => 'required|integer',
			'slow_moving_product_id' => 'required|integer',
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        // After validation, store the info
        // Create an instance of roles 
        $user_fill = User_fill::create([
            'user_id' => $request->user_id,
			'nudge_id' => $request->nudge_id,
			'slow_moving_product_id' => $request->slow_moving_product_id
        ]);
        
        return $user_fill;
    }
}
