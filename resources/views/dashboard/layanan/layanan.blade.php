@extends('main')

@section('title', 'Data Layanan')
@section('breadcrumb', 'Layanan')

@section('content')
    <a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#exampleModal"><i
            class="fa fa-plus-circle"></i> Tambah</a>
    <a href="#" class="btn btn-rounded btn-danger"><i class="fa fa-refresh"></i> Kosongkan</a>

    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><i class="fa fa-cog"></i> Data Layanan</h5>
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
                                    <th></th>
                                    <th>PROVIDER DATA</th>
                                    <th>HARGA/1000</th>
                                    <th>PROFIT</th>
                                    <th>MIN</th>
                                    <th>MAKS</th>
                                    <th>PROVIDER NAME</th>
                                    <th>PROVIDER SID</th>
                                    <th>STATUS</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>+PK Pints + Random COmments | Max 100k | 15 Minutes</td>
                                    <td>
                                        <ul>
                                            <li>Price in IDR Rp0.989</li>
                                            <li>Kurs Rp 16.000</li>
                                            <li>Price in IDR Rp 12.0098</li>
                                            <li>Profit 17%</li>
                                        </ul>
                                    </td>
                                    <td>Rp 16.000</td>
                                    <td>Rp 16.000</td>
                                    <td>10</td>
                                    <td>10.000</td>
                                    <td>BULK MEDYA</td>
                                    <td>876768</td>
                                    <td>
                                        <a href="#" class="btn btn-rounded mt-2 btn-success">
                                            Aktif
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-rounded mt-2 btn-warning">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <a href="#" class="btn btn-rounded mt-2 btn-danger">
                                            <i class="fa fa-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>+PK Pints + Random COmments | Max 100k | 15 Minutes</td>
                                    <td>
                                        <ul>
                                            <li>Price in IDR Rp0.989</li>
                                            <li>Kurs Rp 16.000</li>
                                            <li>Price in IDR Rp 12.0098</li>
                                            <li>Profit 17%</li>
                                        </ul>
                                    </td>
                                    <td>Rp 16.000</td>
                                    <td>Rp 16.000</td>
                                    <td>10</td>
                                    <td>10.000</td>
                                    <td>BULK MEDYA</td>
                                    <td>876768</td>
                                    <td>
                                        <a href="#" class="btn btn-rounded mt-2 btn-danger">
                                            Nonaktif
                                        </a>
                                    </td>
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
                            <select name="" id="" class="form-control">
                                <option value="">Pilih...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Nama Layanan</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Harga</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Profit</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Harga/1000</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Profit/1000</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Min</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Max</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Provider</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Provider SID</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Refill</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih...</option>
                                <option value="">On</option>
                                <option value="">Off</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Cancel</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih...</option>
                                <option value="">On</option>
                                <option value="">Off</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Tipe</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Auto Update Harga</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih...</option>
                                <option value="">On</option>
                                <option value="">Off</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Auto Update Min</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih...</option>
                                <option value="">On</option>
                                <option value="">Off</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Auto Update Maks</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih...</option>
                                <option value="">On</option>
                                <option value="">Off</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Auto Update Status</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih...</option>
                                <option value="">On</option>
                                <option value="">Off</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Custom Profit (%)</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Custom Monitor</label>

                            <div class="input-group m-b">
                                <div class="input-group-prepend">
                                    <span class="input-group-addon">Success</span>
                                </div>
                                <input type="text" placeholder="Username" class="form-control">
                            </div>
                            <div class="input-group m-b">
                                <div class="input-group-prepend">
                                    <span class="input-group-addon">Warning</span>
                                </div>
                                <input type="text" placeholder="Username" class="form-control">
                            </div>
                            <div class="input-group m-b">
                                <div class="input-group-prepend">
                                    <span class="input-group-addon">Danger</span>
                                </div>
                                <input type="text" placeholder="Username" class="form-control">
                            </div>
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