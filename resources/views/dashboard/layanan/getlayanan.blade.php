@extends('main')

@section('title', 'Get Layanan')
@section('breadcrumb', 'Layanan')

@section('content')

    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><i class="fa fa-cog"></i> Get Layanan</h5>
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
                    <form action="" class="mb-3">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Provider</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih...</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="">Kategori Provider</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih...</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="">Kategori</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih...</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="">&nbsp;</label><br>
                                <button class="btn btn-primary">Get Layanan</button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAMA LAYANAN</th>
                                    <th>HARGA SEBELUM</th>
                                    <th>HARGA SESUDAH</th>
                                    <th>PROFIT</th>
                                    <th>STATUS</th>
                                    <th>REFILL</th>
                                    <th>CANCEL</th>
                                    <th>MIN</th>
                                    <th>MAX</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>87</td>
                                    <td>+PK Pints + Random COmments | Max 100k | 15 Minutes</td>
                                    <td>Rp 321</td>
                                    <td>Rp 900</td>
                                    <td>Rp 80</td>
                                    <td>
                                        <a href="#" class="btn btn-rounded mt-2 btn-success">
                                            Aktif
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-rounded mt-2 btn-success">
                                            ON
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-rounded mt-2 btn-danger">
                                            OFF
                                        </a>
                                    </td>
                                    <td>10</td>
                                    <td>10,000</td>
                                    <td>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="" class="pt-2">Kategori</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-rounded"><i class="fa fa-refresh"></i>
                            Ulangi</button>
                        <button type="button" class="btn btn-primary btn-rounded"><i class="fa fa-save"></i> Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection