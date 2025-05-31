@extends('main')

@section('title', 'Data Kategori')
@section('breadcrumb', 'Layanan')

@section('content')
    <a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#exampleModal"><i
            class="fa fa-plus-circle"></i> Tambah</a>
    <a href="#" class="btn btn-rounded btn-danger"><i class="fa fa-refresh"></i> Kosongkan</a>

    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><i class="fa fa-cog"></i> Data Kategori</h5>
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
                                    <th>ID</th>
                                    <th>KATEGORI</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>21435435</td>
                                    <td>instagram follow 100k</td>
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