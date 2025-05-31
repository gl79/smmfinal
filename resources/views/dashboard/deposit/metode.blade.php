@extends('main')

@section('title', 'Metode Deposit')
@section('breadcrumb', 'Deposit')

@section('content')
    <a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#exampleModal"><i
            class="fa fa-plus-circle"></i> Tambah</a>

    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><i class="fa fa-cog"></i> Metode Deposit</h5>
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
                                    <th>ID</th>
                                    <th>METODE PEMBAYARAN</th>
                                    <th>GAMBAR METODE</th>
                                    <th>NAMA METODE</th>
                                    <th>BONUS DEPOSIT</th>
                                    <th>MAX DEPOSIT</th>
                                    <th>DESKRIPSI SINGKAT</th>
                                    <th>STATUS</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Transfer Bank</td>
                                    <td></td>
                                    <td>BCA Manual</td>
                                    <td>>= Rp 10.0000 (Bonus : 13%)</td>
                                    <td>Rp 100.000.000 </td>
                                    <td>Dicek 1-5 Menit</td>
                                    <td>
                                        <a href="#" class="btn btn-rounded  btn-success">
                                            Aktif
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-rounded  btn-warning">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <a href="#" class="btn btn-rounded  btn-danger">
                                            <i class="fa fa-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>Transfer Bank</td>
                                    <td></td>
                                    <td>BCA Manual</td>
                                    <td>>= Rp 10.0000 (Bonus : 13%)</td>
                                    <td>Rp 100.000.000 </td>
                                    <td>Dicek 1-5 Menit</td>
                                    <td>
                                        <a href="#" class="btn btn-rounded  btn-danger">
                                            Nonaktif
                                        </a>
                                    </td>
                                    <td>
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