@extends('layout')
@section('content')
    <!-- Carousel Banner Section -->
    <div id="mainCarousel" class="carousel slide my-4" data-bs-ride="carousel">
        <div class="carousel-inner" style="max-width:1400px;width:100%;margin:auto;">
            <div class="carousel-item active">
                <div style="background:#fff;border-radius:38px;box-shadow:0 12px 48px rgba(34,43,58,0.13);padding:64px 56px 64px 56px;width:100%;display:flex;align-items:center;gap:56px;">
                    <div style="flex:1;min-width:320px;">
                        <h1 style="font-size:3.2rem;font-weight:800;letter-spacing:1.5px;color:#222b3a;font-family:'Playfair Display',serif;margin-bottom:18px;">NEW ACCESSORIES</h1>
                        <h2 style="font-size:1.7rem;font-weight:400;color:#222b3a;margin-bottom:32px;font-family:'Playfair Display',serif;">Exclusive Accessories</h2>
                        <a href="#" class="btn btn-custom mt-2" style="font-size:1.2rem;padding:14px 38px;border-radius:28px;box-shadow:none;font-weight:600;min-width:0;width:auto;">Buy now</a>
                    </div>
                    <div style="flex:1;display:flex;justify-content:end;align-items:center;">
                        <img src="{{ asset('images/4.png') }}" alt="Banner" style="width:100%;max-width:600px;height:320px;object-fit:cover;border-radius:28px;box-shadow:0 8px 32px rgba(34,43,58,0.10);">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div style="background:#fff;border-radius:38px;box-shadow:0 12px 48px rgba(34,43,58,0.13);padding:64px 56px 64px 56px;width:100%;display:flex;align-items:center;gap:56px;">
                    <div style="flex:1;min-width:320px;">
                        <h1 style="font-size:3.2rem;font-weight:800;letter-spacing:1.5px;color:#222b3a;font-family:'Playfair Display',serif;margin-bottom:18px;">NEW ARRIVALS</h1>
                        <h2 style="font-size:1.7rem;font-weight:400;color:#222b3a;margin-bottom:32px;font-family:'Playfair Display',serif;">Shop the latest collection</h2>
                        <a href="#" class="btn btn-custom mt-2" style="font-size:1.2rem;padding:14px 38px;border-radius:28px;box-shadow:none;font-weight:600;min-width:0;width:auto;">Shop now</a>
                    </div>
                    <div style="flex:1;display:flex;justify-content:end;align-items:center;">
                        
                    <img src="{{ asset('images/6.png') }}" alt="Banner" style="width:100%;max-width:600px;height:320px;object-fit:cover;border-radius:28px;box-shadow:0 8px 32px rgba(34,43,58,0.10);">
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev cute-arrow" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev" style="width:54px;height:54px;border-radius:50%;background:rgba(255,255,255,0.95);box-shadow:0 2px 8px rgba(231,84,128,0.10);border:none;display:flex;align-items:center;justify-content:center;transition:background 0.2s,box-shadow 0.2s;">
            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <polygon points="26,6 12,18 26,30" fill="#c9a96e" stroke="#c9a96e" stroke-width="2"/>
            </svg>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next cute-arrow" type="button" data-bs-target="#mainCarousel" data-bs-slide="next" style="width:54px;height:54px;border-radius:50%;background:rgba(255,255,255,0.95);box-shadow:0 2px 8px rgba(231,84,128,0.10);border:none;display:flex;align-items:center;justify-content:center;transition:background 0.2s,box-shadow 0.2s;">
            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <polygon points="10,6 24,18 10,30" fill="#c9a96e" stroke="#c9a96e" stroke-width="2"/>
            </svg>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-title">All Sale</div>
            <div class="hero-subtitle">Discover luxury accessories at exclusive prices</div>
        </div>
    </section>

    <!-- Category Icons Scroll (moved above Best Seller) -->
    <div class="category-scroll">
        <div class="cat-item">
            <img src="{{ asset('images/earrings.png') }}" onclick="window.location.href='{{ route('earrings') }}'" class="cat-img" alt="Earrings">
            <div class="cat-label">EARRINGS</div>
        </div>
        <div class="cat-item">
            <img src="{{ asset('images/necklace.png') }}" onclick="window.location.href='{{ route('necklases') }}'" class="cat-img" alt="Necklaces">
            <div class="cat-label">NECKLACES</div>
        </div>
        <div class="cat-item">
            <img src="{{ asset('images/ring.png') }}" onclick="window.location.href='{{ route('rings') }}'" class="cat-img" alt="Rings">
            <div class="cat-label">RINGS</div>
        </div>
        <div class="cat-item">
            <img src="{{ asset('images/bracelet.png') }}" onclick="window.location.href='{{ route('bracelets') }}'" class="cat-img" alt="Bracelets">
            <div class="cat-label">BRACELETS</div>
        </div>
        <div class="cat-item">
            <img src="{{ asset('images/personalized.png') }}" onclick="window.location.href='{{ route('personalizedjewelry') }}'" class="cat-img" alt="Bracelets">
            <div class="cat-label">PERSONALIZED JEWELRY</div>
        </div>
    </div>

    <!-- Best Seller Section -->
    <section class="best-seller-section" id="best-seller-section">
        <div class="container">
            <h2 class="best-seller-title" style="text-align:center; margin: 40px 0 24px 0;">Best Seller</h2>
            <div class="best-seller-carousel-wrapper" style="display: flex; align-items: center;">
                <button class="best-seller-arrow best-seller-arrow-left" type="button" aria-label="Scroll left">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="20,8 12,16 20,24" fill="#c9a96e"/>
                    </svg>
                </button>
                <div class="best-seller-carousel" id="bestSellerCarousel" style="flex: 1; display: flex; gap: 24px;">
                    <!-- 15 Example product cards -->
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1573408301185-9146fe634ad0?auto=format&fit=crop&w=800&q=80" alt="Diamond Bracelet">
                        </div>
                        <div class="best-seller-name">Diamond Bracelet</div>
                        <div class="best-seller-price">950,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=800&q=80" alt="Sapphire Ring">
                        </div>
                        <div class="best-seller-name">Sapphire Ring</div>
                        <div class="best-seller-price">299,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?auto=format&fit=crop&w=800&q=80" alt="Emerald Pendant">
                        </div>
                        <div class="best-seller-name">Emerald Pendant</div>
                        <div class="best-seller-price">399,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?auto=format&fit=crop&w=800&q=80" alt="Ruby Earrings">
                        </div>
                        <div class="best-seller-name">Ruby Earrings</div>
                        <div class="best-seller-price">899,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1588444837495-c6cfeb53f32d?auto=format&fit=crop&w=800&q=80" alt="Gold Heart Necklace">
                        </div>
                        <div class="best-seller-name">Gold Heart Necklace</div>
                        <div class="best-seller-price">499,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=800&q=80" alt="Silver Bracelet">
                        </div>
                        <div class="best-seller-name">Silver Bracelet</div>
                        <div class="best-seller-price">299,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?auto=format&fit=crop&w=800&q=80" alt="Pearl Necklace">
                        </div>
                        <div class="best-seller-name">Pearl Necklace</div>
                        <div class="best-seller-price">399,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1588444837495-c6cfeb53f32d?auto=format&fit=crop&w=800&q=80" alt="Gold Heart Necklace 2">
                        </div>
                        <div class="best-seller-name">Gold Heart Necklace 2</div>
                        <div class="best-seller-price">499,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=800&q=80" alt="Sapphire Ring 2">
                        </div>
                        <div class="best-seller-name">Sapphire Ring 2</div>
                        <div class="best-seller-price">299,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?auto=format&fit=crop&w=800&q=80" alt="Emerald Pendant 2">
                        </div>
                        <div class="best-seller-name">Emerald Pendant 2</div>
                        <div class="best-seller-price">399,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?auto=format&fit=crop&w=800&q=80" alt="Ruby Earrings 2">
                        </div>
                        <div class="best-seller-name">Ruby Earrings 2</div>
                        <div class="best-seller-price">899,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1588444837495-c6cfeb53f32d?auto=format&fit=crop&w=800&q=80" alt="Gold Heart Necklace 3">
                        </div>
                        <div class="best-seller-name">Gold Heart Necklace 3</div>
                        <div class="best-seller-price">499,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=800&q=80" alt="Sapphire Ring 3">
                        </div>
                        <div class="best-seller-name">Sapphire Ring 3</div>
                        <div class="best-seller-price">299,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?auto=format&fit=crop&w=800&q=80" alt="Emerald Pendant 3">
                        </div>
                        <div class="best-seller-name">Emerald Pendant 3</div>
                        <div class="best-seller-price">399,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?auto=format&fit=crop&w=800&q=80" alt="Ruby Earrings 3">
                        </div>
                        <div class="best-seller-name">Ruby Earrings 3</div>
                        <div class="best-seller-price">899,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                </div>
                <button class="best-seller-arrow best-seller-arrow-right" type="button" aria-label="Scroll right">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="12,8 20,16 12,24" fill="#c9a96e"/>
                    </svg>
                </button>
            </div>
            <div class="best-seller-indicators" id="bestSellerIndicators"></div>
            </div> 
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.getElementById('bestSellerCarousel');
        const leftArrow = document.querySelector('.best-seller-arrow-left');
        const rightArrow = document.querySelector('.best-seller-arrow-right');
        const indicators = document.getElementById('bestSellerIndicators');
        const cards = carousel.querySelectorAll('.best-seller-card');
        const productsPerPage = 5;
        const totalPages = 3;
        let currentPage = 0;
        // Show only 5 products at a time
        function showPage(page) {
            cards.forEach((card, i) => {
                card.style.display = (i >= page * productsPerPage && i < (page + 1) * productsPerPage) ? 'flex' : 'none';
            });
            dots.forEach((dot, i) => dot.classList.toggle('active', i === page));
        }
        // Create 3 dots
        indicators.innerHTML = '';
        for (let i = 0; i < totalPages; i++) {
            const dot = document.createElement('button');
            dot.className = 'best-seller-dot' + (i === 0 ? ' active' : '');
            dot.addEventListener('click', function() {
                currentPage = i;
                showPage(currentPage);
            });
            indicators.appendChild(dot);
        }
        const dots = indicators.querySelectorAll('.best-seller-dot');
        leftArrow.addEventListener('click', function() {
            if (currentPage > 0) {
                currentPage--;
                showPage(currentPage);
            }
        });
        rightArrow.addEventListener('click', function() {
            if (currentPage < totalPages - 1) {
                currentPage++;
                showPage(currentPage);
            }
        });
        showPage(currentPage);
    });
    </script>

    <!-- Featured Collection Section -->
    <section class="best-seller-section">
        <div class="container">
            <h2 class="best-seller-title" style="text-align:center; margin: 40px 0 24px 0;">Featured Collection</h2>
            <div class="best-seller-carousel-wrapper" style="display: flex; align-items: center;">
                <button class="best-seller-arrow featured-arrow-left" type="button" aria-label="Scroll left">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="20,8 12,16 20,24" fill="#c9a96e"/>
                    </svg>
                </button>
                <div class="best-seller-carousel" id="featuredCollectionCarousel" style="flex: 1; display: flex; gap: 24px;">
                    <!-- 15 Example product cards (can be replaced with featured products) -->
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1573408301185-9146fe634ad0?auto=format&fit=crop&w=800&q=80" alt="Diamond Bracelet">
                        </div>
                        <div class="best-seller-name">Diamond Bracelet</div>
                        <div class="best-seller-price">950,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=800&q=80" alt="Sapphire Ring">
                        </div>
                        <div class="best-seller-name">Sapphire Ring</div>
                        <div class="best-seller-price">299,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?auto=format&fit=crop&w=800&q=80" alt="Emerald Pendant">
                        </div>
                        <div class="best-seller-name">Emerald Pendant</div>
                        <div class="best-seller-price">399,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?auto=format&fit=crop&w=800&q=80" alt="Ruby Earrings">
                        </div>
                        <div class="best-seller-name">Ruby Earrings</div>
                        <div class="best-seller-price">899,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1588444837495-c6cfeb53f32d?auto=format&fit=crop&w=800&q=80" alt="Gold Heart Necklace">
                        </div>
                        <div class="best-seller-name">Gold Heart Necklace</div>
                        <div class="best-seller-price">499,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=800&q=80" alt="Silver Bracelet">
                        </div>
                        <div class="best-seller-name">Silver Bracelet</div>
                        <div class="best-seller-price">299,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?auto=format&fit=crop&w=800&q=80" alt="Pearl Necklace">
                        </div>
                        <div class="best-seller-name">Pearl Necklace</div>
                        <div class="best-seller-price">399,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1588444837495-c6cfeb53f32d?auto=format&fit=crop&w=800&q=80" alt="Gold Heart Necklace 2">
                        </div>
                        <div class="best-seller-name">Gold Heart Necklace 2</div>
                        <div class="best-seller-price">499,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=800&q=80" alt="Sapphire Ring 2">
                        </div>
                        <div class="best-seller-name">Sapphire Ring 2</div>
                        <div class="best-seller-price">299,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?auto=format&fit=crop&w=800&q=80" alt="Emerald Pendant 2">
                        </div>
                        <div class="best-seller-name">Emerald Pendant 2</div>
                        <div class="best-seller-price">399,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?auto=format&fit=crop&w=800&q=80" alt="Ruby Earrings 2">
                        </div>
                        <div class="best-seller-name">Ruby Earrings 2</div>
                        <div class="best-seller-price">899,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1588444837495-c6cfeb53f32d?auto=format&fit=crop&w=800&q=80" alt="Gold Heart Necklace 3">
                        </div>
                        <div class="best-seller-name">Gold Heart Necklace 3</div>
                        <div class="best-seller-price">499,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=800&q=80" alt="Sapphire Ring 3">
                        </div>
                        <div class="best-seller-name">Sapphire Ring 3</div>
                        <div class="best-seller-price">299,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?auto=format&fit=crop&w=800&q=80" alt="Emerald Pendant 3">
                        </div>
                        <div class="best-seller-name">Emerald Pendant 3</div>
                        <div class="best-seller-price">399,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                    <div class="best-seller-card">
                        <div class="best-seller-image">
                            <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?auto=format&fit=crop&w=800&q=80" alt="Ruby Earrings 3">
                        </div>
                        <div class="best-seller-name">Ruby Earrings 3</div>
                        <div class="best-seller-price">899,00 €</div>
                        <div class="best-seller-actions">
                            <button class="best-seller-btn-main">View Details</button>
                            <button class="best-seller-btn-cart" title="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                        </div>
                    </div>
                </div>
                <button class="best-seller-arrow featured-arrow-right" type="button" aria-label="Scroll right">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="12,8 20,16 12,24" fill="#c9a96e"/>
                    </svg>
                </button>
            </div> 
            <div class="best-seller-indicators" id="featuredCollectionIndicators"></div>
        </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.getElementById('featuredCollectionCarousel');
        const leftArrow = document.querySelector('.featured-arrow-left');
        const rightArrow = document.querySelector('.featured-arrow-right');
        const indicators = document.getElementById('featuredCollectionIndicators');
        const cards = carousel.querySelectorAll('.best-seller-card');
        const productsPerPage = 5;
        const totalPages = 3;
        let currentPage = 0;
        function showPage(page) {
            cards.forEach((card, i) => {
                card.style.display = (i >= page * productsPerPage && i < (page + 1) * productsPerPage) ? 'flex' : 'none';
            });
            dots.forEach((dot, i) => dot.classList.toggle('active', i === page));
        }
        indicators.innerHTML = '';
        for (let i = 0; i < totalPages; i++) {
            const dot = document.createElement('button');
            dot.className = 'best-seller-dot' + (i === 0 ? ' active' : '');
            dot.addEventListener('click', function() {
                currentPage = i;
                showPage(currentPage);
            });
            indicators.appendChild(dot);
        }
        const dots = indicators.querySelectorAll('.best-seller-dot');
        leftArrow.addEventListener('click', function() {
            if (currentPage > 0) {
                currentPage--;
                showPage(currentPage);
            }
        });
        rightArrow.addEventListener('click', function() {
            if (currentPage < totalPages - 1) {
                currentPage++;
                showPage(currentPage);
            }
        });
        showPage(currentPage);
    });
    </script>
    <!-- Features Section -->
    <section class="features" style="margin-bottom:0; padding-bottom:0;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-gem"></i>
                        </div>
                        <h3>Premium Quality</h3>
                        <p>Each piece is crafted with the finest materials and attention to detail.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h3>Shipping In</h3>
                        <p>KS 2€ AL 5€ and MK 5€</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-ban"></i>
                        </div>
                        <h3>Return Policy</h3>
                        <p>No returns</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection