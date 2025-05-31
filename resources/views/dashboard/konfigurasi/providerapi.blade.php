@extends('main')

@section('title', 'Provider API')
@section('breadcrumb', 'Konfigurasi')

@section('content')
    <a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#exampleModal"><i
            class="fa fa-plus-circle"></i> Tambah</a>

    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><i class="fa fa-cog"></i> Konfigurasi Provider API</h5>
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
                                    <th>PROVIDER</th>
                                    <th>PROFIT (%)</th>
                                    <th>CRONJOBS</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        BLINK Followers
                                        <br><small>ast sync : 13 menit yang lalu</small>
                                    </td>
                                    <td>18%</td>
                                    <td>
                                        <ul>
                                            <li>Auto Add - <span class="text-danger">off</span></li>
                                            <li>Auto Update - <span class="text-success">on</span></li>
                                            <li>Auto Status - <span class="text-success">on</span></li>
                                            <li>Auto Reffil - <span class="text-success">on</span></li>
                                            <li>Auto Cancel - <span class="text-success">on</span></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-rounded mt-2 btn-primary">
                                            <i class="fa fa-refresh"></i> Sync
                                        </a>
                                        <a href="#" class="btn btn-rounded mt-2 btn-primary">
                                            <i class="fa fa-random"></i> Parameter
                                        </a>
                                        <a href="#" class="btn btn-rounded mt-2 btn-success">
                                            <i class="fa fa-random"></i> Test API
                                        </a>
                                        <a href="#" class="btn btn-rounded mt-2 btn-info">
                                            <i class="fa fa-copy"></i> Duplikat
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
                            <label for="" class="pt-2">Jenis API</label> <br>
                            <label for=""><input type="radio" value="" name="jenis_api"> CUSTOM</label><br>
                            <label for=""><input type="radio" value="" name="jenis_api"> API</label><br>
                            <label for=""><input type="radio" value="" name="jenis_api"> APIP V2</label>
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Rekomendasi API</label><br>
                            <label><input type="radio" name="jenis_api" value="example.com"> example.com</label><br>
                            <label><input type="radio" name="jenis_api" value="mywebsite.net"> mywebsite.net</label><br>
                            <label><input type="radio" name="jenis_api" value="sampledomain.org">
                                sampledomain.org</label><br>
                            <label><input type="radio" name="jenis_api" value="testsite.io"> testsite.io</label><br>
                            <label><input type="radio" name="jenis_api" value="demoapp.dev"> demoapp.dev</label><br>
                            <label><input type="radio" name="jenis_api" value="coolproject.co"> coolproject.co</label><br>
                            <label><input type="radio" name="jenis_api" value="webportal.info"> webportal.info</label><br>
                            <label><input type="radio" name="jenis_api" value="appdemo.online"> appdemo.online</label><br>
                            <label><input type="radio" name="jenis_api" value="fakesite.xyz"> fakesite.xyz</label><br>
                            <label><input type="radio" name="jenis_api" value="sandboxsite.tech">
                                sandboxsite.tech</label><br>
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Rekomendasi API (App Premium)</label><br>
                            <label><input type="radio" name="jenis_api" value="example.com"> example.com</label><br>
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Provider</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Profit (%)</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">API ID</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">API Key</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Secret Key</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Add Service</label><br>
                            <input type="checkbox" class="js-switch" checked />
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">Update Service</label><br>
                            <input type="checkbox" class="js-switch2" checked />
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">On/Off Service Otomatis</label><br>
                            <input type="checkbox" class="js-switch3" checked />
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">On/Off Service Refill</label><br>
                            <input type="checkbox" class="js-switch4" checked />
                        </div>
                        <div class="form-group">
                            <label for="" class="pt-2">On/Off Service Cancel</label><br>
                            <input type="checkbox" class="js-switch5" checked />
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