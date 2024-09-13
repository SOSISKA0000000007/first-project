<div class="col-md-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $product['name'] }}</h5>
            <p class="card-text">Цена: {{ number_format($product['cost'], 0, ',', ' ') }} руб.</p>
            <p class="card-text">Количество: {{ $product['amount'] }}</p>
            @if ($product['amount'] > 0)
                <button class="btn btn-success">Купить</button>
            @else
                <button class="btn btn-secondary" disabled>Нет в наличии</button>
            @endif
        </div>
    </div>
</div>
