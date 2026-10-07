@extends('layouts.page')

@section('title', 'Online Store')

@section('content')
    <h1>Online Store</h1>
    
    <div class="products">
        @foreach ($products as $product)
            @include('partials.product', ['product' => $product])
        @endforeach
    </div>
@endsection