<template>
	<div class="grid-container checkout">
		<loading :active.sync="isLoading" :color="'#359bd4'" :height="80" :width="80" :opacity="0.7"></loading>

{{cart}}

		<template v-if="Object.keys(cart).length !== 0">

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
				    <tr v-for="product in cart">
				      <td><img :src="'/images/products/'+ toLowerCase(product.product) +'/'+ toLowerCase(product.product) +'-grid.png'" :alt="product.product"></td>
				      <td><strong>{{ product.product }}</strong></td>
				      <td class="text-center"><strong>€{{ product.unit_price }}</strong></td>
				      <td class="text-center">
				      	<integer-plusminus :min="1" v-model="product.qty" v-on:input="getGrandTotal()">
	                        <template slot="decrement">
	                            <i class="fas fa-minus" aria-hidden="true"></i>
	                        </template>

	                        <template slot="increment">
	                            <i class="fas fa-plus" aria-hidden="true"></i>
	                        </template>
	                    </integer-plusminus>
				      </td>
				      <td class="text-center"><strong>€{{ getSubTotal(product) }}</strong></td>
				    </tr>
				</tbody>
			</table>

        </template>


		<template v-else>
			<div class="grid-x align-center">
				<div class="cell small-10 medium-8">
					<div class="callout">
						<div class="grid-x grid-padding-x">
							<div class="cell medium-8 text-center message">
							  <h3><strong>Your cart is empty</strong></h3>
							  <p>Looks like you will enjoy your movie without any snack</p>
							  <p><strong>Click in the button below to finish your order</strong></p>
							</div>
							<div class="cell medium-4 icon-wrapper text-center">
								<i class="fas fa-ticket-alt"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</template>

            <table class="unstriped auto-addition-checkout" v-if="showCheckedNudge">
                <tbody>
                    <tr>
                      <td width="150">
                        <div class="switch large">
                          <input class="switch-input" id="yes-no" type="checkbox" v-model="checkedNudge" name="exampleSwitch" v-on:change="filterlowProduct()">
                          <label class="switch-paddle" for="yes-no">
                            <span class="switch-active" aria-hidden="true">Yes</span>
                            <span class="switch-inactive" aria-hidden="true">No</span>
                          </label>
                        </div>
                      </td>
                      <td class="cheese-text nachos"><strong>Why not adding some <span>{{ slowProduct.name }}</span> ?</strong></td>
                      <td width="150" class="text-center"><strong>€{{ slowProduct.price }}</strong></td>
                    </tr>
                </tbody>
            </table>


		<div class="grid-x grid-padding-x review-checkout">
            <div class="cell text-right">
                <h4><strong>Grand Total:</strong> €{{ grandTotal }}</h4>
            </div>
            <div class="cell small-6 finish-button">
                <a href="/" class="button clear large">Back</a>
            </div>
            <div class="cell small-6 text-right finish-button">
                <a href="#" class="button round-icon large">Finish</a>
            </div>
        </div>
    </div>
</template>

<script>
    import { IntegerPlusminus } from 'vue-integer-plusminus';
    import Loading from 'vue-loading-overlay';

    import 'vue-loading-overlay/dist/vue-loading.css';

    export default {
        components: { 
            IntegerPlusminus,
            Loading 
        },

        mounted() {
            $(this.$el).foundation();

            if (localStorage.getItem('cart')) {
            	this.cart = JSON.parse(localStorage.getItem('cart'));
            	this.getGrandTotal();
            }

            if (localStorage.getItem('nudge')) {
            	this.nudge = JSON.parse(localStorage.getItem('nudge'));
            }

            if (localStorage.getItem('slow_moving_product')) {
            	this.slowProduct = JSON.parse(localStorage.getItem('slow_moving_product'));
            }

            this.lookForChecked();

            this.isLoading = false;
        },
        data() {
            return {
                cart: [],
                nudge: [],
                grandTotal: 0.00,
                isLoading: true,
                slowProduct: [],
                checkedNudge: false,
                showCheckedNudge: false,
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
            removeFromCart(productName) {
                // First check if the array contains already the product
                var productIndex = this.cart.findIndex(x => x.product === productName);

                if (productIndex >= 0) {
                    // product exists in the cart, delete it
                    this.cart.splice(productIndex, 1);
                }

                // Now get total price
                this.getGrandTotal();
            },

            checkForCheckoutNudge() {
            	var validator = false;
            	var productIndex = this.cart.findIndex(x => x.product === this.slowProduct.name);

            	if (this.nudge.id == 2 && productIndex < 0) {
            		validator = true;
            	}
            	return validator;
            },

            lookForChecked() {

                if (this.checkForCheckoutNudge()) {
                    this.checkedNudge = true;
                    this.showCheckedNudge = true;

                    this.addToCart(this.slowProduct);
                }

            },

            filterlowProduct(){
                if (this.checkedNudge) {
                    this.addToCart(this.slowProduct);
                } else {
                    this.removeFromCart(this.slowProduct.name);
                }
            },

            getGrandTotal() {
                var total = 0.00;

                this.cart.forEach(function(element){
                    total += element.qty * element.unit_price;
                });

                this.grandTotal = total.toFixed(2);
            },
            getSubTotal(product) {
            	return (product.qty * product.unit_price).toFixed(2);
            }


        },
    }
</script>