<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>Furriend</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imgs/theme/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    @livewireStyles
</head>
<body>
    <header class="header-area header-style-1 header-height-2">
        <!-- Bagian header atas dengan informasi pengguna atau tautan login/registrasi -->
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-4"></div>
                    <div class="col-xl-4 col-lg-4"></div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="header-info header-info-right">
                            @auth
                            <ul>                                
                                <li><i class="fi-rs-user"></i> {{ Auth::user()->name }}
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"><strong>Logout</strong></a>
                                    </form>
                                </li>
                            </ul>
                            @else
                            <ul>                                
                                <li><a href="{{ route('login') }}">Log In </a>   |   <a href="{{ route('register') }}">Sign Up</a></li>
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bagian header tengah dengan logo, pencarian, ikon wishlist, dan keranjang -->
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="/"><img src="{{ asset('assets/imgs/logo/logo.png') }}" alt="Logo"></a>
                    </div>
                    <div class="header-right">
                        @livewire('header-search-component')
                        <div class="header-action-right">
                            <div class="header-action-2">
                                @livewire('wishlist-icon-component')
                                @livewire('cart-icon-component')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bagian header bawah dengan menu navigasi -->
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="/"><img src="{{ asset('assets/imgs/logo/logo.png') }}" alt="Logo"></a>
                    </div>
                    <!-- Menu navigasi utama -->
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block mx-auto">
                        <nav>
                            <ul>
                                <li><a class="{{ request()->routeIs('home.index') ? 'active' : '' }}" href="{{ route('home.index') }}">Home</a></li>
                                <li><a class="{{ request()->routeIs('shop') ? 'active' : '' }}" href="{{ route('shop') }}">Shop</a></li>
                                <li class="position-static"><a href="#">Categories <i class="fi-rs-angle-down"></i></a>
                                    <ul class="mega-menu">
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title">Anjing</a>
                                            <ul>
                                                <li><a href="/product-category/makanan-anjing-basah">Makanan Basah</a></li>
                                                <li><a href="/product-category/makanan-anjing-kering">Makanan Kering</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title">Kucing</a>
                                            <ul>
                                                <li><a href="/product-category/makanan-kucing-basah">Makanan Basah</a></li>
                                                <li><a href="/product-category/makanan-kucing-kering">Makanan Kering</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title">Mainan</a>
                                            <ul>
                                                <li><a href="/product-category/mainan-hewan">Mainan</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-34">
                                            <div class="menu-banner-wrap">
                                                <a href="{{ route('shop') }}"><img src="{{ asset('assets/imgs/banner/menu-banner.png') }}"></a>
                                                <div class="menu-banner-content">
                                                    <h4>Hot deals</h4>
                                                    <h3>Don't miss<br> Trending</h3>
                                                    <div class="menu-banner-price">
                                                        <span class="new-price text-success">Save 25%</span>
                                                    </div>
                                                    <div class="menu-banner-btn">
                                                        <a href="{{ route('shop') }}">Shop now</a>
                                                    </div>
                                                </div>
                                                <div class="menu-banner-discount">
                                                    <h3>
                                                        <span>25%</span>off
                                                    </h3>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="{{ request()->routeIs('blog') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a></li>
                                <li><a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                                <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                                @auth
                                    <li><a href="#">My Account <i class="fi-rs-angle-down"></i></a>
                                        @if(Auth::user()->utype == 'ADM')
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                                <li><a href="{{ route('admin.categories') }}">Categories</a></li>
                                                <li><a href="{{ route('admin.products') }}">Products</a></li>
                                                <li><a href="{{ route('admin.orders') }}">Orders</a></li>
                                                <li><a href="{{ route('admin.home.slider') }}">Sliders</a></li>
                                            </ul>
                                        @else
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                                <li><a href="{{ route('user.orders') }}">Orders</a></li>
                                            </ul>
                                        @endif
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                    <!-- Bagian header kanan -->
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            @livewire('wishlist-icon-component')
                            @livewire('cart-icon-component')
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Wrapper untuk header mobile -->
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="/"><img src="{{ asset('assets/imgs/logo/logo.png') }}" alt="Logo"></a>
                </div>
                <!-- Tombol untuk menutup menu mobile -->
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <!-- Pencarian untuk tampilan mobile -->
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search products…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <!-- Mobile Menu -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a class="{{ request()->routeIs('home.index') ? 'active' : '' }}" href="{{ route('home.index') }}">Home</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a class="{{ request()->routeIs('shop') ? 'active' : '' }}" href="{{ route('shop') }}">Shop</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Categories</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Anjing</a>
                                        <ul class="dropdown">
                                            <li><a href="/product-category/makanan-anjing-basah">Makanan Basah</a></li>
                                            <li><a href="/product-category/makanan-anjing-kering">Makanan Kering</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Kucing</a>
                                        <ul class="dropdown">
                                            <li><a href="/product-category/makanan-kucing-basah">Makanan Basah</a></li>
                                            <li><a href="/product-category/makanan-kucing-kering">Makanan Kering</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Mainan</a>
                                        <ul class="dropdown">
                                            <li><a href="/product-category/mainan-hewan">Mainan</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a class="{{ request()->routeIs('blog') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                            @auth
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">My Account</a>
                                    @if(Auth::user()->utype == 'ADM')
                                        <ul class="dropdown">
                                            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                            <li><a href="{{ route('admin.categories') }}">Categories</a></li>
                                            <li><a href="{{ route('admin.products') }}">Products</a></li>
                                            <li><a href="{{ route('admin.orders') }}">Orders</a></li>
                                            <li><a href="{{ route('admin.home.slider') }}">Sliders</a></li>
                                        </ul>
                                    @else
                                        <ul class="dropdown">
                                            <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                            <li><a href="{{ route('user.orders') }}">Orders</a></li>
                                        </ul>
                                    @endif
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
                <!-- Informasi pengguna untuk tampilan mobile -->
                <div class="mobile-header-info-wrap mobile-header-border">
                    @auth
                    <ul>                                
                        <li><i class="fi-rs-user"></i> {{ Auth::user()->name }}
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"><strong>Logout</strong></a>
                            </form>
                        </li>
                    </ul>
                    @else
                    <ul>                                
                        <li><a href="{{ route('login') }}">Log In </a>   |   <a href="{{ route('register') }}">Sign Up</a></li>
                    </ul>
                    @endif
                </div>
                <div class="mobile-social-icon">
                    <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}"></a>
                    <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg') }}"></a>
                    <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg') }}"></a>
                    <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-youtube.svg') }}"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Halaman konten utama yang akan ditampilkan -->
    {{$slot}}
    <!-- Menampilkan footer yang berisi contact, about, dan my account -->
    <footer class="main">
        <section class="section-padding footer-mid newsletter">
            <div class="container pt-10 pb-20">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget-about font-md mb-md-5 mb-lg-0">
                            <div class="logo logo-width-1 wow fadeIn animated">
                                <a href="/"><img src="{{ asset('assets/imgs/logo/logo.png') }}"></a>
                            </div>
                            <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                            <p class="wow fadeIn animated">
                                <strong>Address: </strong>Pasuruan
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Email: </strong>contact@furriend.io
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <h5 class="widget-title wow fadeIn animated">About</h5>
                        <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <h5 class="widget-title wow fadeIn animated">My Account</h5>
                        <ul class="footer-list wow fadeIn animated">
                            @auth
                                <li><a href="{{ Auth::user()->utype == 'ADM' ? route('admin.dashboard') : route('user.dashboard') }}">My Account</a></li>
                                <li><a href="{{ route('shop.wishlist') }}">My Wishlist</a></li>
                                <li><a href="{{ route('shop.cart') }}">View Cart</a></li>
                            @else
                                <li><a href="{{ route('login') }}">My Account</a></li>
                                <li><a href="{{ route('shop.wishlist') }}">My Wishlist</a></li>
                                <li><a href="{{ route('shop.cart') }}">View Cart</a></li>
                            @endauth
                        </ul>
                    </div>
                    <div class="col-lg-4 mob-center">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                                <p class="mb-20 mt-10 wow fadeIn animated">Secured Payment Gateways</p>
                                <img class="wow fadeIn animated" src="{{ asset('assets/imgs/theme/payment-method.png') }}" draggable="false">
                            </div>
                            <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0 mt-4">
                                <a><img src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}" draggable="false"></a>
                                <a><img src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg') }}" draggable="false"></a>
                                <a><img src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg') }}" draggable="false"></a>
                                <a><img src="{{ asset('assets/imgs/theme/icons/icon-youtube.svg') }}" draggable="false"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
<!-- Vendor JS-->
<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
<script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/images-loaded.js') }}"></script>
<script src="{{ asset('assets/js/plugins/isotope.js') }}"></script>
<script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.vticker-min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.theia.sticky.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.elevatezoom.js') }}"></script>
<!-- Template  JS -->
<script src="{{ asset('assets/js/main.js?v=3.3') }}"></script>
<script src="{{ asset('assets/js/shop.js?v=3.3') }}"></script>
@livewireScripts
@stack('scripts')
</body>
</html>