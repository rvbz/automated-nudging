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
            <div class="products-wrapper grid-x grid-padding-x small-up-2 medium-up-4">
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
                                <input class="input-group-field" type="number" name="quantity" value="0">
                                <div class="input-group-button">
                                    <button type="button" class="button circle" data-quantity="plus" data-field="quantity">
                                      <i class="fas fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>



                            <div class="price-tag">€30.00</div>
                        </div>
                    </div>
                </div>
                <div class="cell product">Nisi, necessitatibus ipsam? Aliquid molestiae fuga ipsum, quam pariatur aut, autem quaerat at perferendis aspernatur, explicabo cum repellat? Laudantium sapiente blanditiis nemo perferendis placeat possimus quo accusantium repudiandae, nesciunt cumque.</div>
                <div class="cell product">Voluptatum dignissimos accusantium explicabo velit, eius non, beatae voluptatem vitae magni, alias minus? Dolores, soluta, mollitia. Dignissimos totam porro nam repellat, doloribus nulla nihil! Nam veritatis nihil beatae deleniti iure.</div>
                <div class="cell product">Similique, id a libero facilis illo pariatur, eos quod quos modi quo neque voluptatum deserunt quidem dolore soluta officia, provident excepturi ipsum maiores obcaecati porro eveniet velit necessitatibus nihil. Eos.</div>
                <div class="cell product">Quae eveniet nam saepe voluptate minus blanditiis dicta itaque maiores consequuntur, atque, consequatur officiis reprehenderit ad nulla incidunt laboriosam provident voluptatibus voluptates accusamus optio aperiam! Officia natus cum illum sit!</div>
                <div class="cell product">Quis amet, numquam aspernatur cumque consectetur sunt eveniet, impedit non iste, odit accusantium deleniti doloribus deserunt earum eos voluptate necessitatibus. Dolore animi magnam fuga voluptate blanditiis omnis alias, porro excepturi.</div>
                <div class="cell product">Nemo saepe, omnis tempore ut rerum suscipit ratione nobis! Dolores ut, tempora a iste corporis at dignissimos ad labore placeat facere sint repellat beatae qui autem quibusdam, saepe sunt quisquam.</div>
                <div class="cell product">Quas repellat asperiores nesciunt, placeat! Facere, quos, cupiditate adipisci quibusdam est dolores corporis explicabo. Maiores consequatur explicabo, facere cumque ratione ad. Iste quisquam ullam delectus inventore voluptatibus suscipit, ab placeat.</div>
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