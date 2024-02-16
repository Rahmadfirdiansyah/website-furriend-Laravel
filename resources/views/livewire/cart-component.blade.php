<div>
    <!-- Bagian utama halaman keranjang belanja -->
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Your Cart
                </div>
            </div>
        </div>
        <!-- Menampilkan konten keranjang belanja -->
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            @if(Session::has('success_message'))
                                <div class="alert alert-success">
                                    <strong>Success | {{ Session::get('success_message') }}</strong>
                                </div>
                            @endif
                            <!-- Cek apakah keranjang belanja tidak kosong -->
                            @if(Cart::instance('cart')->count() > 0)
                            <table class="table shopping-summery text-center clean">
                                <thead>
                                    <tr class="main-heading">
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Subtotal</th>
                                        <th scope="col">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Looping untuk setiap item di keranjang -->
                                    @foreach(Cart::instance('cart')->content() as $item)
                                    <tr>
                                        <td class="image product-thumbnail"><img src="{{ asset('assets/imgs/products')}}/{{ $item->model->image }}" alt="#"></td>
                                        <td class="product-des product-name">
                                            <h5 class="product-name"><a href="{{ route('product.details', ['slug' => $item->model->slug]) }}">{{ $item->model->name }}</a></h5>
                                        </td>
                                        <td class="price" data-title="Price"><span>Rp{{ number_format($item->model->regular_price, 0) }} </span></td>
                                        <td class="text-center" data-title="Stock">
                                            <div class="detail-qty border radius  m-auto">
                                                <a href="#" class="qty-down" wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')"><i class="fi-rs-angle-small-down"></i></a>
                                                <span class="qty-val">{{ $item->qty }} </span>
                                                <a href="#" class="qty-up" wire:click.prevent="increaseQuantity('{{ $item->rowId }}')"><i class="fi-rs-angle-small-up"></i></a>
                                            </div>
                                        </td>
                                        <td class="text-right" data-title="Cart">
                                            <span>Rp{{ number_format($item->subtotal, 0) }}</span>
                                        </td>
                                        <td class="action" data-title="Remove"><a href="#" class="text-muted" wire:click.prevent="destroy('{{ $item->rowId }}')"><i class="fi-rs-trash"></i></a></td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="6" class="text-end">
                                            <a href="#" class="text-muted" wire:click.prevent="clearAll()"><i class="fi-rs-cross-small"></i> Clear Cart</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- Tampilkan pesan jika keranjang kosong -->
                            @else
                                <p>No item in cart</p>
                            @endif
                        </div>
                        <!-- Tombol untuk melanjutkan berbelanja -->
                        <div class="cart-action text-end">
                            <a href="{{ route('shop') }}" class="btn "><i class="fi-rs-shopping-bag mr-10"></i>Continue Shopping</a>
                        </div>
                        <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
                        <!-- Baris untuk menampilkan ringkasan total pembelian -->
                        <div class="row mb-50">
                            <div class="offset-lg-3 col-lg-6 col-md-12">
                                <div class="border p-md-4 p-30 border-radius cart-totals">
                                    <div class="heading_s1 mb-3">
                                        <h4>Cart Totals</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="cart_total_label">Total</td>
                                                    <td class="cart_total_amount"><strong><span class="font-xl fw-900 text-brand">Rp{{ Cart::total() }}</span></strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Tombol untuk menuju ke halaman checkout -->
                                    <a href="#" class="btn" wire:click.prevent="checkout"><i class="fi-rs-box-alt mr-10"></i> Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>