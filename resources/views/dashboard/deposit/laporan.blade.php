@extends('main')

@section('title', 'Laporan Deposit')
@section('breadcrumb', 'Deposit')

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
                    <h5><i class="fa fa-cog"></i> Laporan Deposit</h5>
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
                            <th>Success</th>
                            <th>Persentase</th>
                            <th>Pending</th>
                            <th>Canceled</th>
                        </tr>
                        <tr>
                            <td>14 Mei 2025</td>
                            <td>Rp 1.068.934 (67)</td>
                            <td>+427.85%</td>
                            <td>Rp 0 (0)</td>
                            <td>Rp 1.068.934 (64)</td>
                        </tr>
                    </table>
                    <table class="table mt-4">
                        <tbody>
                            <tr style="background-color: #fff3cd;">
                                <td>Pending</td>
                                <td>Rp 0 dari 0 deposit.n</td>
                            </tr>
                            <tr style="background-color: #d1e7dd;">
                                <td>Success</td>
                                <td>Rp 0 dari 0 deposit.</td>
                            </tr>
                            <tr style="background-color: #f8d7da;">
                                <td>Canceled</td>
                                <td>Rp 0 dari 0 deposit.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection