<?php
use Illuminate\Support\Facades\Route;

// ROUTE PAGES
Route::get('/', function () {
    return view('pages.home');
})->name('pages.home');

Route::get('daftar-layanan', function () {
    return view('pages.daftarlayanan');
})->name('pages.daftarlayanan');

Route::get('pemesanan', function () {
    return view('pages.pemesanan');
})->name('pages.pemesanan');

Route::get('cek-pesanan', function () {
    return view('pages.cekpesanan');
})->name('pages.cekpesanan');

Route::get('tentang-kami', function () {
    return view('pages.tentangkami');
})->name('pages.tentangkami');

Route::get('auth', function () {
    return view('pages.auth');
})->name('pages.auth');

Route::get('contoh-pengisian-target', function () {
    return view('pages.contohpengisiantarget');
})->name('pages.contohpengisiantarget');

Route::get('ketentuan-layanan', function () {
    return view('pages.ketentuanlayanan');
})->name('pages.ketentuanlayanan');

Route::get('status-pesanan', function () {
    return view('pages.statuspesanan');
})->name('pages.statuspesanan');

Route::get('hubungi-kami', function () {
    return view('pages.hubungikami');
})->name('pages.hubungikami');

// AKHIR ROUTE PAGES
Route::get('dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('admin', function () {
    return view('dashboard.admin.admin');
})->name('dashboard.admin.admin');


Route::get('login', function () {
    return view('login.login');
})->name('login.login');


// ROUTE BAGIAN KONFIGURASI WEBSITE 
Route::get('dashboard/konfigurasi/website', function () {
    return view('dashboard.konfigurasi.website');
})->name('dashboard.konfigurasi.website');

Route::get('dashboard/konfigurasi/providerapi', function () {
    return view('dashboard.konfigurasi.providerapi');
})->name('dashboard.konfigurasi.providerapi');

Route::get('dashboard/konfigurasi/sitemap', function () {
    return view('dashboard.konfigurasi.sitemap');
})->name('dashboard.konfigurasi.sitemap');

Route::get('dashboard/konfigurasi/informasi', function () {
    return view('dashboard.konfigurasi.informasi');
})->name('dashboard.konfigurasi.informasi');

Route::get('dashboard/konfigurasi/forminfo', function () {
    return view('dashboard.konfigurasi.forminfo');
})->name('dashboard.konfigurasi.forminfo');

// AKHIR ROUTE BAGIAN KONFIGURASI WEBSITE
// ROUTE BAGIAN ROLE
Route::get('dashboard/role/admin', function () {
    return view('dashboard.role.admin');
})->name('dashboard.role.admin');
Route::get('dashboard/role/user', function () {
    return view('dashboard.role.user');
})->name('dashboard.role.user');
// AKHIR ROUTE BAGIAN ROLE

// ROUTE BAGIAN LAYANAN
Route::get('dashboard/layanan/kustom', function () {
    return view('dashboard.layanan.kustom');
})->name('dashboard.layanan.kustom');
Route::get('dashboard/layanan/pembaharuan', function () {
    return view('dashboard.layanan.pembaharuan');
})->name('dashboard.layanan.pembaharuan');
Route::get('dashboard/layanan/filter', function () {
    return view('dashboard.layanan.filter');
})->name('dashboard.layanan.filter');
Route::get('dashboard/layanan/rekomendasi', function () {
    return view('dashboard.layanan.rekomendasi');
})->name('dashboard.layanan.rekomendasi');
Route::get('dashboard/layanan/kategori', function () {
    return view('dashboard.layanan.kategori');
})->name('dashboard.layanan.kategori');
Route::get('dashboard/layanan/layanan', function () {
    return view('dashboard.layanan.layanan');
})->name('dashboard.layanan.layanan');
Route::get('dashboard/layanan/getlayanan', function () {
    return view('dashboard.layanan.getlayanan');
})->name('dashboard.layanan.getlayanan');
// AKHIR ROUTE BAGIAN LAYANAN
// ROUTE BAGIAN PESANAN

Route::get('dashboard/pesanan/cekpesanan', function () {
    return view('dashboard.pesanan.cekpesanan');
})->name('dashboard.pesanan.cekpesanan');
Route::get('dashboard/pesanan/cekprovider', function () {
    return view('dashboard.pesanan.cekprovider');
})->name('dashboard.pesanan.cekprovider');
Route::get('dashboard/pesanan/pesanantertahan', function () {
    return view('dashboard.pesanan.pesanantertahan');
})->name('dashboard.pesanan.pesanantertahan');
Route::get('dashboard/pesanan/pesanan', function () {
    return view('dashboard.pesanan.pesanan');
})->name('dashboard.pesanan.pesanan');
Route::get('dashboard/pesanan/refill', function () {
    return view('dashboard.pesanan.refill');
})->name('dashboard.pesanan.refill');
Route::get('dashboard/pesanan/laporan', function () {
    return view('dashboard.pesanan.laporan');
})->name('dashboard.pesanan.laporan');
// AKHIR ROUTE PESANAN

// ROUTE DEPOSIT
Route::get('dashboard/deposit/metode', function () {
    return view('dashboard.deposit.metode');
})->name('dashboard.deposit.metode');
Route::get('dashboard/deposit/deposit', function () {
    return view('dashboard.deposit.deposit');
})->name('dashboard.deposit.deposit');
Route::get('dashboard/deposit/kirimsaldo', function () {
    return view('dashboard.deposit.kirimsaldo');
})->name('dashboard.deposit.kirimsaldo');
Route::get('dashboard/deposit/laporan', function () {
    return view('dashboard.deposit.laporan');
})->name('dashboard.deposit.laporan');


// AKHIR ROUTE DEPOSIT

// ROUTE TIKET
Route::get('dashboard/tiket/tiket', function () {
    return view('dashboard.tiket.tiket');
})->name('dashboard.tiket.tiket');
Route::get('dashboard/tiket/open', function () {
    return view('dashboard.tiket.open');
})->name('dashboard.tiket.open');
// AKHIR ROUTE TIKET

// ROUTE LOG
Route::get('dashboard/log/mutasi', function () {
    return view('dashboard.log.mutasi');
})->name('dashboard.log.mutasi');
Route::get('dashboard/log/mutasisaldo', function () {
    return view('dashboard.log.mutasisaldo');
})->name('dashboard.log.mutasisaldo');
Route::get('dashboard/log/masukadmin', function () {
    return view('dashboard.log.masukadmin');
})->name('dashboard.log.masukadmin');
Route::get('dashboard/log/masukuser', function () {
    return view('dashboard.log.masukuser');
})->name('dashboard.log.masukuser');
Route::get('dashboard/log/updatelayanan', function () {
    return view('dashboard.log.updatelayanan');
})->name('dashboard.log.updatelayanan');

// AKHIR ROUTE LOG