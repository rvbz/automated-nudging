@extends('layouts.default')

@section('content')
    
        @foreach ($products as $product)
            <p>{{ $product->name }}</p>
        @endforeach

        <welcome-component></welcome-component>
    
        




@endsection