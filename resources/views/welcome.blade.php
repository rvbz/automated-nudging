@extends('layouts.default')

@section('content')
    

    
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
                               <strong class="number-of-items">0</strong>
                            </div>
                            <div class=" cell shrink cart-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>

            <!-- Product grid -->
            <div class="products-wrapper grid-x grid-padding-x small-up-2 medium-up-2 large-up-4">
                <div class="cell product">
                    <div class="product-inside">
                        <img src="{{ asset('images/products/popcorn/popcorn-grid.png') }}" alt="Popcorn">

                        <div class="hover-add-to-cart">
                            <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
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

                            <a href="#" class="add-to-cart-button"><i class="fas fa-cart-plus"></i></a>

                            <div class="price-tag">€30.00</div>
                        </div>
                    </div>
                    <div class="product-name">
                        <p>Popcorn</p>
                    </div>
                </div>
                <div class="cell product">
                    <div class="product-inside">
                        <img src="{{ asset('images/products/hotdog/hotdog-grid.png') }}" alt="Hotdog">

                        <div class="hover-add-to-cart">
                            <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
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

                            <a href="#" class="add-to-cart-button"><i class="fas fa-cart-plus"></i></a>

                            <div class="price-tag">€30.00</div>
                        </div>
                    </div>
                    <div class="product-name">
                        <p>Hotdog</p>
                    </div>
                </div>
                <div class="cell product">
                    <div class="product-inside">
                        <img src="{{ asset('images/products/nachos/nachos-grid.png') }}" alt="Nachos">

                        <div class="hover-add-to-cart">
                            <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
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

                            <a href="#" class="add-to-cart-button"><i class="fas fa-cart-plus"></i></a>

                            <div class="price-tag">€30.00</div>
                        </div>
                    </div>
                    <div class="product-name">
                        <p>Nachos</p>
                    </div>
                </div>
                <div class="cell product">
                    <div class="product-inside">
                        <img src="{{ asset('images/products/icecream/icecream-grid.png') }}" alt="Icecream">

                        <div class="hover-add-to-cart">
                            <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
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

                            <a href="#" class="add-to-cart-button"><i class="fas fa-cart-plus"></i></a>

                            <div class="price-tag">€30.00</div>
                        </div>
                    </div>
                    <div class="product-name">
                        <p>Icecream</p>
                    </div>
                </div>
                <div class="cell product">
                    <div class="product-inside">
                        <img src="{{ asset('images/products/candy/candies-grid.png') }}" alt="Candies">

                        <div class="hover-add-to-cart">
                            <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
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

                            <a href="#" class="add-to-cart-button"><i class="fas fa-cart-plus"></i></a>

                            <div class="price-tag">€30.00</div>
                        </div>
                    </div>
                    <div class="product-name">
                        <p>Candies</p>
                    </div>
                </div>
                <div class="cell product">
                    <div class="product-inside">
                        <img src="{{ asset('images/products/soda/soda-grid.png') }}" alt="Soda">

                        <div class="hover-add-to-cart">
                            <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
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

                            <a href="#" class="add-to-cart-button"><i class="fas fa-cart-plus"></i></a>

                            <div class="price-tag">€30.00</div>
                        </div>
                    </div>
                    <div class="product-name">
                        <p>Soda</p>
                    </div>
                </div>
                <div class="cell product">
                    <div class="product-inside">
                        <img src="{{ asset('images/products/icedrink/icedrink-grid.png') }}" alt="Icedrink, Milkshake">

                        <div class="hover-add-to-cart">
                            <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
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

                            <a href="#" class="add-to-cart-button"><i class="fas fa-cart-plus"></i></a>

                            <div class="price-tag">€30.00</div>
                        </div>
                    </div>
                    <div class="product-name">
                        <p>Icedrink, Milkshake</p>
                    </div>
                </div>
                <div class="cell product">
                    <div class="product-inside">
                        <img src="{{ asset('images/products/water/water-grid.png') }}" alt="Water">

                        <div class="hover-add-to-cart">
                            <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
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

                            <a href="#" class="add-to-cart-button"><i class="fas fa-cart-plus"></i></a>

                            <div class="price-tag">€30.00</div>
                        </div>
                    </div>
                    <div class="product-name">
                        <p>Water</p>
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




@endsection