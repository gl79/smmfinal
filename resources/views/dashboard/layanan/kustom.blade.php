@extends('main')

@section('title', 'Kostum Layanan')
@section('breadcrumb', 'Layanan')

@section('content')
    <a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#exampleModal"><i
            class="fa fa-plus-circle"></i> Tambah</a>

    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><i class="fa fa-cog"></i> Kustom Layanan</h5>
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

                    <div class="alert alert-info">
                        <strong>Fitur ini digunakan jika Anda ingin membuat harga khusus untuk pengguna
                            tertentu.</strong>
                        <p>Contoh: terdapat layanan dengan nama Instagram Followers 123 dengan harga Rp 2.000, kemudian
                            Anda ingin membuat harga khusus untuk pengguna tertentu, Anda bisa menggunakan fitur ini
                            dengan
                            opsi input seperti berikut:</p>
                        <p> Nama pengguna: kode adz</p>
                        <p>Kategori: Instagram Followers</p>
                        <p>Layanan: Instagram Followers 123</p>
                        <p>Persentase Harga: 10%</p>
                        <p>Maka ketika pengguna adzcode melakukan pemesanan atau cek daftar layanan, harga yang
                            sebelumnya
                            adalah Rp 2.000 akan berubah menjadi Rp 1.800 karena mendapatkan Persentase Harga sebesar
                            10%.</p>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>USERNAME</th>
                                    <th>ID LAYANAN</th>
                                    <th>NAMA LAYANAN</th>
                                    <th>PERSENTASE HARGA</th>
                                    <th>HARGA NORMAL</th>
                                    <th>PROFIT NORMAL</th>
                                    <th>HARGA KUSTOM</th>
                                    <th>PROFIL KUSTOM</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Example@gmail.com</td>
                                    <td>67888777666</td>
                                    <td>Instagram 200 Followers</td>
                                    <td>12</td>
                                    <td>12,000</td>
                                    <td>2,000</td>
                                    <td>12,000</td>
                                    <td>2,000</td>
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
                            <label for="" class="pt-2">Pilih Username</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Pilih Kategori</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Pilih Layanan</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Harga Normal</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Profil Normal</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Persentase Harga (%)</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Harga Kustom</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Profil Kustom</label>
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