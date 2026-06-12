@extends('layout')
@section('content')

    <!-- Product Detail Content -->
    <div class="product-detail-container">
        <div class="product-image">
            <img id="mainProductImage" src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?auto=format&fit=crop&w=800&q=80" alt="Pearl Necklace">
            <div class="product-thumbs">
                <img src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?auto=format&fit=crop&w=800&q=80" class="active product-thumb" data-img="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?auto=format&fit=crop&w=800&q=80" alt="Thumb 1">
                <img src="https://images.unsplash.com/photo-1588444837495-c6cfeb53f32d?auto=format&fit=crop&w=800&q=80" class="product-thumb" data-img="https://images.unsplash.com/photo-1588444837495-c6cfeb53f32d?auto=format&fit=crop&w=800&q=80" alt="Thumb 2">
                <img src="https://images.unsplash.com/photo-1573408301185-9146fe634ad0?auto=format&fit=crop&w=800&q=80" class="product-thumb" data-img="https://images.unsplash.com/photo-1573408301185-9146fe634ad0?auto=format&fit=crop&w=800&q=80" alt="Thumb 3">
            </div>
        </div>
        <div class="product-info">
            <div class="product-title">Pearl Necklace</div>
            <div class="product-sku">SKU: PN-001</div>
            <div class="product-price">$299</div>
            <div class="product-desc">
                This elegant pearl necklace is crafted with the finest freshwater pearls and a delicate gold chain. Perfect for special occasions or everyday luxury, it adds a touch of sophistication to any outfit.
            </div>
            <form class="product-actions">
                <input type="number" class="quantity-input" value="1" min="1">
                <button type="submit" class="btn-addcart">Add to cart</button>
            </form>
            <div style="margin-top: 12px; color: #888; font-size: 1rem;">
                <i class="fas fa-shipping-fast"></i> Free shipping on orders over $500
            </div>
        </div>
    </div>

    <!-- You may also like section as a carousel -->
    <section class="container my-5">
        <h3 style="font-family:'Playfair Display',serif;font-weight:700;font-size:2rem;margin-bottom:32px;color:#222b3a;">You may also like</h3>
        <div id="youMayAlsoLikeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center g-4">
                        <div class="col-12 col-md-3">
                            <div class="card h-100 shadow-sm border-0" style="border-radius:18px;overflow:hidden;">
                                <img src="https://images.unsplash.com/photo-1588444837495-c6cfeb53f32d?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Gold Heart Necklace" style="object-fit:cover;height:180px;">
                                <div class="card-body text-center">
                                    <h5 class="card-title" style="font-family:'Playfair Display',serif;font-size:1.1rem;font-weight:600;">Gold Heart Necklace</h5>
                                    <a href="#" class="btn btn-custom mt-2" style="font-size:1rem;padding:10px 28px;border-radius:22px;">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card h-100 shadow-sm border-0" style="border-radius:18px;overflow:hidden;">
                                <img src="https://images.unsplash.com/photo-1573408301185-9146fe634ad0?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Diamond Bracelet" style="object-fit:cover;height:180px;">
                                <div class="card-body text-center">
                                    <h5 class="card-title" style="font-family:'Playfair Display',serif;font-size:1.1rem;font-weight:600;">Diamond Bracelet</h5>
                                    <a href="#" class="btn btn-custom mt-2" style="font-size:1rem;padding:10px 28px;border-radius:22px;">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card h-100 shadow-sm border-0" style="border-radius:18px;overflow:hidden;">
                                <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Ruby Earrings" style="object-fit:cover;height:180px;">
                                <div class="card-body text-center">
                                    <h5 class="card-title" style="font-family:'Playfair Display',serif;font-size:1.1rem;font-weight:600;">Ruby Earrings</h5>
                                    <a href="#" class="btn btn-custom mt-2" style="font-size:1rem;padding:10px 28px;border-radius:22px;">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card h-100 shadow-sm border-0" style="border-radius:18px;overflow:hidden;">
                                <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Sapphire Ring" style="object-fit:cover;height:180px;">
                                <div class="card-body text-center">
                                    <h5 class="card-title" style="font-family:'Playfair Display',serif;font-size:1.1rem;font-weight:600;">Sapphire Ring</h5>
                                    <a href="#" class="btn btn-custom mt-2" style="font-size:1rem;padding:10px 28px;border-radius:22px;">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center g-4">
                        <div class="col-12 col-md-3">
                            <div class="card h-100 shadow-sm border-0" style="border-radius:18px;overflow:hidden;">
                                <img src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Pearl Necklace" style="object-fit:cover;height:180px;">
                                <div class="card-body text-center">
                                    <h5 class="card-title" style="font-family:'Playfair Display',serif;font-size:1.1rem;font-weight:600;">Pearl Necklace</h5>
                                    <a href="#" class="btn btn-custom mt-2" style="font-size:1rem;padding:10px 28px;border-radius:22px;">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card h-100 shadow-sm border-0" style="border-radius:18px;overflow:hidden;">
                                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Silver Bracelet" style="object-fit:cover;height:180px;">
                                <div class="card-body text-center">
                                    <h5 class="card-title" style="font-family:'Playfair Display',serif;font-size:1.1rem;font-weight:600;">Silver Bracelet</h5>
                                    <a href="#" class="btn btn-custom mt-2" style="font-size:1rem;padding:10px 28px;border-radius:22px;">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card h-100 shadow-sm border-0" style="border-radius:18px;overflow:hidden;">
                                <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Sapphire Ring" style="object-fit:cover;height:180px;">
                                <div class="card-body text-center">
                                    <h5 class="card-title" style="font-family:'Playfair Display',serif;font-size:1.1rem;font-weight:600;">Sapphire Ring</h5>
                                    <a href="#" class="btn btn-custom mt-2" style="font-size:1rem;padding:10px 28px;border-radius:22px;">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card h-100 shadow-sm border-0" style="border-radius:18px;overflow:hidden;">
                                <img src="https://images.unsplash.com/photo-1573408301185-9146fe634ad0?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Diamond Bracelet" style="object-fit:cover;height:180px;">
                                <div class="card-body text-center">
                                    <h5 class="card-title" style="font-family:'Playfair Display',serif;font-size:1.1rem;font-weight:600;">Diamond Bracelet</h5>
                                    <a href="#" class="btn btn-custom mt-2" style="font-size:1rem;padding:10px 28px;border-radius:22px;">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev cute-arrow" type="button" data-bs-target="#youMayAlsoLikeCarousel" data-bs-slide="prev" style="width:54px;height:54px;border-radius:50%;background:rgba(255,255,255,0.95);box-shadow:0 2px 8px rgba(231,84,128,0.10);border:none;display:flex;align-items:center;justify-content:center;transition:background 0.2s,box-shadow 0.2s;position:absolute;top:50%;left:-54px;transform:translateY(-50%);z-index:2;">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <polygon points="26,6 12,18 26,30" fill="#e75480" stroke="#e75480" stroke-width="2"/>
                </svg>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next cute-arrow" type="button" data-bs-target="#youMayAlsoLikeCarousel" data-bs-slide="next" style="width:54px;height:54px;border-radius:50%;background:rgba(255,255,255,0.95);box-shadow:0 2px 8px rgba(231,84,128,0.10);border:none;display:flex;align-items:center;justify-content:center;transition:background 0.2s,box-shadow 0.2s;position:absolute;top:50%;right:-54px;transform:translateY(-50%);z-index:2;">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <polygon points="10,6 24,18 10,30" fill="#e75480" stroke="#e75480" stroke-width="2"/>
                </svg>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Product image thumbnail click handler
        document.querySelectorAll('.product-thumb').forEach(function(thumb) {
            thumb.addEventListener('click', function() {
                // Update main image
                document.getElementById('mainProductImage').src = this.dataset.img;
                // Update active class
                document.querySelectorAll('.product-thumb').forEach(function(t) {
                    t.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    </script>
@endsection
