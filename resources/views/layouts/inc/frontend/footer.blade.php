<div>
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-heading">
                      <a href="{{ url('/') }}"><img width="210" src="{{ asset('assets/images/newlogomotomart.png') }}" alt="#" /></a>
                    </div>
                    <div class="footer-underline"></div>

             </div>
                <div class="col-md-3">
                    <h4 class="footer-heading">Quick Links</h4>
                    <div class="footer-underline"></div>
                    <div class="mb-2"><a href="{{ url('/') }}" class="text-white">Home</a></div>
                    <div class="mb-2"><a href="{{ url('/about-us') }}" class="text-white">About Us</a></div>
                    <div class="mb-2"><a href="{{ url('/contact') }}" class="text-white">Contact Us</a></div>
                    <div class="mb-2"><a href="{{ url('/forum') }}" class="text-white">Forum</a></div>
                    <div class="mb-2"><a href="{{ url('/sitemap') }}" class="text-white">Sitemaps</a></div>
                    <div class="mb-2"><a href="{{ url('/sellercenter/dashboard') }}" class="text-white">Seller Center</a></div>
                </div>
                <div class="col-md-3">
                    <h4 class="footer-heading">Shop Now</h4>
                    <div class="footer-underline"></div>
                    <div class="mb-2"><a href="{{ url('/collections') }}" class="text-white">Collections</a></div>
                    {{-- <div class="mb-2"><a href="{{ url('/trending-products') }}" class="text-white">Trending Products</a></div> --}}
                    <div class="mb-2"><a href="{{ url('/new-arrivals') }}" class="text-white">New Arrivals Products</a></div>
                    <div class="mb-2"><a href="{{ url('/featured-products') }}" class="text-white">Featured Products</a></div>
                    <div class="mb-2"><a href="{{ url('/cart') }}" class="text-white">Cart</a></div>
                </div>
                <div class="col-md-3">
                    <h4 class="footer-heading">Reach Us</h4>
                    <div class="footer-underline"></div>
                    <div class="mb-2">
                        <p>
                            <i class="fa fa-map-marker"></i> {{ $appSetting->address ?? 'address' }}
                        </p>
                    </div>
                    <div class="mb-2">
                        <a href="" class="text-white">
                            <i class="fa fa-phone"></i> {{ $appSetting->phone1 ?? 'phone 1' }}
                        </a>
                    </div>
                    <div class="mb-2">
                        <a href="" class="text-white">
                            <i class="fa fa-envelope"></i> {{ $appSetting->email1 ?? 'email 1' }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class=""> &copy; 2024 - Motomart. All rights reserved.</p>
                </div>
                <div class="col-md-4">
                    {{-- <div class="social-media">
                        <label class="text-white">Get Connected:</label>
                        {{ $appSetting->address ?? 'address' }}
                        @if($appSetting->facebook)
                            <a href="{{ $appSetting->facebook }}" target="_blank"><i class="fa-brands fa-square-facebook" style="color: #74C0FC;"></i></a>
                        @endif

                        @if($appSetting->twitter)
                            <a href="{{ $appSetting->twitter }}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                        @endif

                        @if($appSetting->instagram)
                            <a href="{{ $appSetting->instagram }}" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                        @endif

                        @if($appSetting->youtube)
                            <a href="{{ $appSetting->instagram }}" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                        @endif



                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
