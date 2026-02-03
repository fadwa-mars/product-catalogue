@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="container">
    <h1 class="mb-4">Contact</h1>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Email</h5>
                    <p class="card-text">contact@monsite.ma</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Téléphone</h5>
                    <p class="card-text">+212 6 12 34 56 78</p>
                </div>
            </div>
        </div>
        
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Adresse</h5>
                    <p class="card-text">123 Rue Mohammed V, Casablanca, Maroc</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection