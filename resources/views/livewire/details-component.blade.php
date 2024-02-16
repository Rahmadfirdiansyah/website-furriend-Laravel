<div>
    <main class="main">
        <!-- Header halaman dengan breadcrumb -->
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Product
                    <span></span> {{ $product->name }}
                </div>
            </div>
        </div>
        <!-- Bagian utama konten produk -->
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery" wire:ignore>
                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                        <!-- Main Slides -->
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                            <img src="{{ asset('assets/imgs/products')}}/{{ $product->image }}" width="404px">
                                            </figure>
                                        </div>
                                        <!-- Thumbnails -->
                                        <div class="slider-nav-thumbnails pl-15 pr-15">
                                            <div><img src="{{ asset('assets/imgs/products')}}/{{ $product->image }}"></div>
                                        </div>
                                    </div>
                                    <!-- Ikon media sosial dan bagikan -->
                                    <div class="social-icons single-share">
                                        <ul class="text-grey-5 d-inline-block">
                                            <li><strong class="mr-10">Share this:</strong></li>
                                            <li class="social-facebook"><a><img src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}" draggable="false"></a></li>
                                            <li class="social-twitter"><a><img src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg') }}" draggable="false"></a></li>
                                            <li class="social-instagram"><a><img src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg') }}" draggable="false"></a></li>
                                            <li class="social-pinterest"><a><img src="{{ asset('assets/imgs/theme/icons/icon-pinterest.svg') }}" draggable="false"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Kolom informasi produk -->
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <!-- Judul produk -->
                                        <h2 class="title-detail">{{ $product->name }}</h2>
                                        <div class="product-detail-rating"></div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span class="text-brand">Rp{{ number_format($product->regular_price, 0) }}</span></ins>
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="short-desc mb-30">
                                            <p>{{ $product->short_description }}</p>
                                        </div>
                                        <div class="attr-detail attr-color mb-15"></div>
                                        <div class="attr-detail attr-size"></div>
                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                        <!-- Tombol untuk kuantitas dan tombol tambah ke keranjang -->
                                        <div class="detail-extralink">
                                            <div class="detail-qty border radius">
                                                <a href="#" class="qty-down" wire:click.prevent="decreaseQuantity"><i class="fi-rs-angle-small-down"></i></a>
                                                <span class="qty-val" wire:model="quantity">{{ $quantity }}</span>
                                                <a href="#" class="qty-up" wire:click.prevent="increaseQuantity"><i class="fi-rs-angle-small-up"></i></a>
                                            </div>
                                            <div class="product-extra-link2">
                                                <button type="button" class="button button-add-to-cart" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})">Add to cart</button>
                                            </div>
                                        </div>
                                        <!-- Metadata produk seperti SKU, Tag, dan Ketersediaan -->
                                        <ul class="product-meta font-xs color-grey mt-50">
                                            <li class="mb-5">SKU: <a>{{ $product->SKU }}</a></li>
                                            @if(isset($category))
                                                <li class="mb-5">Tags: <a href="{{ route('product.category', ['slug'=>$category->slug]) }}">{{ $category->name }}</a></li>
                                            @endif
                                            <li>Availability:<span class="in-stock text-success ml-5">{{ $product->quantity }}</span></li>
                                        </ul>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <!-- Deskripsi produk -->
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                    </li>
                                </ul>
                                <div class="tab-content shop_info_tab entry-main-content">
                                    <div class="tab-pane fade show active" id="Description">
                                        <div class="">
                                            {{ $product->description }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Produk terkait -->
                            <div class="row mt-60">
                                <div class="col-12">
                                    <h3 class="section-title style-1 mb-30">Related products</h3>
                                </div>
                                <div class="col-12">
                                    <div class="row related-products">
                                        @foreach($rproducts as $rproduct)
                                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap small hover-up">
                                                <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('product.details', ['slug'=>$rproduct->slug]) }}" tabindex="0">
                                                        <img class="default-img" src="{{ asset('assets/imgs/products')}}/{{ $rproduct->image }}" height="200">
                                                    </a>
                                                </div>
                                                    <div class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="hot">Hot</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a href="{{ route('product.details', ['slug'=>$rproduct->slug]) }}" tabindex="0">{{ $rproduct->name }}</a></h2>
                                                    <div class="rating-result" title="90%">
                                                        <span></span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>Rp{{ number_format($rproduct->regular_price, 0) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Kolom sidebar dengan daftar kategori -->
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                            @foreach($categories as $category)
                                <li><a href="{{ route('product.category', ['slug'=>$category->slug]) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>