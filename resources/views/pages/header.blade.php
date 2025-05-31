<header id="header" class="header position-relative">
    <!-- Top Bar -->
    <div class="top-bar py-2">
        <div class="container-fluid container-xl">
            <div class="row align-items-center">
                <div class="col-lg-4 d-none d-lg-flex">
                    <div class="top-bar-item">
                        <i class="bi bi-telephone-fill me-2"></i>
                        <span>Butuh Bantuan? Hubungi Kami : </span>
                        <a href="https://wa.me/6289660180205">0896-6018-0205</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 text-center">
                    <div class="announcement-slider swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                            {
                                "loop": true,
                                "speed": 600,
                                "autoplay": {
                                    "delay": 3000
                                },
                                "slidesPerView": 1,
                                "direction": "vertical",
                                "effect": "slide"
                            }
                        </script>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">🚚 Pengiriman Instan</div>
                            <div class="swiper-slide">💰 Terbaik Se-Indonesia</div>
                            <div class="swiper-slide">🎁 Termurah Se-Indonesia</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                    <div class="d-flex justify-content-end">
                        <div class="top-bar-item dropdown">
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="bi bi-cash me-2"></i>IDR
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i
                                            class="bi bi-check2 me-2 selected-icon"></i>IDR</a></li>
                                <li><a class="dropdown-item" href="#">USD</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <div class="main-header">
        <div class="container-fluid container-xl">
            <div class="d-flex py-3 align-items-center justify-content-between">

                <!-- Logo -->
                <a href="index.php" class="logo d-flex align-items-center">
                    <img src="assets/img/navbarlogo.webp" alt="">
                    <h1 class="sitename">Zeps Media</h1>
                </a>

                <!-- Actions -->
                <div class="header-actions d-flex align-items-center justify-content-end">

                    <!-- Cart -->
                    <a href="{{ route('pages.pemesanan') }}" class="header-action-btn">
                        <i class="bi bi-cart3"></i>
                    </a>

                    <!-- Account -->
                    <div class="dropdown account-dropdown">
                        <button class="header-action-btn" data-bs-toggle="dropdown">
                            <i class="bi bi-person"></i>
                        </button>
                        <div class="dropdown-menu">
                            <div class="dropdown-header d-flex justify-content-between align-items-center">
                                <div>
                                    <h6>Welcome to <span class="sitename">Zeps Media</span></h6>
                                    <p class="mb-0">Grow Your Business</p>
                                </div>
                                <div class="d-flex align-items-center ms-3">
                                    <img src="{{ asset('pages/img/person.webp') }}" alt="Guest" class="rounded-circle"
                                        width="40" height="40">
                                    <span class="ms-2 fw-semibold">Guest</span>
                                </div>
                            </div>
                            <hr class="my-2">
                            <div class="dropdown-footer">
                                <a href="{{ route('pages.auth') }}" class="btn btn-primary w-100 mb-2">Masuk</a>
                                <a href="{{ route('pages.auth') }}" class="btn btn-outline-primary w-100">Daftar</a>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Navigation Toggle -->
                    <i class="mobile-nav-toggle d-xl-none bi bi-list me-0"></i>

                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="header-nav">
        <div class="container-fluid container-xl">
            <div class="position-relative">
                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="{{ route('pages.home') }}">Beranda</a></li>
                        <li><a href="{{ route('pages.daftarlayanan') }}">Daftar Layanan</a></li>
                        <li><a href="{{ route('pages.pemesanan') }}">Pemesanan</a></li>
                        <li><a href="{{ route('pages.cekpesanan') }}">Cek Pesanan</a></li>
                        <li><a href="{{ route('pages.tentangkami') }}">Tentang Kami</a></li>
                        <li class="dropdown">
                            <a href=""><span>Pusat Bantuan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="{{ route('pages.contohpengisiantarget') }}">Contoh Pengisian Target</a>
                                </li>
                                <li><a href="{{ route('pages.ketentuanlayanan') }}">Ketentuan Layanan</a></li>
                                <li><a href="{{ route('pages.statuspesanan') }}">Status Pesanan</a></li>
                                <li><a href="{{ route('pages.hubungikami') }}">Hubungi Kami</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>