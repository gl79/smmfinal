@extends('main')

@section('title', 'Data Tiket')
@section('breadcrumb', 'Tiket')

@section('content')
<a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#exampleModal"><i
        class="fa fa-plus-circle"></i> Kirim Tiket</a>

<div class="row mt-4">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5><i class="fa fa-cog"></i> Data Tiket</h5>
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
                                <th>Tgl. Dibuat</th>
                                <th>Tgl. Pembaruan</th>
                                <th>Tipe</th>
                                <th>Subjek</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>fakhri</td>
                                <td>Minggu, 18 Mei 2025 - 16:38</td>
                                <td>Hari Ini - 00:4</td>
                                <td>Pesanan</td>
                                <td>cancel</td>
                                <td>
                                    <a href="#" class="btn btn-rounded  btn-success">
                                        Answered
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('dashboard.tiket.open') }}" class="btn btn-rounded  btn-primary">
                                        <i class="fa fa-eye"></i> Buka Tiket
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
                        <label for="" class="pt-2">Username</label>
                        <select name="" id="" class="form-control">
                            <option value="">pilih ...</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="pt-2">Subjek</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="pt-2">Tipe</label>
                        <select name="" id="" class="form-control">
                            <option value="">pilih ...</option>
                            <option value="">Pesanan</option>
                            <option value="">Deposit</option>
                            <option value="">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="pt-2">Pesan</label>
                        <textarea name="" id="" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="pt-2">Lampiran</label>
                        <input type="file" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-rounded"><i class="fa fa-refresh"></i>
                        Ulangi</button>
                    <button type="button" class="btn btn-primary btn-rounded"><i class="fa fa-save"></i> Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection