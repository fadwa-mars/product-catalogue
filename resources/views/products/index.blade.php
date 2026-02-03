@extends('layouts.app')

@section('title', 'Nos Produits')

@section('content')
<div class="container">
    <h1 class="mb-4">Nos Produits</h1>
    
    <div class="row g-4">
        @foreach($products as $product)
            <div class="col-md-6 col-lg-4 col-xl-3">
                <x-product-card :product="$product" />
            </div>
        @endforeach
    </div>
</div>
@endsection