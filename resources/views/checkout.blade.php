@extends('layouts.default')

@section('content')
	
	<div class="grid-container checkout">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h3><strong>You will enjoy your movie with:</strong></h3>
            </div>
        </div>

        <table class="unstriped">
        	<thead>
			    <tr>
			      <th width="150"></th>
			      <th>Snack</th>
			      <th class="text-center" width="150">Unit price</th>
			      <th class="text-center" width="150">Qty</th>
			      <th class="text-center" width="150">Subtotal</th>
			    </tr>
			</thead>
			<tbody>
			    <tr>
			      <td><img src="{{ asset('images/products/popcorn/popcorn-grid.png') }}" alt="Popcorn"></td>
			      <td><strong>Popcorn</strong></td>
			      <td class="text-center"><strong>€30.00</strong></td>
			      <td class="text-center">
			      	<div class="input-group plus-minus-input align-center">
                        <div class="input-group-button">
                            <button type="button" class="button circle" data-quantity="minus" data-field="quantity">
                              <i class="fas fa-minus" aria-hidden="true"></i>
                            </button>
                        </div>
                        <input class="input-group-field" type="number" name="quantity" value="1">
                        <div class="input-group-button">
                            <button type="button" class="button circle" data-quantity="plus" data-field="quantity">
                              <i class="fas fa-plus" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
			      </td>
			      <td class="text-center"><strong>€30.00</strong></td>
			    </tr>
			    <tr>
			    	<td><img src="{{ asset('images/products/hotdog/hotdog-grid.png') }}" alt="Popcorn"></td>
				    <td><strong>Hotdog</strong></td>
				    <td class="text-center"><strong>€30.00</strong></td>
				    <td class="text-center">
				      	<div class="input-group plus-minus-input align-center">
	                        <div class="input-group-button">
	                            <button type="button" class="button circle" data-quantity="minus" data-field="quantity-hotdog">
	                              <i class="fas fa-minus" aria-hidden="true"></i>
	                            </button>
	                        </div>
	                        <input class="input-group-field" type="number" name="quantity-hotdog" value="1">
	                        <div class="input-group-button">
	                            <button type="button" class="button circle" data-quantity="plus" data-field="quantity-hotdog">
	                              <i class="fas fa-plus" aria-hidden="true"></i>
	                            </button>
	                        </div>
	                    </div>
				    </td>
				    <td class="text-center"><strong>€30.00</strong></td>
			    </tr>
			</tbody>
		</table>


		<table class="unstriped auto-addition-checkout">
			<tbody>
			    <tr>
			      <td width="150">
					<div class="switch large">
					  <input class="switch-input" id="yes-no" type="checkbox" checked="checked" name="exampleSwitch">
					  <label class="switch-paddle" for="yes-no">
					    <span class="switch-active" aria-hidden="true">Yes</span>
					    <span class="switch-inactive" aria-hidden="true">No</span>
					  </label>
					</div>
			      </td>
			      <td class="cheese-text nachos"><strong>Why not adding some <span>Nachos</span> ?</strong></td>
			      <td width="150" class="text-center"><strong>€30.00</strong></td>
			    </tr>
			</tbody>
		</table>


		<div class="grid-x grid-padding-x review-checkout">
            <div class="cell text-right">
                <h4><strong>Grand Total:</strong> €90.00</h4>
            </div>
            <div class="cell text-right finish-button">
                <a href="#" class="button round-icon large">Finish</a>
            </div>
        </div>
    </div>

@endsection