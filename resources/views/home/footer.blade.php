<footer class="bg-dark text-white pt-5 pb-3">
    <div class="container">
        <div class="row">
            <!-- Company Info -->
            <div class="col-md-4 mb-4">
                <div class="logo_footer mb-3">
                    <a href="{{ url('/') }}">
                        <img width="210" src="{{ asset('images/bg-2.jpg') }}" alt="OutFit Shop Logo" class="img-fluid rounded" />
                    </a>
                </div>
                <div class="information_f">
                    <p class="mb-2">
                        <i class="fas fa-map-marker-alt me-2"></i> 
                        <span>Sudan - Khartoum - East Of the Nile</span>
                    </p>
                    <p class="mb-2">
                        <i class="fas fa-phone-alt me-2"></i> 
                        <a href="tel:+249993147029" class="text-white text-decoration-none">+249 99 314 7029</a>
                    </p>
                    <p class="mb-0">
                        <i class="fas fa-envelope me-2"></i> 
                        <a href="mailto:mhmh4729@gmail.com" class="text-white text-decoration-none">mhmh4729@gmail.com</a>
                    </p>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4 col-6 mb-4">
                <h5 class="mb-4">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="{{ url('/') }}" class="text-white-50 text-decoration-none hover-text-white">
                            <i class="fas fa-chevron-right small me-1"></i> Home
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('show_cart') }}" class="text-white-50 text-decoration-none hover-text-white">
                            <i class="fas fa-chevron-right small me-1"></i> My Cart
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('show_order') }}" class="text-white-50 text-decoration-none hover-text-white">
                            <i class="fas fa-chevron-right small me-1"></i> My Orders
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('product_search') }}" class="text-white-50 text-decoration-none hover-text-white">
                            <i class="fas fa-chevron-right small me-1"></i> Search Products
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="col-md-4 mb-4">
                <h5 class="mb-4">Newsletter</h5>
                <p class="text-white-50">Subscribe to our newsletter for the latest updates and offers.</p>
                <form action="#" method="POST" class="mt-4">
                    @csrf
                    <div class="input-group">
                        <input type="email" name="email" class="form-control bg-dark text-white border-secondary" 
                               placeholder="Your email address" required>
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
                <div class="social-links mt-4">
                    <h6 class="mb-3">Follow Us</h6>
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <hr class="bg-secondary">
        <div class="row">
            <div class="col-12 text-center">
                <p class="mb-0">
                    &copy; {{ date('Y') }} 
                    <a href="{{ url('/') }}" class="text-white text-decoration-none">OutFit_Shope</a>. 
                    All Rights Reserved.
                </p>
                <p class="small text-white-50 mt-2">
                    Developed by 
                    <a href="https://mester_khalid.com/" target="_blank" class="text-white text-decoration-underline">
                        Mester Khalid
                    </a>
                </p>
            </div>
        </div>
    </div>
</footer>