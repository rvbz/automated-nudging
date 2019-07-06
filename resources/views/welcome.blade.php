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