<div class="product">
    <h2>{{ $product->name }}</h2>

    <p class="category">
        Category: {{ $product->category }}
    </p>
    <p class="price">
        {{ number_format($product->price, 2) }} €
    </p>
    <p>
        {{ $product->description }}
    </p>
</div>