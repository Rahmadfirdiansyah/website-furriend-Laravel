<div>
    <main class="main">
        <!-- Header halaman dengan breadcrumb -->
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>                    
                    <span></span> Contact us
                </div>
            </div>
        </div>
        <!-- Menampilkan halaman contact yang berisi form nama, email, nomor telepon, dan pesan -->
        <section class="pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <!-- Kolom untuk menempatkan form kontak -->
                    <div class="col-xl-8 col-lg-10 m-auto">
                        <div class="contact-from-area padding-20-row-col wow FadeInUp">
                            <h3 class="mb-10 text-center">Drop Us a Line</h3>
                            <p class="text-muted mb-30 text-center font-sm"></p>
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <!-- Form untuk mengirim pesan -->
                            <form class="contact-form-style text-center" id="contact-form" wire:submit.prevent="sendMessage">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="input-style mb-20">
                                            <input name="name" placeholder="Nama" type="text" wire:model="name">
                                            @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="input-style mb-20">
                                            <input name="email" placeholder="Email" type="email" wire:model="email">
                                            @error('email') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="input-style mb-20">
                                            <input name="phone" placeholder="Nomor Telepon" type="tel" wire:model="phone">
                                            @error('phone') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <!-- Tombol untuk mengirim pesan -->
                                    <div class="col-lg-12 col-md-12">
                                        <div class="textarea-style mb-30">
                                            <textarea name="message" placeholder="Message" wire:model="message"></textarea>
                                            @error('message') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                        <button class="submit submit-auto-width" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>