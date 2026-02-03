<div class="card h-100 shadow-sm">
    <img src="{{ asset('images/' . $product['image']) }}" class="card-img-top" alt="{{ $product['title'] }}" style="height: 200px; object-fit: cover;">
    <div class="card-body d-flex flex-column">
        <h5 class="card-title">{{ $product['title'] }}</h5>
        <p class="card-text text-muted">{{ $product['price'] }}</p>
        <p class="card-text small">{{ $product['description'], 80}}</p>
        <a href="{{ route('products.show', $product['id']) }}" class="btn btn-primary mt-auto">Voir</a>
    </div>
</div>