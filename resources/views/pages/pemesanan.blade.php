@extends('page')
@section('content')
<!-- Page Title -->
<div class="page-title light-background">
  <div class="container d-lg-flex justify-content-between align-items-center">
    <h1 class="mb-2 mb-lg-0">Pemesanan</h1>
    <nav class="breadcrumbs" aria-label="breadcrumb">
      <ol>
        <li><a href="index.php">Beranda</a></li>
        <li class="current" aria-current="page">Pemesanan</li>
      </ol>
    </nav>
  </div>
</div>
<!-- End Page Title -->

<!-- Pemesanan Section -->
<section id="checkout" class="checkout section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row">
      <!-- Form Pemesanan -->
      <div class="col-lg-7 col-md-12">
        <div class="checkout-container" data-aos="fade-up">
          <div class="mb-3 d-flex flex-wrap gap-2">
            <button type="button" class="btn btn-outline-primary filter-btn" data-kategori="tiktok">
              <i class="fab fa-tiktok me-2"></i> TikTok
            </button>
            <button type="button" class="btn btn-outline-primary filter-btn" data-kategori="instagram">
              <i class="fab fa-instagram me-2"></i> Instagram
            </button>
            <button type="button" class="btn btn-outline-primary filter-btn" data-kategori="youtube">
              <i class="fab fa-youtube me-2"></i> YouTube
            </button>
            <button type="button" class="btn btn-outline-primary filter-btn" data-kategori="x-twitter">
              <i class="fab fa-twitter me-2"></i> X / Twitter
            </button>
            <button type="button" class="btn btn-outline-primary filter-btn" data-kategori="facebook">
              <i class="fab fa-facebook-f me-2"></i> Facebook
            </button>
          </div>

          <style>
            .filter-btn:hover,
            .filter-btn.active {
              background-color: #0d6efd;
              color: white;
              border-color: #0d6efd;
              transition: all 0.2s ease-in-out;
            }
          </style>

          <form class="checkout-form" novalidate>
            <div class="checkout-section" id="customer-info">
              <div class="section-header d-flex align-items-center gap-2 mb-3">
                <div class="section-number"><i class="bi bi-cart3"></i></div>
                <h3 class="mb-0">Pemesanan Single</h3>
              </div>
              <div class="section-content">
                <div class="row g-3">
                  <div class="col-12">
                    <label for="kategori">Kategori <span class="text-danger">*</span></label>
                    <select class="form-select" id="kategori" name="kategori" required>
                      <option value="" disabled selected>Pilih Kategori</option>
                      <option value="tiktok">TikTok</option>
                      <option value="instagram">Instagram</option>
                      <option value="youtube">YouTube</option>
                      <option value="x-twitter">X / Twitter</option>
                      <option value="facebook">Facebook</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <label for="layanan">Layanan <span class="text-danger">*</span></label>
                    <select class="form-select" id="layanan" name="layanan" required>
                      <option value="" disabled selected>Pilih Layanan</option>
                      <option value="like">Like</option>
                      <option value="view">View</option>
                      <option value="comment">Comment</option>
                      <option value="share">Share</option>
                      <option value="follow">Follow</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <label for="deskripsi">Deskripsi Layanan</label>
                    <input type="text" class="form-control" name="deskripsi" id="deskripsi"
                      placeholder="Ini Deskripsi Layanan" disabled>
                  </div>
                  <div class="col-md-6">
                    <label for="link-target">Link/Target <span class="text-danger">*</span></label>
                    <input type="url" name="link-target" class="form-control" id="link-target"
                      placeholder="Masukan Link Target" required>
                  </div>
                  <div class="col-md-6">
                    <label for="jumlah-pesan" class="form-label">Jumlah Pesan <span class="text-danger">*</span></label>
                    <div class="d-flex flex-wrap align-items-center gap-2">
                      <input type="number" min="0" name="jumlah-pesan" class="form-control flex-grow-1"
                        id="jumlah-pesan" placeholder="Masukan Jumlah Pesan" required>
                      <button class="btn btn-outline-primary btn-sm" type="button" disabled>Min : 0</button>
                      <button class="btn btn-outline-primary btn-sm" type="button" disabled>Max : 0</button>
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="email">Alamat Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukan Email"
                      required>
                  </div>
                  <div class="col-12">
                    <label for="jenis-pembayaran">Jenis Pembayaran <span class="text-danger">*</span></label>
                    <select class="form-select" id="jenis-pembayaran" name="jenis-pembayaran" required>
                      <option value="" disabled selected>Pilih Metode Pembayaran</option>
                      <option value="qris">QRIS</option>
                      <option value="bank">Transfer Bank</option>
                      <option value="ewallet">E-Wallet</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <div class="qris-box border p-3 my-3 rounded text-center" style="background-color: #f8f9fa;">
                      <img src="{{ asset('pages/img/layanan/qris.png') }}" alt="QRIS Logo" width="100" class="mb-2">
                      <div class="fw-bold">QRIS [OTOMATIS 24 JAM] (Fee 0.7%)</div>
                      <small class="text-muted">Dicek Otomatis</small>
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="total-harga">Total Harga <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <span class="input-group-text">Rp</span>
                      <input type="text" class="form-control" id="total-harga" name="total-harga"
                        placeholder="Total Harga" disabled required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check terms-check">
                      <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                      <label class="form-check-label" for="terms">
                        Saya Menyetujui
                        <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Syarat dan Ketentuan</a> dan
                        <a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal">Privacy Policy</a>
                      </label>
                    </div>
                  </div>
                  <div class="col-12 text-center">
                    <div class="d-flex justify-content-center flex-wrap gap-3">
                      <button type="submit" class="btn btn-primary place-order-btn d-flex align-items-center gap-2">
                        <i class="bi bi-cart"></i><span class="btn-text">Pesan</span>
                      </button>
                      <button type="button" class="btn btn-danger reset-form-btn d-flex align-items-center gap-2">
                        <i class="bi bi-arrow-counterclockwise"></i><span class="btn-text">Ulangi</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <!-- Informasi -->
      <div class="col-lg-5 col-md-12 mt-4 mt-lg-0">
        <div class="order-summary" data-aos="fade-left" data-aos-delay="200">
          <div class="order-summary-header d-flex align-items-center mb-3">
            <h3 class="text-danger mb-0">INFORMASI</h3>
            <i class="bi bi-info-circle-fill text-danger fs-4 me-2"></i>
          </div>
          <div class="order-summary-content">
            <p class="fw-bold">Rules Pemesanan :</p>
            <ul class="ps-3">
              <li>Pastikan Anda menginput data yang benar karena kami tidak bisa membatalkan pesanan.</li>
              <li>Jangan gunakan dua layanan untuk target yang sama secara bersamaan. Tunggu status Success terlebih
                dahulu.</li>
              <li>Jika data/target tidak ditemukan, pesanan akan otomatis Success dan tidak ada refund.</li>
              <li>Status Error/Partial? Silakan hubungi admin.</li>
              <li>Jumlah Maksimal Pesanan adalah kapasitas layanan per target, bukan per order. Gunakan layanan
                alternatif bila batas tercapai.</li>
            </ul>
            <p class="fw-bold">Penting!</p>
            <ul class="ps-3">
              <li>Jika layanan error, segera laporkan ke admin.</li>
              <li>Kesalahan input target tidak akan mendapat pengembalian dana.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Modals -->
    <!-- Terms Modal -->
    <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Isi terms di sini...</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Saya Mengerti</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Privacy Modal -->
    <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="privacyModalLabel">Privacy Policy</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Isi privacy policy di sini...</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Saya Mengerti</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection