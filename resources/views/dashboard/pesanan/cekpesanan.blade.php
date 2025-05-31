@extends('main')

@section('title', 'Cek Pesanan')
@section('breadcrumb', 'Pesanan')

@section('content')
<div class="ibox ">
    <div class="ibox-title">
        <h5><i class="fa fa-cog"></i> Cek Pesanan</h5>
    </div>
    <div class="ibox-content">
        <form action="">
            <div class="row">
                <div class="col-md-12">
                    <label for="" class="pt-2">Saparator</label>
                    <select name="" id="" class="form-control">
                        <option>koma</option>
                        <option>enter</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="" class="pt-2">Field</label>
                    <select name="" id="" class="form-control">
                        <option>ID Pemesanan Web</option>
                        <option>ID Pemesanan Provider</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="" class="pt-2">provider</label>
                    <select name="" id="" class="form-control">
                        <option value="">Pilih...</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="" class="pt-2">ID Pesanan</label>
                    <textarea name="" id="" class="form-control"></textarea>
                </div>

                <div class="col-md-12 d-flex justify-content-end mt-3">
                    <label for="">&nbsp;</label><br>
                    <!-- <button class="btn btn-danger btn-rounded" type="reset"><i class="fa fa-refresh"></i> Reset</button>
                                                                                                                    &nbsp; -->
                    <button class="btn btn-primary btn-rounded" type="submit"><i class="fa fa-search"></i>
                        Cek Status</button>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="row mt-4">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5><i class="fa fa-cog"></i> Data Pesanan #1</h5>
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
                <a href="#" class="btn btn-primary btn-rounded me-2">
                    <i class="fa fa-copy icon-left"></i> Salin Web OID
                </a>
                <a href="#" class="btn btn-warning btn-rounded">
                    <i class="fa fa-copy icon-left"></i> Salin Provider OID
                </a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>USERNAME</th>
                                <th>LAYANAN</th>
                                <th>TARGET</th>
                                <th>JUMLAH</th>
                                <th>HARGA</th>
                                <th>PROFIT</th>
                                <th>PROVIDER OID</th>
                                <th>ASAL</th>
                                <th>STATUS</th>
                                <th>TGL.DIBUAT</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>21435435</td>
                                <td>instagram follow 100k</td>
                                <td>hzz123</td>
                                <td>1.000</td>
                                <td>Rp 90.000</td>
                                <td>Rp 90.000</td>
                                <td>SMM CONT</td>
                                <td>3428764</td>
                                <td>WEB</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-rounded">Processing</a>
                                </td>
                                <td>Hari Ini - 00:13</td>
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