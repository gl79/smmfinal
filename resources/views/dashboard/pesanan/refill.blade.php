@extends('main')

@section('title', 'Data Refill')
@section('breadcrumb', 'Pesanan')

@section('content')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><i class="fa fa-cog"></i> Data Refill</h5>
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
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>ID REFILL</th>
                                    <th>ID PESANAN</th>
                                    <th>USERNAME</th> <!-- jumlah harga profit -->
                                    <th>LAYANAN</th>
                                    <th>TARGET</th>
                                    <th>PROVIDER</th>
                                    <th>PROVIDER RID</th>
                                    <th>ASAL</th>
                                    <th>STATUS</th>
                                    <th>TGL.DIBUAT</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>15</td>
                                    <td>2710</td>
                                    <td>zapsbzs</td>
                                    <td>TikTok Followers [ Brazil 🇧🇷 ] [ Max 10M ] | %100 Real Brazilian
                                        Accounts | Cancel Enable | 30 Days ♻️ | Instant Start | Day 50K 🚀</td>
                                    <td>keysan_host</td>
                                    <td>SMM COST</td>
                                    <td>Hari Ini - 22:35</td>
                                    <td>WEB</td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-rounded">Processing</a>
                                    </td>
                                    <td>Hari Ini - 22:35</td>
                                    <td>
                                        <a href="#" class="btn btn-rounded mt-2 btn-primary">
                                            <i class="fa fa-eye"></i> Lihat Detail
                                        </a>
                                        <a href="#" class="btn btn-rounded mt-2 btn-danger">
                                            <i class="fa fa-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection