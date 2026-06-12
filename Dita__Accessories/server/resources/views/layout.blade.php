<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dita Accessories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg main-navbar">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('images/IMG_3930.png') }}" alt="Dita Accessories Logo" style="height:80px;width:auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('newarrivals') }}">New Arrivals</a></li>
                
                    <li class="nav-item position-relative accessories-mega-menu-trigger">
                        <a class="nav-link" href="#" id="accessoriesDropdown" role="button">Accessories <i class="fas fa-chevron-down" style="font-size:0.9em;"></i></a>
                        <div class="accessories-mega-menu" style="display:none;">
                            <div class="d-flex justify-content-center align-items-end gap-5 p-4" style="background:linear-gradient(180deg,#faf9f6 60%,#f5f7fa 100%);border-radius:0 0 24px 24px;box-shadow:0 8px 32px rgba(34,43,58,0.10);">
                                <div class="text-center cat-popup-item">
                                    <img src='{{ asset('images/tasbih.png') }}' class='cat-popup-img' alt='Earrings'>
                                    <div class='cat-popup-label'>TASBIH</div>
                                </div>
                                <div class="text-center cat-popup-item">
                                    <img src='{{ asset('images/hats.png') }}' class='cat-popup-img' alt='Necklaces'>
                                    <div class='cat-popup-label'>HATS</div>
                                </div>
                                <div class="text-center cat-popup-item">
                                    <img src='{{ asset('images/watch.png') }}' class='cat-popup-img' alt='Rings'>
                                    <div class='cat-popup-label'>SMARTWATCHES</div>
                                </div>
                                <div class="text-center cat-popup-item">
                                    <img src='{{ asset('images/lighter.png') }}' class='cat-popup-img' alt='Bracelets'>
                                    <div class='cat-popup-label'>LIGHTERS</div>
                                </div>
                                <div class="text-center cat-popup-item">
                                    <img src='{{ asset('images/glasses.png') }}' class='cat-popup-img' alt='Glasses'>
                                    <div class='cat-popup-label'>GLASSES</div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="d-flex ms-auto">
                    <a href="{{ route('login') }}" class="btn btn-link text-dark me-2"><i class="fas fa-user"></i></a>
                    <a href="{{ route('cart.index') }}" class="btn btn-link text-dark"><i class="fas fa-shopping-bag"></i></a>
            </div>
        </div>
    </nav>
    @yield('content')
     <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="mb-4">About Dita Accessories</h5>
                    <p>We create timeless, handcrafted accessories that embody luxury and elegance. Each piece tells a story of craftsmanship and sophistication.</p>
                    <div class="social-icons mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4">
                    <h5>Shop</h5>
                    <div class="footer-links">
                        <a href="#">All Products</a>
                        <a href="#">New Arrivals</a>
                        <a href="#">Special Offers</a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4">
                    <h5>Information</h5>
                    <div class="footer-links">
                        <a href="#">About Us</a>
                        <a href="#">Contact Us</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms & Conditions</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mb-4">
                    <h5>Newsletter</h5>
                    <p>Subscribe to receive updates on new collections and exclusive offers.</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control newsletter-input" placeholder="Your email address">
                        <button class="btn newsletter-btn" type="button">Subscribe</button>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <p class="mb-0">&copy; 2023 Dita Accessories. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
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
})
.then(res => res.json())
.then(data => {
  if (data.success) alert('Added to cart!');
  else alert('Failed: ' + (data.message || 'Unknown error'));
})
.catch(() => alert('Error adding to cart.'));

});




    </script>
</body>
</html>
