@extends('main')

@section('title', ' User')
@section('breadcrumb', 'Role')

@section('content')
<a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#exampleModal"><i
        class="fa fa-plus-circle"></i> Tambah</a>

<div class="row mt-4">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5><i class="fa fa-users"></i> Data User</h5>
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
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="ibox ">
            <div class="ibox-title">
                <h5><i class="fa fa-user"></i> Akun</h5>
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
                <table width="100%">
                    <tr>
                        <th width="50%">ID</th>
                        <td width="50%">2</td>
                    </tr>
                    <tr>
                        <th width="50%">Nama Lengkap</th>
                        <td width="50%">Budi Setiawan</td>
                    </tr>
                    <tr>
                        <th width="50%">Email</th>
                        <td width="50%">example@gmail.com</td>
                    </tr>
                    <tr>
                        <th width="50%">Whatsapp</th>
                        <td width="50%">62898776778</td>
                    </tr>
                    <tr>
                        <th width="50%">Username</th>
                        <td width="50%">budi123</td>
                    </tr>
                    <tr>
                        <th width="50%">Saldo</th>
                        <td width="50%">Rp 90,000</td>
                    </tr>
                    <tr>
                        <th width="50%">Zona Waktu</th>
                        <td width="50%">Asia/Jakarta</td>
                    </tr>
                    <tr>
                        <th width="50%">Status Akun</th>
                        <td width="50%" class="text-success">
                            <i class=""></i> Active
                        </td>
                    </tr>
                    <tr>
                        <th width="50%">Tanggal Buat</th>
                        <td width="50%">Minggu, 25 mei 2025 - 19:00</td>
                    </tr>
                    <tr>
                        <td colspan="2"><br><br>
                            <a href="" class="btn btn-rounded btn-block btn-primary"><i class="fa fa-link"></i>
                                Login</a>
                            <a href="" class="btn btn-rounded btn-block btn-success"><i class="fa fa-edit"></i>
                                Status</a>
                            <a href="" class="btn btn-rounded btn-block btn-warning"><i class="fa fa-edit"></i>
                                Ubah</a>
                            <a href="" class="btn btn-rounded btn-block btn-danger"><i class="fa fa-trash"></i>
                                Hapus</a>
                        </td>
                    </tr>
                </table>
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
                        <label for="" class="pt-2">Judul</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="pt-2">Isi</label>
                        <textarea name="" class="form-control" id=""></textarea>
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