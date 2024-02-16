<div>
    <main class="main">
        <!-- Header halaman dengan breadcrumb -->
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Blog
                    <span></span> {{ $post->title }}
                </div>
            </div>
        </div>
        <!-- Menampilkan konten posting blog -->
        <section class="mt-50 mb-50">
            <div class="container custom">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-page pr-30">
                            <!-- Header untuk judul dan meta informasi posting -->
                            <div class="single-header style-2">
                                <h1 class="mb-30">{{ $post->title }}</h1>
                                <div class="single-header-meta">
                                    <div class="entry-meta meta-1 font-xs mt-15 mb-15">
                                        <span class="post-by">By <a>{{ $post->author }}</a></span>
                                        <span class="post-on has-dot">{{ $post->post_date }}</span>
                                    </div>
                                    <!-- Tombol-tombol berbagi ke media sosial -->
                                    <div class="social-icons single-share">
                                        <ul class="text-grey-5 d-inline-block">
                                            <li><strong class="mr-10">Share this:</strong></li>
                                            <li class="social-facebook"><a"><img src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}" draggable="false"></a></li>
                                            <li class="social-twitter"> <a"><img src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg') }}" draggable="false"></a></li>
                                            <li class="social-instagram"><a"><img src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg') }}" draggable="false"></a></li>
                                            <li class="social-linkedin"><a"><img src="{{ asset('assets/imgs/theme/icons/icon-pinterest.svg') }}" draggable="false"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Gambar pada postingan -->
                            <figure class="single-thumbnail">
                                <img src="{{ asset($post->image_path) }}">
                            </figure>
                            <div class="single-content">
                                <p>{!! $post->content !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>