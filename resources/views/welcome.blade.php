@extends('layouts.default')

@section('content')
    <div class="hero">
        <div class="grid-container">
            <nav class="top-bar topbar-responsive">
                <div class="top-bar-title">
                    <span data-responsive-toggle="topbar-responsive" data-hide-for="medium">
                      <button class="menu-icon" type="button" data-toggle></button>
                    </span>
                    <a class="topbar-responsive-logo" href="#">
                        <img src="{{ asset('images/logo.png') }}" alt="World cinemas logo">
                    </a>
                </div>
                <div id="topbar-responsive" class="topbar-responsive-links">
                    <div class="top-bar-right">
                      <ul class="menu simple vertical medium-horizontal">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">What's on</a></li>
                        <li><a href="#">Gift cards</a></li>
                        <li><a href="#">Contact</a></li>
                      </ul>
                    </div>
                </div>
            </nav>

            <!-- Movie ticket -->
            <div class="grid-x">
                <div class="cell medium-4 medium-offset-8">
                    <img src="{{ asset('images/movie-ticket.png') }}" alt="Movie screening">
                </div>
            </div>

        </div>
    </div>

    <div class="content">
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
        </div>
    </div>




    <div class="grid-container">
  <div class="grid-x grid-margin-x">
    <div class="cell small-4">cell</div>
    <div class="cell small-4">cell</div>
    <div class="cell small-4">cell</div>
  </div>
</div>


<div class="slider" data-slider data-initial-start="50" data-end="200">
  <span class="slider-handle"  data-slider-handle role="slider" tabindex="1"></span>
  <span class="slider-fill" data-slider-fill></span>
  <input type="hidden">
</div>
@endsection