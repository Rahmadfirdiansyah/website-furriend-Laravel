<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12 mb-20">
                <!-- Pemberitahuan Pesanan -->
                @if(Session::has('order_message'))
                    <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <div class="row justify-content-between">
                            <div class="col-md-6 m-auto">
                                Order Details
                            </div>
                            <div class="col-md-6 text-end">
                                @if($order->status == 'ordered')
                                <a href="#" wire:click.prevent="cancelOrder" class="btn btn-success me-2">Cancel Order</a>
                                @endif
                                <!-- Tombol untuk Melihat Semua Pesanan Pengguna -->
                                <a href="{{route('user.orders')}}" class="btn btn-success">My Orders</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- Tabel untuk Menampilkan Detail Pesanan -->
                            <table class="table text-center clean">
                                <tr>
                                    <th><strong>Order Id:</strong></th>
                                    <td>{{$order->id}}</td>
                                    <th><strong>Order Date:</strong></th>
                                    <td>{{$order->created_at}}</td>
                                    <th><strong>Status:</strong></th>
                                    <td>{{$order->status}}</td>
                                    @if($order->status == "delivered")
                                    <th><strong>Delivery Date:</strong></th>
                                    <td>{{$order->delivered_date}}</td>
                                    @elseif($order->status == "canceled")
                                    <th><strong>Cancellation Date:</strong></th>
                                    <td>{{$order->canceled_date}}</td>
                                    @endif
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bagian untuk Menampilkan Rincian Pesanan -->
        <div class="row">
            <div class="col-md-12 mb-20">
                <div class="card">
                    <div class="card-header">
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                Ordered Items
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="box-title" style="padding: 20px 0;">Products</h4>
                        <div class="table-responsive">
                            <table class="table shopping-summery text-center clean">
                                <thead>
                                    <tr class="main-heading">
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Menampilkan Setiap Item yang Dipesan -->
                                    @foreach($order->orderItems as $item)
                                    <tr>
                                        <td class="image product-thumbnail"><img src="{{ asset('assets/imgs/products')}}/{{ $item->product->image }}" alt="#" draggable="false"></td>
                                        <td class="product-des product-name">
                                            <h5 class="product-name"><a href="{{ route('product.details', ['slug' => $item->product->slug]) }}">{{ $item->product->name }}</a></h5>
                                        </td>
                                        <td class="price" data-title="Price"><span>Rp{{ number_format($item->price, 0) }} </span></td>
                                        <td class="text-center" data-title="Stock">
                                            <div class="detail-qty border radius  m-auto">
                                                <h5>{{$item->quantity}}</h5>
                                            </div>
                                        </td>
                                        <td class="text-right" data-title="Cart">
                                            <span>Rp{{ number_format($item->price * $item->quantity, 0) }}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <h4 class="box-title" style="padding: 20px 0;">Order Summary</h4>
                        <div class="table-responsive">
                            <table class="table clean">
                                <tbody>
                                    <tr>
                                        <td class="cart_total_label">Total</td>
                                        <td class="cart_total_amount text-end"><strong><span class="font-xl fw-900 text-brand">Rp{{ number_format($order->total, 0) }}</span></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bagian untuk Menampilkan Rincian Pembayaran -->
        <div class="row">
            <div class="col-md-12 mb-20">
                <div class="card">
                    <div class="card-header">
                        Billing Details
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table clean">
                                <tr>
                                    <th><strong>First Name:</strong></th>
                                    <td>{{$order->firstname}}</td>
                                    <th><strong>Last Name:</strong></th>
                                    <td>{{$order->lastname}}</td>
                                </tr>
                                <tr>
                                    <th><strong>Phone:</strong></th>
                                    <td>{{$order->phone}}</td>
                                    <th><strong>Email:</strong></th>
                                    <td>{{$order->email}}</td>
                                </tr>
                                <tr>
                                    <th><strong>Address:</strong></th>
                                    <td>{{$order->address}}</td>
                                    <th><strong>City:</strong></th>
                                    <td>{{$order->city}}</td>
                                </tr>
                                <tr>
                                    <th><strong>Province:</strong></th>
                                    <td>{{$order->province}}</td>
                                    <th><strong>ZIP Code:</strong></th>
                                    <td>{{$order->zipcode}}</td>
                                </tr><tr><th></th><th></th><th></th><th></th></tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bagian untuk Menampilkan Rincian Transaksi -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Transaction
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table clean">
                                <tr>
                                    <th><strong>Transaction Mode:</strong></th>
                                    <td>{{$order->transaction->mode}}</td>
                                </tr>
                                <tr>
                                    <th><strong>Transaction Status:</strong></th>
                                    <td>{{$order->transaction->status}}</td>
                                </tr>
                                <tr>
                                    <th><strong>Transaction Date:</strong></th>
                                    <td>{{$order->transaction->created_at}}</td>
                                </tr><tr><th></th><th></th</tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>