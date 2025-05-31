@extends('main')

@section('title', 'Mutasi Saldo')
@section('breadcrumb', 'Log')

@section('content')
    <a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#exampleModal"><i
            class="fa fa-files-o"></i> Salin ID</a>

    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><i class="fa fa-cog"></i> Mutasi Saldo</h5>
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
                                <tr class="text-uppercase">
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>tgl.dibuat</th>
                                    <th>asal</th>
                                    <th>tipe</th>
                                    <th>kategori</th>
                                    <th>jumlah</th>
                                    <th>saldo sebelum</th>
                                    <th>saldo akhir</th>
                                    <th>deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>3843</td>
                                    <td>alwi17</td>
                                    <td>Hari Ini - 01:18</td>
                                    <td><a href="#" class="btn btn-primary btn-rounded">web</a></td>
                                    <td><a href="#" class="btn btn-danger btn-rounded">debit</a></td>
                                    <td>Pesanan </td>
                                    <td>Rp 25.033</td>
                                    <td>Rp 1.049.941</td>
                                    <td>Rp 1.024.908</td>
                                    <td>Melakukan pesanan #3509</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection