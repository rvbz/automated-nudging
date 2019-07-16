<template>
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell medium-9">
                    <h3><strong>What about some snacks for your movie</strong></h3>
                    <p>Every movie is better with something to eat with, and we know it, so we offer you a wide variety of snacks.</p>
                </div>
                <div class="cell medium-3">
                    <div class="shopping-cart-wrapper">
                        <div class="counter grid-x align-right">
                            <div class="cell shrink item-counter">
                               <strong class="number-of-items">{{ cart.length }}</strong>
                            </div>
                            <div class=" cell shrink cart-icon">
                                <i class="fas fa-shopping-cart"></i>

                                <div class="cart-summary">
                                    <p><strong>Your selected snacks for the movie:</strong></p>
                                    <table class="unstriped">
                                        <tbody>
                                            <tr v-for="product in cart">
                                                <td>{{ product.product }}</td>
                                                <td class="text-center">{{ product.qty }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <p class="text-right spend-summary">
                                        <strong>Total spend: </strong><span class="total-amount">€{{ grandTotal }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>

            {{ cart }}
            {{ nudge }}

            <!-- Product grid -->
            <div class="products-wrapper grid-x grid-padding-x small-up-2 medium-up-2 large-up-4">
                <div class="cell product" v-for="product in products">
                    <div class="product-inside">
                        <img :src="'/images/products/'+ toLowerCase(product.name) +'/'+ toLowerCase(product.name) +'-grid.png'" :alt="product.name">

                        <div class="hover-add-to-cart">

                            <integer-plusminus :min="1" v-model="product.qty">
                                <template slot="decrement">
                                    <i class="fas fa-minus" aria-hidden="true"></i>
                                </template>

                                <template slot="increment">
                                    <i class="fas fa-plus" aria-hidden="true"></i>
                                </template>
                            </integer-plusminus>

                            <a href="#" @click.prevent="addToCart(product)" class="add-to-cart-button"><i class="fas fa-cart-plus"></i></a>

                            <div class="price-tag">€{{ product.price }}</div>
                        </div>
                    </div>
                    <div class="product-name">
                        <p>{{ product.name }}</p>
                    </div>
                </div>
                
            </div>


            <!-- Summary and Next button -->
            <div class="review-section">
                <div class="grid-x grid-padding-x ">
                    <div class="cell medium-6 total-section text-right medium-text-left">
                        <p><strong>Total spend: </strong><span class="total-amount">€{{ grandTotal }}</span></p>
                    </div>
                    <div class="cell medium-6 text-right">
                        <a href="#" @click.prevent="checkout()" class="button round-icon large">Checkout</a>
                    </div>
                </div>
            </div>



            <div class="reveal" id="product-discount" data-reveal>
                <div class="grid-x grid-padding-x ">
                    <div :class="'cell medium-6 image-background ' + toLowerCase(slowProduct.name)"></div>
                    <div class="cell medium-6 content-wrap">
                        <h3 class="text-center"><strong>It's your lucky day</strong></h3>

                        <p class="text-center">You can add some {{ slowProduct.name }} to your cart with:</p>

                        <h2 class="text-center"><strong>10% OFF</strong></h2>

                        <div class="grid-x grid-padding-x controls">
                            <div class="cell small-6">
                                <a href="#" class="clear button secondary" @click.prevent="" data-close aria-label="Close modal">No thanks</a>
                            </div>
                            <div class="cell small-6 text-right">
                                <a href="#" @click.prevent="addToCart(slowProduct, 10)" class="button round-icon secondary-color add-cart-icon">Add it</a>
                            </div>
                        </div>

                        <!-- <button class="close-button" data-close aria-label="Close modal" type="button">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                    </div>
                </div>
            </div>

        </div>
</template>

<script>
    import { IntegerPlusminus } from 'vue-integer-plusminus'

    export default {
        components: { IntegerPlusminus },

        mounted() {
            $(this.$el).foundation();

            // Get all products
            var $this = this;
            axios.get('api/nudges/getanudge').then(function(res){
                $this.nudge = res.data;

                axios.get('api/products/all').then(function(response){

                    // Need to add qty property to every product retrieved 
                    var result = response.data;

                    result.forEach(function(element) { element.qty = 1; });

                    $this.products = result;
                });
            });
        },
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                products: [],
                cart: [],
                nudge: [],
                grandTotal: 0.00,
                slowProduct: {"id":5,"name":"Candies","price":"4.00"}
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

            checkout() {
                // check if the slow-moving product hasnt been already added to the cart
                // if not offer the nudge
                var productIndex = this.cart.findIndex(x => x.product === this.slowProduct.name);

                if (productIndex >= 0) {
                    // product exists already in the cart, nothing to do, proceed to checkout
                    // SEND TO CHECKOUT PAGE
                } else {
                    // product not in cart list, present nudge
                    $("#product-discount").foundation('open');
                }

                
            }
        },
    }
</script>
