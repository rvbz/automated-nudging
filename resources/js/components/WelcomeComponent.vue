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
                                            <tr>
                                                <td>Hotdog</td>
                                                <td class="text-center">1</td>
                                            </tr>
                                            <tr>
                                                <td>Soda</td>
                                                <td class="text-center">1</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <p class="text-right spend-summary">
                                        <strong>Total spend: </strong><span class="total-amount">€40.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>

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
                        <p><strong>Total spend: </strong><span class="total-amount">€40.00</span></p>
                    </div>
                    <div class="cell medium-6 text-right">
                        <a href="#" class="button round-icon large">Checkout</a>
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
            // Get all products
            var $this = this;
            axios.get('api/products/all').then(function(response){

                // Need to add qty property to every product retrieved 
                var result = response.data;

                result.forEach(function(element) { element.qty = 1; });

                $this.products = result;
            });
        },
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                products: [],
                cart: [],
            }
        },
        methods: {
            toLowerCase(string) {
                return string.toLowerCase();
            },

            addToCart(product, discount = 0) {

            }
        },
    }
</script>
