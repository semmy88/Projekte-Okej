@extends('layout')

@section('content')
<div class="container">
    <h2>Your Cart</h2>
    @if(count($cart))
        @php $total = 0; $itemNumber = 1; @endphp
        @foreach($cart as $id => $item)
            @php
                $total += floatval(str_replace(',', '.', preg_replace('/[^0-9,\.]/', '', $item['price']))) * $item['quantity'];
            @endphp
            <div class="card mb-3 p-3 d-flex flex-row align-items-center" data-id="{{ $id }}">
                <!-- Removed item number display -->
                <img src="{{ $item['image'] }}" style="width: 80px; height: 80px; object-fit: contain;" alt="{{ $item['name'] }}">
                <div class="card-body p-0 ms-3">
                    <h5 class="card-title mb-1">{{ $item['name'] }}</h5>
                    <p class="card-text mb-1">{{ $item['price'] }}</p>
                    <p class="card-text mb-1">
                        Quantity: 
                        <input type="number" name="quantity" class="quantity-input" value="{{ $item['quantity'] }}" min="1" style="width:60px;">
                    </p>
                    <form method="POST" action="{{ route('cart.update') }}" class="d-inline update-qty-form">
                        @csrf
                        <input type="hidden" name="id" value="{{ $id }}">
                        <button type="button" class="btn btn-sm btn-primary update-qty-btn">Update</button>
                    </form>
                    <form method="POST" action="{{ route('cart.remove') }}" class="d-inline remove-item-form ms-2">
                        @csrf
                        <input type="hidden" name="id" value="{{ $id }}">
                        <button type="button" class="btn btn-sm btn-danger remove-item-btn">&#10005;</button>
                    </form>
                </div>
            </div>
        @endforeach

        <h4 class="text-end">Total: {{ number_format($total, 2, ',', ' ') }} €</h4>
    @else
        <p>Your cart is empty.</p>
    @endif
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Load quantities from localStorage
    const savedCart = JSON.parse(localStorage.getItem('cart')) || {};
    document.querySelectorAll('.card[data-id]').forEach(card => {
        const id = card.getAttribute('data-id');
        const qtyInput = card.querySelector('.quantity-input');
        if (savedCart[id]) {
            qtyInput.value = savedCart[id];
        }
    });
});

function updateLocalCart(id, quantity) {
    const cart = JSON.parse(localStorage.getItem('cart')) || {};
    cart[id] = quantity;
    localStorage.setItem('cart', JSON.stringify(cart));
}

function removeFromLocalCart(id) {
    const cart = JSON.parse(localStorage.getItem('cart')) || {};
    delete cart[id];
    localStorage.setItem('cart', JSON.stringify(cart));
}

document.querySelectorAll('.update-qty-btn').forEach(button => {
    button.addEventListener('click', function() {
        const form = this.closest('form');
        const id = form.querySelector('input[name="id"]').value;
        const qtyInput = form.closest('.card').querySelector('.quantity-input');
        const quantity = qtyInput.value;

        fetch(form.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content,
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ id: id, quantity: quantity })
        }).then(response => {
            if (response.ok) {
                updateLocalCart(id, quantity);
                location.reload();
            } else {
                alert('Failed to update quantity.');
            }
        });
    });
});

document.querySelectorAll('.remove-item-btn').forEach(button => {
    button.addEventListener('click', function() {
        const form = this.closest('form');
        const id = form.querySelector('input[name="id"]').value;

        fetch(form.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content,
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ id: id })
        }).then(response => {
            if (response.ok) {
                removeFromLocalCart(id);
                location.reload();
            } else {
                alert('Failed to remove item.');
            }
        });
    });
});
</script>
@endsection

