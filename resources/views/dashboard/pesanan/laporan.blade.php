@extends('main')

@section('title', 'Laporan Pesanan')
@section('breadcrumb', 'Pesanan')

@section('content')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5><i class="fa fa-cog"></i> Grafik Pemesanan</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li><a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                    <div class="ibox-content">
                        <div id="grafik-pemesanan"></div>
                    </div>
                </div>
            </div>
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><i class="fa fa-cog"></i> Laporan Pesanan</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li><a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form action="">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pt-2">Jenis</label>
                                <select name="" id="" class="form-control">
                                    <option>Detail</option>
                                    <option>Compact</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="" class="pt-2">Dari Tanggal</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="" class="pt-2">Sampai Tanggal</label>
                                <input type="date" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label for="" class="pt-2">&nbsp;</label><br>
                                <button type="button" class="btn btn-primary btn-rounded"><i class="fa fa-refresh"></i>
                                    Buka Data</button>
                            </div>
                        </div>
                    </form>

                    <table class="table mt-4">
                        <tr>
                            <th>Tanggal</th>
                            <th>Keuntungan Kotor</th>
                            <th>Keuntungan Bersih</th>
                            <th>Persentase</th>
                            <th>Pending</th>
                            <th>Processing</th>
                            <th>Success</th>
                            <th>Error</th>
                            <th>Partial</th>
                        </tr>
                        <tr>
                            <td>14 Mei 2025</td>
                            <td>Rp 1.068.934 (67)</td>
                            <td>Rp 152.152 (67)</td>
                            <td>+427.85%</td>
                            <td>Rp 0 (0)</td>
                            <td>Rp 0 (0)</td>
                            <td>Rp 1.068.934 (64)</td>
                            <td>Rp 0 (3)</td>
                            <td>Rp 0 (0)</td>
                        </tr>
                    </table>
                    <table class="table mt-4">
                        <tbody>
                            <tr style="background-color: #e3f2fd;">
                                <td>Keuntungan Kotor</td>
                                <td>Rp 54.570.236 dari 3.451 pesanan</td>
                            </tr>
                            <tr style="background-color: #e3f2fd;">
                                <td>Keuntungan Bersih</td>
                                <td>Rp 8.469.980 dari 3.451 pesanan</td>
                            </tr>
                            <tr style="background-color: #fff3cd;">
                                <td>Pending</td>
                                <td>Rp 228.132 dari 11 pesanan</td>
                            </tr>
                            <tr style="background-color: #d1ecf1;">
                                <td>Processing</td>
                                <td>Rp 15.837.865 dari 661 pesanan</td>
                            </tr>
                            <tr style="background-color: #d1e7dd;">
                                <td>Success</td>
                                <td>Rp 38.216.909 dari 2.604 pesanan</td>
                            </tr>
                            <tr style="background-color: #f8d7da;">
                                <td>Error</td>
                                <td>Rp 0 dari 124 pesanan</td>
                            </tr>
                            <tr style="background-color: #f8d7da;">
                                <td>Partial</td>
                                <td>Rp 287.330 dari 51 pesanan</td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection