@extends('main')

@section('title', 'Update Layanan')
@section('breadcrumb', 'Log')

@section('content')
    <a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#exampleModal"><i
            class="fa fa-files-o"></i> Salin ID</a>

    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><i class="fa fa-cog"></i> Update Layanan</h5>
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
                                    <th>id layanan</th>
                                    <th>nama layanan</th>
                                    <th>tipe</th>
                                    <th>tanggal pembaharuan</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>105908</td>
                                    <td>49279</td>
                                    <td>TikTok Likes [ Vietnam 🇻🇳 ] [ Max 5K ] | %100 Vietnamese Profiles | No Refill ⚠️ |
                                        Instant Start | Day 5K</td>
                                    <td><a href="#" class="btn btn-danger btn-rounded">Service disabled</a></td>
                                    <td>Hari Ini - 01:35 </td>
                                    <td>
                                        <a href="#" class="btn btn-rounded mt-2 btn-primary">
                                            <i class="fa fa-eye"></i> Lihat Detail
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