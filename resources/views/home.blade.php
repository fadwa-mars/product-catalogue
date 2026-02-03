@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container text-center mt-5">
    <h1 class="display-4 mb-4">Welcome Home !</h1>
    <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg">Page Produits</a>
</div>
@endsection