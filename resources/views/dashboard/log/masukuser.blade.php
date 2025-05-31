@extends('main')

@section('title', 'Masuk User')
@section('breadcrumb', 'Log')

@section('content')
    <a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#exampleModal"><i
            class="fa fa-files-o"></i> Salin ID</a>

    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><i class="fa fa-cog"></i> Masuk User</h5>
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
                                    <th>username</th>
                                    <th>tgl.masuk</th>
                                    <th>ip address</th>
                                    <th>user agent</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>25</td>
                                    <td>test1</td>
                                    <td>Kemarin - 19:48 </td>
                                    <td>103.38.106.16</td>
                                    <td>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko)
                                        Chrome/136.0.0.0 Safari/537.36</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection