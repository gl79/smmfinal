@extends('page')
@section('content')
    <!-- Hero Section -->
    <section class="ecommerce-hero-1 hero section" id="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 content-col" data-aos="fade-right" data-aos-delay="100">
                    <div class="content">
                        <span class="promo-badge">PROMO LAUNCHING 2025</span>
                        <h1>SMM Panel <span>Terbaik</span> dan <span>Termurah</span> di Indonesia</h1>
                        <p>Zeps Media adalah SMM panel Indonesia terpercaya yang menyediakan layanan followers
                            Instagram, subscribers YouTube, views TikTok, dan berbagai kebutuhan media sosial
                            lainnya dengan harga murah dan proses cepat.</p>
                        <div class="hero-cta">
                            <a href="{{ route('pages.pemesanan') }}" class="btn btn-shop">Pesan Sekarang <i
                                    class="bi bi-arrow-right"></i></a>
                            <a href="tentang.php" class="btn btn-collection">Tentang Kami</a>
                        </div>
                        <div class="hero-features">
                            <div class="feature-item"><i class="bi bi-truck"></i><span>Pengiriman Instan</span>
                            </div>
                            <div class="feature-item"><i class="bi bi-shield-check"></i><span>Transaksi Aman</span>
                            </div>
                            <div class="feature-item"><i class="bi bi-arrow-repeat"></i><span>24/7 Bantuan</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 image-col" data-aos="fade-left" data-aos-delay="200">
                    <div class="hero-image">
                        <img src="{{ asset('pages/img/layanan/smm.webp') }}" alt="Fashion Product" class="main-product"
                            loading="lazy" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- Info Cards Section -->
    <section id="info-cards" class="info-cards section light-background">
        <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="info-card text-center">
                        <div class="icon-box"><i class="bi bi-truck"></i></div>
                        <h3>Pengiriman Instan</h3>
                        <p>Proses otomatis dan cepat, pesanan masuk dalam hitungan detik ke akun Anda tanpa perlu
                            konfirmasi manual.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="info-card text-center">
                        <div class="icon-box"><i class="bi bi-piggy-bank"></i></div>
                        <h3>Garansi Uang Kembali</h3>
                        <p>Kami memberikan jaminan uang kembali jika layanan gagal terkirim atau tidak sesuai dengan
                            deskripsi.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="info-card text-center">
                        <div class="icon-box"><i class="bi bi-percent"></i></div>
                        <h3>Harga Terjangkau</h3>
                        <p>Nikmati berbagai pilihan layanan dengan harga yang bersahabat tanpa mengurangi kualitas
                            dan kecepatan.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="info-card text-center">
                        <div class="icon-box"><i class="bi bi-headset"></i></div>
                        <h3>Bantuan 24 Jam</h3>
                        <p>Tim support kami siap membantu kapan saja jika Anda mengalami kendala atau memiliki
                            pertanyaan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Info Cards Section -->

    <!-- Category Cards Section -->
    <section id="category-cards" class="category-cards section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="category-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                      "loop": true,
                      "autoplay": {
                        "delay": 5000,
                        "disableOnInteraction": false
                      },
                      "grabCursor": true,
                      "speed": 600,
                      "slidesPerView": "auto",
                      "spaceBetween": 20,
                      "navigation": {
                        "nextEl": ".swiper-button-next",
                        "prevEl": ".swiper-button-prev"
                      },
                      "breakpoints": {
                        "320": {
                          "slidesPerView": 2,
                          "spaceBetween": 15
                        },
                        "576": {
                          "slidesPerView": 3,
                          "spaceBetween": 15
                        },
                        "768": {
                          "slidesPerView": 4,
                          "spaceBetween": 20
                        },
                        "992": {
                          "slidesPerView": 5,
                          "spaceBetween": 20
                        },
                        "1200": {
                          "slidesPerView": 6,
                          "spaceBetween": 20
                        }
                      }
                    }
                  </script>

                <div class="swiper-wrapper">
                    <!-- Repeatable Cards -->
                    <div class="swiper-slide">
                        <div class="category-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="category-image"><img src="{{asset('pages/img/layanan/instagram.webp')}}"
                                    alt="Instagram" class="img-fluid" /></div>
                            <h3 class="category-title">Instagram</h3>
                            <a href="daftarlayanan.php" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card" data-aos="fade-up" data-aos-delay="200">
                            <div class="category-image"><img src="{{asset('pages/img/layanan/youtube.png')}}" alt="Youtube"
                                    class="img-fluid" /></div>
                            <h3 class="category-title">Youtube</h3>
                            <a href="daftarlayanan.php" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="category-image"><img src="{{asset('pages/img/layanan/tiktok.png')}}" alt="Tiktok"
                                    class="img-fluid" /></div>
                            <h3 class="category-title">Tiktok</h3>
                            <a href="daftarlayanan.php" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card" data-aos="fade-up" data-aos-delay="400">
                            <div class="category-image"><img src="{{asset('pages/img/layanan/spotify.png')}}" alt="Spotify"
                                    class="img-fluid" /></div>
                            <h3 class="category-title">Spotify</h3>
                            <a href="daftarlayanan.php" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card" data-aos="fade-up" data-aos-delay="500">
                            <div class="category-image"><img src="{{asset('pages/img/layanan/pornhub.png')}}" alt="Porn Hub"
                                    class="img-fluid" /></div>
                            <h3 class="category-title">Porn Hub</h3>
                            <a href="daftarlayanan.php" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card" data-aos="fade-up" data-aos-delay="600">
                            <div class="category-image"><img src="{{asset('pages/img/layanan/netflix.png')}}" alt="Netflix"
                                    class="img-fluid" /></div>
                            <h3 class="category-title">Netflix</h3>
                            <a href="daftarlayanan.php" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card" data-aos="fade-up" data-aos-delay="700">
                            <div class="category-image"><img src="{{asset('pages/img/layanan/vidio.png')}}" alt="Vidio"
                                    class="img-fluid" /></div>
                            <h3 class="category-title">Vidio</h3>
                            <a href="daftarlayanan.php" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card" data-aos="fade-up" data-aos-delay="700">
                            <div class="category-image"><img src="{{asset('pages/img/layanan/X.png')}}" alt="X"
                                    class="img-fluid" /></div>
                            <h3 class="category-title">X</h3>
                            <a href="daftarlayanan.php" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card" data-aos="fade-up" data-aos-delay="700">
                            <div class="category-image"><img src="{{asset('pages/img/layanan/shopee.png')}}" alt="shopee"
                                    class="img-fluid" /></div>
                            <h3 class="category-title">Shopee</h3>
                            <a href="daftarlayanan.php" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card" data-aos="fade-up" data-aos-delay="700">
                            <div class="category-image"><img src="{{asset('pages/img/layanan/whatsapp.png')}}"
                                    alt="whatsapp" class="img-fluid" /></div>
                            <h3 class="category-title">WhatsApp</h3>
                            <a href="daftarlayanan.php" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card" data-aos="fade-up" data-aos-delay="700">
                            <div class="category-image"><img src="{{asset('pages/img/layanan/telegram.png')}}"
                                    alt="telegram" class="img-fluid" /></div>
                            <h3 class="category-title">Telegram</h3>
                            <a href="daftarlayanan.php" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card" data-aos="fade-up" data-aos-delay="700">
                            <div class="category-image"><img src="{{asset('pages/img/layanan/threads.png')}}" alt="threads"
                                    class="img-fluid" /></div>
                            <h3 class="category-title">Threads</h3>
                            <a href="daftarlayanan.php" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card" data-aos="fade-up" data-aos-delay="700">
                            <div class="category-image"><img src="{{asset('pages/img/layanan/capcut.pn')}}g" alt="capcut"
                                    class="img-fluid" /></div>
                            <h3 class="category-title">Capcut</h3>
                            <a href="daftarlayanan.php" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card" data-aos="fade-up" data-aos-delay="700">
                            <div class="category-image"><img src="{{asset('pages/img/layanan/google.png')}}" alt="google"
                                    class="img-fluid" /></div>
                            <h3 class="category-title">Google</h3>
                            <a href="daftarlayanan.php" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card" data-aos="fade-up" data-aos-delay="700">
                            <div class="category-image"><img src="{{asset('pages/img/layanan/discord.png')}}" alt="discord"
                                    class="img-fluid" /></div>
                            <h3 class="category-title">Discord</h3>
                            <a href="daftarlayanan.php" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card" data-aos="fade-up" data-aos-delay="700">
                            <div class="category-image"><img src="{{asset('pages/img/layanan/bigo.png')}}" alt="bigo"
                                    class="img-fluid" /></div>
                            <h3 class="category-title">Bigo</h3>
                            <a href="daftarlayanan.php" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card" data-aos="fade-up" data-aos-delay="700">
                            <div class="category-image"><img src="{{asset('pages/img/layanan/apple.png')}}" alt="apple"
                                    class="img-fluid" /></div>
                            <h3 class="category-title">Apple</h3>
                            <a href="daftarlayanan.php" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card" data-aos="fade-up" data-aos-delay="800">
                            <div class="category-image"><img src="{{asset('pages/img/layanan/facebook.png')}}"
                                    alt="Facebook" class="img-fluid" /></div>
                            <h3 class="category-title">Facebook</h3>
                            <a href="daftarlayanan.php" class="stretched-link"></a>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <!-- /Category Cards Section -->

    <!-- Section Lihat Semua Produk -->
    <section id="product-list" class="product-list section">
        <div class="container isotope-layout" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
                <div class="col-12">
                    <div class="product-filters isotope-filters mb-5 d-flex justify-content-center">
                        <div class="text-center mt-5">
                            <a href="daftarlayanan.php" class="view-all-btn">Lihat Semua Layanan <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Lihat Semua Produk -->
@endsection