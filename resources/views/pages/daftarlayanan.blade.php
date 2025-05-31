@extends('page')
@section('content')

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
    <h1 class="mb-2 mb-lg-0">Daftar Layanan</h1>
    <nav class="breadcrumbs">
      <ol>
      <li><a href="index.php">Beranda</a></li>
      <li class="current">Daftar Layanan</li>
      </ol>
    </nav>
    </div>
  </div>

  <!-- Filter and Table Section -->
  <div class="container py-4">
    <!-- Search and Filter Buttons -->
    <div class="d-flex flex-wrap justify-content-start align-items-center gap-2 mb-3">
    <input type="text" id="searchInput" class="form-control w-auto" placeholder="Cari Layanan...">
    <button class="btn btn-primary d-flex align-items-center gap-1" data-bs-toggle="modal"
      data-bs-target="#filterModal">
      <i class="bi bi-funnel"></i> <span>Filter Data</span>
    </button>
    </div>

    <!-- Data Table -->
    <div class="table-responsive">
    <table class="table table-bordered text-center align-middle" id="layananTable">
      <thead class="table-light">
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>Layanan</th>
        <th>Min</th>
        <th>Maks</th>
        <th>Harga</th>
        <th>Waktu Rata-Rata</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
      <?php
  $layananList = [
    "Instagram Likes | Auto Start | High Quality",
    "YouTube Views | Non Drop | 1 Hour Start",
    "TikTok Followers | Refill Guarantee",
    "Facebook Page Likes | Real Accounts",
    "Telegram Members | Fast Delivery",
    "Twitter Retweets | Manual Process",
    "Spotify Plays | 100% Real",
    "LinkedIn Followers | Premium",
    "Google Reviews | Verified | 24H Start",
    "Shopee Followers | Fast and Cheap"
  ];

  $deskripsiList = [
    "Layanan cepat dan aman.",
    "Proses instan, kualitas terjamin.",
    "Tingkat keberhasilan tinggi.",
    "Didukung akun real dan aktif.",
    "Pengiriman instan tanpa delay.",
    "Sangat direkomendasikan oleh pengguna.",
    "Paling laris digunakan influencer.",
    "Solusi terbaik untuk bisnis Anda.",
    "Dapatkan followers dalam hitungan menit.",
    "Layanan populer dan terpercaya."
  ];

  foreach ($layananList as $index => $layanan):
    $min = rand(5, 100);
    $max = rand(1000, 1000000);
    $harga = "Rp " . number_format(rand(1000, 50000), 0, ',', '.');
    $waktu = rand(1, 60) . " menit, " . rand(1, 59) . " detik";
    $id = 34000 + $index;
    $refill = rand(0, 1) ? 'on' : 'off';
    $cancel = rand(0, 1) ? 'on' : 'off';
    $lastUpdate = date("Y-m-d H:i:s", strtotime("-" . rand(1, 30) . " days"));
    $totalPesanan = rand(100, 10000);
    $deskripsi = $deskripsiList[$index];
        ?>
      <tr data-id="<?= $id ?>" data-layanan="<?= htmlspecialchars($layanan) ?>" data-min="<?= $min ?>"
        data-max="<?= number_format($max, 0, ',', '.') ?>" data-harga="<?= $harga ?>" data-waktu="<?= $waktu ?>"
        data-refill="<?= $refill ?>" data-cancel="<?= $cancel ?>" data-type="Default" data-update="<?= $lastUpdate ?>"
        data-deskripsi="<?= htmlspecialchars($deskripsi) ?>" data-totalpesanan="<?= $totalPesanan ?>">
        <td><?= $index + 1 ?></td>
        <td><?= $id ?></td>
        <td class="text-start layanan-nama"><?= $layanan ?></td>
        <td><?= $min ?></td>
        <td><?= number_format($max, 0, ',', '.') ?></td>
        <td><?= $harga ?></td>
        <td><?= $waktu ?></td>
        <td class="d-flex justify-content-center flex-wrap gap-1">
        <button class="btn btn-info btn-sm px-2 d-flex align-items-center gap-1" data-bs-toggle="modal"
          data-bs-target="#detailModal">
          <i class="bi bi-eye"></i> <span>Detail</span>
        </button>
        <button class="btn btn-danger btn-sm px-2 d-flex align-items-center gap-1" data-bs-toggle="modal"
          data-bs-target="#monitoringModal">
          <i class="bi bi-graph-up"></i> <span>Monitoring</span>
        </button>
        </td>
      </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    </div>

    <!-- Pagination -->
    <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled"><a class="page-link">Previous</a></li>
      <li class="page-item active"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
    </nav>
  </div>
@endsection