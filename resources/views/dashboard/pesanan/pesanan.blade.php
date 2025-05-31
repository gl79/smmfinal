@extends('main')

@section('title', 'Data Pesanan')
@section('breadcrumb', 'Pesanan')

@section('content')
<div class="row mt-4">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5><i class="fa fa-cog"></i> Data Pesanan</h5>
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
                <a href="#" class="btn btn-primary btn-rounded">
                    <i class="fa fa-copy icon-left"></i> Salin OID
                </a>
                <a href="#" class="btn btn-warning btn-rounded">
                    <i class="fa fa-edit icon-left"></i> Ubah Status
                </a>
                <a href="#" class="btn btn-danger btn-rounded">
                    <i class="fa fa-refresh icon-left"></i> Proses Ulang Massal
                </a>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                            <tr>
                                <th></th>
                                <th>IDW / IDP / U</th>
                                <th>P / L / T</th>
                                <th>J / H / P</th> <!-- jumlah harga profit -->
                                <th>STATUS</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>980 / 978378934678 / <span title="Detail Pengguna">alwi17</span></td>
                                <td>
                                    <!-- time -->
                                    <small>Kemarin - 22.08</small> <br>
                                    <i class="fa fa-globe"></i> / Provider <br>
                                    Nama Layanan
                                    <div class="input-group m-b">
                                        <input type="text" placeholder="Username" class="form-control">
                                        <div class="input-group-prepend">
                                            <span class="input-group-addon bg-primary"><i
                                                    class="fa fa-files-o"></i></span>
                                        </div>
                                    </div>
                                </td>
                                <td>200 <br> Rp 5.000 / Rp. 704</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-rounded">Processing</a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-rounded mt-2 btn-info">
                                        <i class="fa fa-check-circle"></i> Cek Status
                                    </a>
                                    <a href="#" class="btn btn-rounded mt-2 btn-primary">
                                        <i class="fa fa-eye"></i> Lihat Detail
                                    </a>
                                    <a href="#" class="btn btn-rounded mt-2 btn-secondary">
                                        <i class="fa fa-ban"></i> Blok
                                    </a>
                                    <a href="#" class="btn btn-rounded mt-2 btn-warning">
                                        <i class="fa fa-edit"></i> Edit
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