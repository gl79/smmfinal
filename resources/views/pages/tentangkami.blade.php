@extends('page')
@section('content')
<!-- Page Title -->
<div class="page-title light-background">
  <div class="container d-lg-flex justify-content-between align-items-center">
    <h1 class="mb-2 mb-lg-0">Tentang Kami</h1>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="index.php">Beranda</a></li>
        <li class="current">Tentang Kami</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- About 2 Section -->
<section id="about-2" class="about-2 section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <span class="section-badge"><i class="bi bi-info-circle"></i> Tentang Kami</span>
    <div class="row">
      <div class="col-lg-6">
        <h2 class="about-title">Solusi Social Media Marketing Terpercaya</h2>
        <p class="about-description">Zeps Media hadir untuk membantu Anda membangun kredibilitas dan meningkatkan
          visibilitas di dunia digital melalui layanan pemasaran media sosial yang lengkap dan terpercaya.</p>
      </div>
      <div class="col-lg-6">
        <p class="about-text">Kami menyediakan berbagai layanan seperti jual followers, subscribers, like, komentar,
          view, hingga akun siap pakai untuk berbagai platform populer seperti Instagram, YouTube, TikTok, dan lainnya.
        </p>
        <p class="about-text">Dengan tim profesional dan sistem otomatis, kami memastikan proses cepat, aman, dan
          efektif untuk semua kebutuhan social media marketing Anda.</p>
      </div>
    </div>

    <div class="row features-boxes gy-4 mt-3">
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-box">
          <div class="icon-box">
            <i class="bi bi-bullseye"></i>
          </div>
          <h3><a href="#" class="stretched-link">Target Akurat</a></h3>
          <p>Layanan kami disesuaikan dengan kebutuhan bisnis Anda agar tepat sasaran dan memberikan hasil optimal di
            setiap platform.</p>
        </div>
      </div>

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="feature-box">
          <div class="icon-box">
            <i class="bi bi-person-check"></i>
          </div>
          <h3><a href="#" class="stretched-link">Proses Aman & Cepat</a></h3>
          <p>Transaksi otomatis, sistem terintegrasi, dan layanan 24 jam siap membantu kapan pun Anda membutuhkan.</p>
        </div>
      </div>

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
        <div class="feature-box">
          <div class="icon-box">
            <i class="bi bi-clipboard-data"></i>
          </div>
          <h3><a href="#" class="stretched-link">Laporan & Statistik</a></h3>
          <p>Pantau perkembangan akun Anda dengan laporan real-time dan statistik performa yang transparan.</p>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-lg-12" data-aos="zoom-in" data-aos-delay="200">
        <div class="video-box">
          <img src="{{ asset('pages/img/about/about-wide-1.webp') }}" class="img-fluid" alt="Video Thumbnail">
          <a href="https://www.youtube.com/watch?v=Ynsp8BUIzw4" class="glightbox pulsating-play-btn"></a>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- /About 2 Section -->
@endsection