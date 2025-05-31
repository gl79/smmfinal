@extends('page')
@section('content')
  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
    <h1 class="mb-2 mb-lg-0">Hubungi Kami</h1>
    <nav class="breadcrumbs">
      <ol>
      <li><a href="index.php">Beranda</a></li>
      <li class="current">Hubungi Kami</li>
      </ol>
    </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Support Section -->
  <section id="support" class="support section">
    <div class="container" data-aos="fade-up">

    <!-- Support Header -->
    <div class="support-header" data-aos="fade-up">
      <div class="header-content text-center">
      <h2>Hubungi Kami</h2>
      <p>Silahkan hubungi kontak dibawah ini jika kalian butuh bantuan kami.</p>
      </div>
      <div>
      <p>Jam Kerja : Senin - Minggu : 08:00 - 22:00</p>
      <p>Fast Respon Hanya Melalui Telegram</p>
      </div>
    </div>

    <!-- Quick Support Actions -->
    <div class="quick-support d-flex justify-content-around text-center" data-aos="fade-up" data-aos-delay="100">
      <div class="action-item live-chat">
      <div class="action-content">
        <i class="bi bi-whatsapp"></i>
        <h4>WhatsApp</h4>
        <a href="https://wa.me/6289660180205" target="_blank" class="action-button">Mulai Chat WhatsApp</a>
      </div>
      </div>

      <div class="action-item phone">
      <div class="action-content">
        <i class="bi bi-telegram"></i>
        <h4>Hubungi Kami</h4>
        <a href="https://t.me/cszepsmedia" target="_blank" class="action-button">Mulai Chat Telegram</a>
      </div>
      </div>

      <div class="action-item email">
      <div class="action-content">
        <i class="bi bi-envelope"></i>
        <h4>Tiket</h4>
        <a href="mailto:support@zepsmedia.com" class="action-button">Kirim Email</a>
      </div>
      </div>
    </div>

    </div>
  </section>
@endsection