@extends('layouts.app')
@section('title', "Ajouter un produit")
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Ajouter un produit</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf
                        
                        {{-- Title --}}
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text"
                                   name="title"
                                   id="title"
                                   class="form-control @error('title') is-invalid @enderror"
                                   value="{{ old('title') }}"
                                   required />
                            @error('title')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Price --}}
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number"
                                   name="price"
                                   id="price"
                                   class="form-control @error('price') is-invalid @enderror"
                                   value="{{ old('price') }}"
                                   min="0"
                                   required />
                            @error('price')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Description --}}
                        <div class="mb-3">
                            <label for="desc" class="form-label">Description</label>
                            <textarea name="desc"
                                      id="desc"
                                      rows="5"
                                      class="form-control @error('desc') is-invalid @enderror"
                                      required>{{ old('desc') }}</textarea>
                            @error('desc')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Button --}}
                        <button type="submit" class="btn btn-primary w-100">
                            Ajouter
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection