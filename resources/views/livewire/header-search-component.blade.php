<div class="search-style-1">
    <!-- Form untuk melakukan pencarian produk -->
    <form action="{{ route('product.search') }}">
        <!-- Input teks untuk memasukkan kata kunci pencarian -->
        <input type="text" name="q" placeholder="Search products..." value="{{$q}}">
    </form>
</div>