@extends('page')
@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Informasi Status Pesanan</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.php">Beranda</a></li>
                    <li class="current">Informasi Status Pesanan</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Terms Of Service Section -->
    <section id="terms-of-service" class="terms-of-service section">
        <div class="container" data-aos="fade-up">

            <!-- Page Header -->
            <div class="tos-header text-center" data-aos="fade-up">
                <span class="last-updated">Last Updated : Mei 29, 2025</span>
                <h2>Informasi Status Pesanan</h2>
                <p>Harap baca Informasi Status Pesanan ini dengan seksama sebelum menggunakan layanan kami</p>
            </div>

            <!-- Content -->
            <div class="tos-content" data-aos="fade-up" data-aos-delay="200">

                <!-- Status Pesanan -->
                <div id="intellectual-property" class="content-section">
                    <h3>1. Status Pesanan</h3>
                    <ul class="list-items">
                        <li><strong>Pending:</strong> Pesanan/deposit sedang dalam antrean di server.</li>
                        <li><strong>Processing:</strong> Pesanan sedang dalam proses.</li>
                        <li><strong>Success:</strong> Pesanan telah berhasil.</li>
                        <li><strong>Partial:</strong> Pesanan diproses sebagian, sisanya dibatalkan. Anda hanya membayar
                            layanan yang masuk.</li>
                        <li><strong>Error:</strong> Pesanan dibatalkan, saldo otomatis kembali ke akun.</li>
                    </ul>
                </div>

                <!-- Partial Explanation -->
                <div id="intellectual-property" class="content-section">
                    <h3>2. Mengapa Bisa Partial ?</h3>
                    <ul class="list-items">
                        <li><strong>Limit:</strong> Misal 1 layanan maksimal 1000 followers. Jika Anda pesan 2x dalam jumlah
                            sama ke akun yang sama, hanya 1000 yang bisa diproses.</li>
                        <li><strong>Overload:</strong> Layanan murah biasanya overload karena kebanyakan pesanan, sehingga
                            bisa menyebabkan partial.</li>
                        <li>Sisa saldo dari pesanan partial akan otomatis dikembalikan ke akun.</li>
                    </ul>
                </div>

                <!-- Refill Warranty -->
                <div id="intellectual-property" class="content-section">
                    <h3>3. Garansi Refill</h3>
                    <ul class="list-items">
                        <li><strong>Garansi (Refill):</strong> Jika membeli layanan dengan refill dan followers berkurang,
                            Anda bisa mengajukan refill lewat tiket. Untuk layanan auto refill, proses otomatis. Jika belum
                            refill dalam 2x24 jam, silakan lapor ke admin.</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <!-- End Terms Of Service Section -->
@endsection