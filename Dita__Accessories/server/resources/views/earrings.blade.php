@extends('layout')

@section('content')
    <!-- Category Icons Scroll -->
    <div class="category-scroll">
        <div class="cat-item">
            <img src="{{ asset('images/earrings.png') }}" class="cat-img" alt="Earrings">
            <div class="cat-label">EARRINGS</div>
        </div>
        <div class="cat-item">
            <img src="{{ asset('images/necklace.png') }}" class="cat-img" alt="Necklaces">
            <div class="cat-label">NECKLACES</div>
        </div>
        <div class="cat-item">
            <img src="{{ asset('images/ring.png') }}" class="cat-img" alt="Rings">
            <div class="cat-label">RINGS</div>
        </div>
        <div class="cat-item">
            <img src="{{ asset('images/bracelet.png') }}" class="cat-img" alt="Bracelets">
            <div class="cat-label">BRACELETS</div>
        </div>
        <div class="cat-item">
            <img src="{{ asset('images/personalized.png') }}" class="cat-img" alt="Personalized">
            <div class="cat-label">PERSONALIZED JEWELRY</div>
        </div>
    </div>

    <!-- Earrings Section -->
    <section class="container" style="margin-bottom: 40px;">
        <h2 class="best-seller-title" style="text-align:center; margin: 40px 0 24px 0;">Earrings</h2>
        <div class="row" style="justify-content:center;" id="earringsGrid"></div>
        <div class="text-center">
            <button id="showMoreEarringsBtn" class="btn-custom" style="width:180px;margin-top:10px;">Show More</button>
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const totalEarrings = 40;
        const productsPerClick = 4;
        let visibleCount = 8;

        function getEarringProduct(i) {
            return {
                img: `/images/earring-${(i % 6) + 1}.png`, // change filenames to real ones
                name: `Earring ${i + 1}`,
                price: `${Math.floor(Math.random() * 600) + 99},00 €`
            };
        }

        const earringsGrid = document.getElementById('earringsGrid');
        const showMoreBtn = document.getElementById('showMoreEarringsBtn');

        function renderEarrings() {
            earringsGrid.innerHTML = '';
            for (let i = 0; i < visibleCount && i < totalEarrings; i++) {
                const p = getEarringProduct(i);
                earringsGrid.innerHTML += `
                    <div class="col-md-3 col-sm-6 mb-4 d-flex align-items-stretch product-card" data-index="${i}">
                        <div class="best-seller-card" style="width:100%;">
                            <div class="best-seller-image">
                                <img src="${p.img}" alt="${p.name}">
                            </div>
                            <div class="best-seller-name">${p.name}</div>
                            <div class="best-seller-price">${p.price}</div>
                            <div class="best-seller-actions">
                                <button class="btn-custom" style="font-size:1rem;font-weight:600;padding:0 18px;height:40px;min-width:90px;display:flex;align-items:center;justify-content:center;">View Details</button>
                                <button class="btn-custom" style="width:40px;height:40px;display:flex;align-items:center;justify-content:center;padding:0;font-size:1.1rem;min-width:0;"><i class="fas fa-shopping-bag"></i></button>
                            </div>
                        </div>
                    </div>
                `;
            }

            if (visibleCount >= totalEarrings) {
                showMoreBtn.style.display = 'none';
            } else {
                showMoreBtn.style.display = 'inline-block';
            }
        }

        showMoreBtn.addEventListener('click', function() {
            visibleCount += productsPerClick;
            renderEarrings();
        });

        renderEarrings();
    });

    // Add to cart behavior
    document.addEventListener('click', function(e) {
        if (e.target.closest('.fa-shopping-bag')) {
            const card = e.target.closest('.best-seller-card');
            const id = card.parentElement.parentElement.dataset.index;
            const name = card.querySelector('.best-seller-name').textContent;
            const price = card.querySelector('.best-seller-price').textContent;
            const image = card.querySelector('img').src;
            fetch('/cart/add', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content
                },
                body: JSON.stringify({ id, name, price, image })
            }).then(res => res.json()).then(data => {
                alert('Added to cart!');
            });
        }
    });
    </script>
@endsection

