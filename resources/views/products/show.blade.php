@extends('layouts.app')

@section('title', $product['title'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('images/' . $product['image']) }}" class="img-fluid rounded" alt="{{ $product['title'] }}">
        </div>
        <div class="col-md-6">
            <h1>{{ $product['title'] }}</h1>
            <h3 class="text-primary">{{ $product['price'] }}</h3>
            <p class="lead">{{ $product['description'] }}</p>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">← Retour aux produits</a>
        </div>
    </div>
</div>
@endsection