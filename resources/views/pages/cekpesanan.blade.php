@extends('page')
@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Cek Status Pesanan</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.php">Beranda</a></li>
                    <li class="current">Cek Status Pesanan</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Starter Section -->
    <section id="starter-section" class="starter-section section">

        <div class="container section-title" data-aos="fade-up">
            <h2>Cek Status Pesanan</h2>
            <p>Masukkan ID Transaksi atau ID User Untuk Melihat Status Pesanan Anda</p>
        </div>

        <div class="container" data-aos="fade-up">

            <!-- Form Pencarian -->
            <form class="row g-3 mb-4" method="GET" action="">
                <div class="col-md-6 col-12">
                    <label for="transactionId" class="form-label">Cari ID Transaksi</label>
                    <input type="text" class="form-control" id="transactionId" name="transactionId"
                        placeholder="Masukkan ID Transaksi / ID User">
                </div>
                <div class="col-md-3 col-6 align-self-end">
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="bi bi-search me-1"></i> Cari
                    </button>
                </div>
                <div class="col-md-3 col-6 align-self-end">
                    <a href="cek-pesanan.php" class="btn btn-danger w-100">
                        <i class="bi bi-x-circle me-1"></i> Reset
                    </a>
                </div>
            </form>

            <!-- Tabel Hasil -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-primary text-dark">
                        <tr>
                            <th>No</th>
                            <th>ID Transaksi</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Email / Nama</th>
                            <th>Kategori</th>
                            <th>Layanan</th>
                            <th>Deskripsi</th>
                            <th>Link Target</th>
                            <th>Jumlah Pesan</th>
                            <th>Jenis Pembayaran</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>TXA123456</td>
                            <td>2025-05-25</td>
                            <td>user1@example.com</td>
                            <td>Instagram</td>
                            <td>Likes</td>
                            <td>Likes posting terbaru</td>
                            <td><a href="https://instagram.com/post1" target="_blank">Lihat</a></td>
                            <td>100</td>
                            <td>QRIS</td>
                            <td>Rp10.000</td>
                            <td><span class="badge bg-secondary">Pending</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>TXB654321</td>
                            <td>2025-05-26</td>
                            <td>user2@example.com</td>
                            <td>YouTube</td>
                            <td>Subscribers</td>
                            <td>Tambahkan 500 subs</td>
                            <td><a href="https://youtube.com/channel/abc" target="_blank">Lihat</a></td>
                            <td>500</td>
                            <td>Transfer Bank</td>
                            <td>Rp40.000</td>
                            <td><span class="badge bg-warning text-dark">Diproses</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>TXC789012</td>
                            <td>2025-05-27</td>
                            <td>user3@example.com</td>
                            <td>TikTok</td>
                            <td>Views</td>
                            <td>Viral video support</td>
                            <td><a href="https://tiktok.com/@user3/video/123" target="_blank">Lihat</a></td>
                            <td>1000</td>
                            <td>QRIS</td>
                            <td>Rp30.000</td>
                            <td><span class="badge bg-success">Selesai</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>TXD345678</td>
                            <td>2025-05-28</td>
                            <td>user4@example.com</td>
                            <td>Facebook</td>
                            <td>Page Likes</td>
                            <td>Likes halaman bisnis</td>
                            <td><a href="https://facebook.com/page123" target="_blank">Lihat</a></td>
                            <td>200</td>
                            <td>E-Wallet</td>
                            <td>Rp15.000</td>
                            <td><span class="badge bg-danger">Ditolak</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </section><!-- /Starter Section -->

@endsection