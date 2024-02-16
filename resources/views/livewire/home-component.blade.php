<div>
    <main class="main">
        <!-- Menampilkan slider -->
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                @foreach($slides as $slide)
                    <div class="single-hero-slider single-animation-wrap">
                        <div class="container">
                            <div class="row align-items-center slider-animated-1">
                                <div class="col-lg-5 col-md-6">
                                    <div class="hero-slider-content-2">
                                        <h4 class="animated">{{ $slide->top_title }}</h4>
                                        <h2 class="animated fw-900">{{ $slide->title }}</h2>
                                        <h1 class="animated fw-900 text-brand">{{ $slide->sub_title }}</h1>
                                        <p class="animated">{{ $slide->offer }}</p>
                                        <a class="animated btn btn-brush btn-brush-3" href="{{ $slide->link }}"> Shop Now </a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="single-slider-img single-slider-img-1">
                                        <img class="animated slider-1-1" src="{{ asset('assets/imgs/slider') }}/{{ $slide->image }}" alt="{{ $slide->title }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>
        <!-- Kelebihan toko online kami -->
        <section class="featured section-padding position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-1.png" draggable="false">
                            <h4 class="bg-1">Free Shipping</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-2.png" draggable="false">
                            <h4 class="bg-3">Online Order</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-3.png" draggable="false">
                            <h4 class="bg-2">Save Money</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-4.png" draggable="false">
                            <h4 class="bg-4">Promotions</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-5.png" draggable="false">
                            <h4 class="bg-5">Happy Sell</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-6.png" draggable="false">
                            <h4 class="bg-6">24/7 Support</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Menampilkan featured produk -->
        <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            @foreach($fproducts as $fproduct)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details', ['slug'=>$fproduct->slug]) }}">
                                                    <img class="default-img" src="{{ asset('assets/imgs/products')}}/{{ $fproduct->image }}" height="250">
                                                </a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html"></a>
                                            </div>
                                            <h2><a href="{{ route('product.details', ['slug'=>$fproduct->slug]) }}">{{ $fproduct->name }}</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>15%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>Rp{{ number_format($fproduct->regular_price, 0) }} </span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="#" wire:click.prevent="store({{$fproduct->id}}, '{{$fproduct->name}}', {{$fproduct->regular_price}})"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Menampilkan kategori produk -->
        <section class="popular-categories section-padding mt-15 mb-25">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Popular</span> Categories</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        @foreach($pcategories as $pcategory)
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="{{ route('product.category', ['slug'=>$pcategory->slug]) }}"><img src="{{ asset('assets/imgs/categories') }}/{{$pcategory->image}}" alt="{{ $pcategory->name }}" height="170"></a>
                            </figure>
                            <h5><a href="{{ route('product.category', ['slug'=>$pcategory->slug]) }}">{{ $pcategory->name }}</a></h5>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- Menampilkan produk baru -->
        <section class="section-padding">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>New</span> Arrivals</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows"></div>
                    <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                        @foreach($lproducts as $lproduct)
                            <div class="product-cart-wrap small hover-up">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('product.details', ['slug'=>$lproduct->slug]) }}">
                                            <img class="default-img" src="{{ asset('assets/imgs/products')}}/{{ $lproduct->image }}" height="200">
                                        </a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <h2><a href="{{ route('product.details', ['slug'=>$lproduct->slug]) }}">{{ $lproduct->name }}</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>Rp{{ number_format($lproduct->regular_price, 0) }} </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- Menampilkan brand produk -->
        <section class="section-padding">
            <div class="container">
                <h3 class="section-title mb-20 wow fadeIn animated"><span>Featured</span> Brands</h3>
                <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-3-arrows"></div>
                    <div class="carausel-6-columns text-center" id="carausel-6-columns-3">
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-1.webp">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-2.svg">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-3.svg">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-4.png">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-6.png">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-7.webp">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-5.png">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-8.png">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-9.png" style="width: 60%;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>