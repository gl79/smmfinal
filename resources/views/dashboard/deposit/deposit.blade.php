@extends('main')

@section('title', 'Data Deposit')
@section('breadcrumb', 'Deposit')

@section('content')
    <a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#exampleModal"><i
            class="fa fa-files-o"></i> Salin ID</a>

    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><i class="fa fa-cog"></i> Data Deposit</h5>
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
                                    <th>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="select-all">
                                        </div>
                                    </th>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Pembayaran</th>
                                    <th>Metode</th>
                                    <th class="text-nowrap">Jumlah Transfer</th>
                                    <th class="text-nowrap">Saldo Diterima</th>
                                    <th>Status</th>
                                    <th class="text-nowrap">Tgl. Deposit</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="select-all">
                                        </div>
                                    </th>
                                    <td>169</td>
                                    <td>fakhri</td>
                                    <td>QRIS</td>
                                    <td>QRIS ( FEE 0.7% ) ( BONUS 13% )</td>
                                    <td>Rp 251.750</td>
                                    <td>Rp 282.500</td>
                                    <td>
                                        <a href="#" class="btn btn-rounded  btn-success">
                                            Paid
                                        </a>
                                    </td>
                                    <td>Kemarin - 23:01</td>
                                    <td>
                                        <a href="#" class="btn btn-rounded mt-2 btn-primary">
                                            <i class="fa fa-eye"></i> Lihat Detail
                                        </a>
                                        <a href="#" class="btn btn-rounded  btn-warning">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <a href="#" class="btn btn-rounded  btn-danger">
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
                            <label for="" class="pt-2">Gambar Metode</label>
                            <input type="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Pembayaran</label>
                            <select name="" id="" class="form-control">
                                <option>QRIS</option>
                                <option>Transfer eWallet</option>
                                <option>Transfer Pulsa</option>
                                <option>Transfer Bank</option>
                                <option>Virtual Account</option>
                                <option>Mini Market</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Payment Gateway</label>
                            <select name="" id="" class="form-control">
                                <option value="">pilih ...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Nama Metode</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Kode Pembayaran</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Deskripsi</label>
                            <input type="text" class="form-control">
                            <textarea name="" id="" class="form-control mt-1"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Deskripsi Singkat</label>
                            <textarea name="" id="" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Minimal Deposit</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Bonus Deposit</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Maksimal Deposit</label>
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