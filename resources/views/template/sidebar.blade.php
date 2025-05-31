<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <!-- Profil Header -->
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="{{ asset('img/profile_small.jpg') }}" />
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">Zeps Media</span>
                        <span class="text-muted text-xs block">Admin <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">Zeps Media</div>
            </li>

            <!-- Dashboard -->
            <li class="{{ Request::is('/') ? 'active' : '' }}">
                <a href="{{ url('/admin') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>

            <!-- Konfigurasi --><!-- active -->
            <li class="{{ Request::is('dashboard/konfigurasi*') ? 'active' : '' }}">
                <a href="#"><i class="fa fa-cogs"></i>
                    <span class="nav-label">Konfigurasi</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse {{ Request::is('dashboard/konfigurasi*') ? 'in' : '' }}">
                    <li><a href="{{ route('dashboard.konfigurasi.website', ['act' => 'umum']) }}">Website</a></li>
                    <li><a href="#">Payment Gateway</a></li>
                    <li><a href="{{ route('dashboard.konfigurasi.providerapi') }}">Provider API</a></li>
                    <li><a href="#">Provider PROF</a></li>
                    <li><a href="{{ route('dashboard.konfigurasi.sitemap') }}">Sitemap</a></li>
                    <li><a href="{{ route('dashboard.konfigurasi.informasi') }}">Informasi</a></li>
                    <li><a href="{{ route('dashboard.konfigurasi.forminfo', ['act' => 'infopemesanan']) }}">Form
                            Info</a></li>
                </ul>
            </li>


            <!-- Pemesanan -->
            <li class="{{ Request::is('dashboard/role*') ? 'active' : '' }}">
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Role</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse {{ Request::is('dashboard/role*') ? 'in' : '' }}">
                    <li><a href="{{ route('dashboard.role.admin') }}">Admin</a></li>
                    <li><a href="{{ route('dashboard.role.user') }}">User</a></li>
                </ul>
            </li>
            <!-- Pemesanan -->
            <li class="{{ Request::is('dashboard/layanan*') ? 'active' : '' }}">
                <a href="#"><i class="fa fa-tag"></i> <span class="nav-label">Layanan</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse {{ Request::is('dashboard/layanan*') ? 'in' : '' }}">
                    <li><a href="{{ route('dashboard.layanan.kustom') }}">Kostum Layanan</a></li>
                    <li><a href="{{ route('dashboard.layanan.pembaharuan') }}">Filter Pembaruan</a></li>
                    <li><a href="{{ route('dashboard.layanan.filter') }}">Filter Layanan</a></li>
                    <li><a href="{{ route('dashboard.layanan.rekomendasi') }}">Rekomendasi Layanan</a></li>
                    <li><a href="{{ route('dashboard.layanan.kategori') }}">Data Kategori</a></li>
                    <li><a href="{{ route('dashboard.layanan.layanan') }}">Data Layanan</a></li>
                    <li><a href="{{ route('dashboard.layanan.getlayanan') }}">Get Layanan</a></li>
                </ul>
            </li>
            <!-- Pemesanan admin -->
            <li {{ Request::is('dashboard/pesanan*') ? 'active' : '' }}>
                <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Pemesanan</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse {{ Request::is('dashboard/pesanan*') ? 'in' : '' }}">
                    <li><a href="{{ route('dashboard.pesanan.cekpesanan') }}">Cek Pesanan</a></li>
                    <li><a href="{{ route('dashboard.pesanan.cekprovider') }}">Cek Provider</a></li>
                    <li><a href="{{ route('dashboard.pesanan.pesanantertahan') }}">Pesanan Tertahan</a></li>
                    <li><a href="{{ route('dashboard.pesanan.pesanan') }}">Data Pesanan</a></li>
                    <li><a href="{{ route('dashboard.pesanan.refill') }}">Data Refill</a></li>
                    <li><a href="{{ route('dashboard.pesanan.laporan') }}">Laporan Pesanan</a></li>
                </ul>
            </li>
            <!-- Pemesanan user -->
            <!-- <li>
                <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Pemesanan</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Pesanan Baru</a></li>
                    <li><a href="#">Pesanan Massal</a></li>
                    <li><a href="#">Riwayat Pesanan</a></li>
                    <li><a href="#">Riwayat Refill</a></li>
                </ul>
            </li> -->

            <!-- Deposit -->
            <li {{ Request::is('dashboard/deposit*') ? 'active' : '' }}>
                <a href="#"><i class="fa fa-credit-card"></i> <span class="nav-label">Deposit</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse {{ Request::is('dashboard/deposit*') ? 'in' : '' }}">
                    <!-- bagian admin -->
                    <li><a href="{{ route('dashboard.deposit.metode') }}">Metode Deposit</a></li>
                    <li><a href="{{ route('dashboard.deposit.deposit') }}">Data Deposit</a></li>
                    <li><a href="{{ route('dashboard.deposit.kirimsaldo') }}">Kirim Saldo</a></li>
                    <li><a href="{{ route('dashboard.deposit.laporan') }}">Laporan Deposit</a></li>
                    <!-- bagian user -->
                    <!-- <li><a href="#">Deposit Baru</a></li>
                    <li><a href="#">Riwayat Deposit</a></li>
                    <li><a href="#">Laporan Deposit</a></li> -->
                </ul>
            </li>

            <!-- Layanan -->
            <!-- <li>
                <a href="#"><i class="fa fa-cogs"></i> <span class="nav-label">Layanan</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Daftar Layanan</a></li>
                    <li><a href="#">Update Layanan</a></li>
                    <li><a href="#">Update Layanan</a></li>
                </ul>
            </li> -->

            <!-- Tiket -->
            <li {{ Request::is('dashboard/tiket*') ? 'active' : '' }}>
                <a href="#"><i class="fa fa-ticket"></i> <span class="nav-label">Tiket</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse {{ Request::is('dashboard/tiket*') ? 'in' : '' }}">
                    <li><a href="{{ route('dashboard.tiket.tiket') }}">Tiket Baru</a></li>
                    <li><a href="{{ route('dashboard.tiket.tiket') }}">Data Tiket</a></li>
                </ul>
            </li>

            <!-- Informasi (seperti Dashboard) -->
            <li class="{{ Request::is('informasi') ? 'active' : '' }}">
                <a href="{{ url('informasi') }}"><i class="fa fa-info-circle"></i> <span
                        class="nav-label">Informasi</span></a>
            </li>

            <!-- Top 10 -->
            <!-- <li>
                <a href="#"><i class="fa fa-star"></i> <span class="nav-label">Top 10</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Top Pesanan</a></li>
                    <li><a href="#">Top Deposit</a></li>
                    <li><a href="#">Top Layanan</a></li>
                </ul>
            </li> -->

            <!-- Akun (seperti Dashboard) -->
            <li class="{{ Request::is('akun') ? 'active' : '' }}">
                <a href="{{ url('akun') }}"><i class="fa fa-user"></i> <span class="nav-label">Akun</span></a>
            </li>

            <!-- Sitemap -->
            <!-- <li>
                <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Sitemap</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Kontak</a></li>
                    <li><a href="#">Ketentuan Layanan</a></li>
                </ul>
            </li> -->
            <!-- Sitemap -->
            <li {{ Request::is('dashboard/log*') ? 'active' : '' }}>
                <a href="#"><i class="fa fa-rotate-right"></i> <span class="nav-label">Log</span> <span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse {{ Request::is('dashboard/log*') ? 'in' : '' }}">
                    <li><a href="{{ route('dashboard.log.mutasi', ['jenis' => 'BCA']) }}">Mutasi BCA</a></li>
                    <li><a href="{{ route('dashboard.log.mutasi', ['jenis' => 'OVO']) }}">Mutasi OVO</a></li>
                    <li><a href="{{ route('dashboard.log.mutasi', ['jenis' => 'GOPAY']) }}">Mutasi GOPAY</a></li>
                    <li><a href="{{ route('dashboard.log.mutasisaldo') }}">Mutasi Saldo</a></li>
                    <li><a href="{{ route('dashboard.log.masukadmin') }}">Masuk Admin</a></li>
                    <li><a href="{{ route('dashboard.log.masukadmin') }}">Masuk User</a></li>
                    <li><a href="{{ route('dashboard.log.updatelayanan') }}">Update Layanan</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>