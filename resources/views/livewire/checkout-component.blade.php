<div>
    <!-- Halaman checkout dengan formulir untuk pengisian detail pembayaran -->
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Checkout
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <!-- Formulir untuk melakukan pemesanan -->
                <form wire:submit.prevent="placeOrder">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-25">
                            <h4>Billing Details</h4>
                        </div>
                        <!-- Formulir untuk mengisi detail pemesanan -->
                        <form method="post">
                            <div class="form-group">
                                <input type="text" required="" name="fname" placeholder="First name *" wire:model="firstname">
                                @error('firstname') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" required="" name="lname" placeholder="Last name *" wire:model="lastname">
                                @error('lastname') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="billing_address" required="" placeholder="Address *" wire:model="address">
                                @error('address') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input required="" type="text" name="city" placeholder="City *" wire:model="city">
                                @error('city') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input required="" type="text" name="province" placeholder="Province *" wire:model="province">
                                @error('province') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input required="" type="text" name="zipcode" placeholder="Postcode *" wire:model="zipcode">
                                @error('zipcode') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input required="" type="text" name="phone" placeholder="Phone *" wire:model="phone">
                                @error('phone') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input required="" type="text" name="email" placeholder="Email address *" wire:model="email">
                                @error('email') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="order_review">
                            <div class="mb-20">
                                <h4>Your Orders</h4>
                            </div>
                            <div class="table-responsive order_table text-center">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Menampilkan daftar produk yang ada di keranjang -->
                                        @foreach(Cart::instance('cart')->content() as $item)
                                        <tr>
                                            <td class="image product-thumbnail"><img src="{{ asset('assets/imgs/products')}}/{{ $item->model->image }}" alt="#"></td>
                                            <td>
                                                <h5><a href="{{ route('product.details', ['slug' => $item->model->slug]) }}">{{ $item->model->name }}</a></h5> <span class="product-qty">×{{ $item->qty }}</span>
                                            </td>
                                            <td>Rp{{ number_format($item->subtotal, 0) }}</td>
                                        </tr>
                                        @endforeach
                                        <!-- Menampilkan total harga pesanan -->
                                        @if(Session::has('checkout'))
                                        <tr>
                                            <th>Total</th>
                                            <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900">Rp{{ Session::get('checkout')['total'] }}</span></td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                            <!-- Pilihan metode pembayaran -->
                            <div class="payment_method">
                                <div class="mb-25">
                                    <h4>Payment</h4>
                                </div>
                                <div class="payment_option">
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" value="cod" wire:model="paymentmode">
                                        <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#cashOnDelivery" aria-controls="cashOnDelivery">Cash on Delivery</label>                                        
                                    </div>
                                    @error('paymentmode') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-fill-out btn-block mt-30">Order</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </section>
    </main>
</div>