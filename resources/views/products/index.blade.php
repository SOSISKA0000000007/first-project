@extends('layouts.app')

@section('content')
    <div class="product-list">
        @foreach ($products as $product)
            <div class="product-card">
                <h2>{{ $product->name }}</h2>
                <p>Cost: {{ $product->cost }}</p>
                <p>Amount: {{ $product->amount }}</p>
            </div>
        @endforeach
    </div>
@endsection
