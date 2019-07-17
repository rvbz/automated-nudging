<template>
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
			      <td><img src="https://api.fnkr.net/testimg/350x200/00CED1/FFF/?text=img+placeholder"></td>
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
</template>

<script>
    import { IntegerPlusminus } from 'vue-integer-plusminus';

    export default {
        components: { 
            IntegerPlusminus,
        },

        mounted() {
            $(this.$el).foundation();

        },
        data() {
            return {
                cart: [],
                grandTotal: 0.00,
            }
        },
        methods: {
            toLowerCase(string) {
                return string.toLowerCase();
            },

            // Discount should be in percentage eg. 10 = 10%
            addToCart(product, discount = 0) {
                // First check if the array contains already the product
                var productIndex = this.cart.findIndex(x => x.product === product.name);
                var productPrice = product.price;

                if (productIndex >= 0) {
                    // product exists already in the cart, delete it first to add it again
                    this.cart.splice(productIndex, 1);
                }

                // Now check for any discount
                if (discount > 0) {
                    productPrice = productPrice - (productPrice * discount/100);
                }

                // Check if the product comes with a Qty, if not, most likely comes from a nudge so, it will be automatically 1
                if (!("qty" in product)) {
                    product['qty'] = 1;
                }

                // add the product to cart array
                this.cart.push({'product': product.name, 'qty': product.qty, 'unit_price': productPrice});

                // Now get total price
                this.getGrandTotal();
            },

            getGrandTotal() {
                var total = 0.00;

                this.cart.forEach(function(element){
                    total += element.qty * element.unit_price;
                });

                this.grandTotal = total.toFixed(2);
            },



        },
    }
</script>