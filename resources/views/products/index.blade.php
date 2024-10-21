<!-- resources/views/products/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Products</h1>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/300" alt="{{ $product->name }}" class="product-image">
                        <h2>{{ $product->name }}</h2>
                        <p>{{ Str::limit($product->description, 100) }}</p>
                        <p><strong>Price: </strong>${{ $product->price }}</p>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
