<?php
use Illuminate\Support\Facades\Route;

// Route untuk Halaman Utama
Route::get('/', App\Http\Livewire\HomeComponent::class)->name('home.index');

// Route untuk Halaman Blog
Route::get('/blog', App\Http\Livewire\BlogComponent::class)->name('blog');
Route::get('/blog/{slug}', App\Http\Livewire\BlogPostComponent::class)->name('blog.post');

// Route untuk Halaman Kontak
Route::get('/contact', App\Http\Livewire\ContactComponent::class)->name('contact');

// Route untuk Halaman Tentang Kami
Route::get('/about', App\Http\Livewire\AboutComponent::class)->name('about');

// Route untuk Halaman Toko
Route::get('/shop', App\Http\Livewire\ShopComponent::class)->name('shop');

// Route untuk Halaman Detail Produk
Route::get('/product/{slug}', App\Http\Livewire\DetailsComponent::class)->name('product.details');

// Route untuk Halaman Keranjang Belanja
Route::get('/cart', App\Http\Livewire\CartComponent::class)->name('shop.cart');

// Route untuk Halaman Wishlist
Route::get('/wishlist', App\Http\Livewire\WishlistComponent::class)->name('shop.wishlist');

// Route untuk Halaman Checkout
Route::get('/checkout', App\Http\Livewire\CheckoutComponent::class)->name('shop.checkout');

// Route untuk Halaman Kategori Produk
Route::get('/product-category/{slug}', App\Http\Livewire\CategoryComponent::class)->name('product.category');

// Route untuk Halaman Pencarian Produk
Route::get('/search', App\Http\Livewire\SearchComponent::class)->name('product.search');

// Grup Route untuk Pengguna yang Login
Route::middleware(['auth'])->group(function(){
    // Halaman Dashboard Pengguna
    Route::get('/user/dashboard', App\Http\Livewire\User\UserDashboardComponent::class)->name('user.dashboard');

    // Halaman Riwayat Pesanan Pengguna
    Route::get('/user/orders', App\Http\Livewire\User\UserOrderComponent::class)->name('user.orders');

    // Halaman Detail Pesanan Pengguna
    Route::get('/user/orders/{order_id}', App\Http\Livewire\User\UserOrderDetailsComponent::class)->name('user.orderdetails');
});

// Grup Route untuk Pengguna yang Login sebagai Admin
Route::middleware(['auth', 'authadmin'])->group(function(){
    // Halaman Dashboard Admin
    Route::get('/admin/dashboard', App\Http\Livewire\Admin\AdminDashboardComponent::class)->name('admin.dashboard');

    // Halaman Kategori Admin
    Route::get('/admin/categories', App\Http\Livewire\Admin\AdminCategoriesComponent::class)->name('admin.categories');

    // Halaman Tambah Kategori Admin
    Route::get('/admin/category/add', App\Http\Livewire\Admin\AdminAddCategoryComponent::class)->name('admin.category.add');

    // Halaman Edit Kategori Admin
    Route::get('/admin/category/edit/{category_id}', App\Http\Livewire\Admin\AdminEditCategoryComponent::class)->name('admin.category.edit');

    // Halaman Produk Admin
    Route::get('/admin/products', App\Http\Livewire\Admin\AdminProductComponent::class)->name('admin.products');

    // Halaman Tambah Produk Admin
    Route::get('/admin/product/add', App\Http\Livewire\Admin\AdminAddProductComponent::class)->name('admin.product.add');

    // Halaman Edit Produk Admin
    Route::get('/admin/product/edit/{product_id}', App\Http\Livewire\Admin\AdminEditProductComponent::class)->name('admin.product.edit');

    // Halaman Slider Admin
    Route::get('/admin/slider', App\Http\Livewire\Admin\AdminHomeSliderComponent::class)->name('admin.home.slider');

    // Halaman Tambah Slide Admin
    Route::get('/admin/slider/add', App\Http\Livewire\Admin\AdminAddHomeSlideComponent::class)->name('admin.home.slide.add');

    // Halaman Edit Slide Admin
    Route::get('/admin/slider/edit/{slide_id}', App\Http\Livewire\Admin\AdminEditHomeSlideComponent::class)->name('admin.home.slide.edit');

    // Halaman Pesanan Admin
    Route::get('/admin/orders', App\Http\Livewire\Admin\AdminOrderComponent::class)->name('admin.orders');

    // Halaman Detail Pesanan Admin
    Route::get('/admin/orders/{order_id}', App\Http\Livewire\Admin\AdminOrderDetailsComponent::class)->name('admin.orderdetails');
});

require __DIR__.'/auth.php';