@extends('main')

@section('title', 'Kirim Saldo')
@section('breadcrumb', 'Deposit')

@section('content')
    <a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#exampleModal"><i
            class="fa fa-files-o"></i> Salin ID</a>

    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><i class="fa fa-cog"></i> Kirim Saldo</h5>
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
                        Fitur ini digunakan untuk mengirim saldo ke pengguna. Jika Anda menggunakan fitur ini, data akan
                        otomatis masuk ke Riwayat Deposit / Data Deposit.
                    </div>
                    <form action="">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="" class="pt-2">Username</label>
                                <select name="" id="" class="form-control">
                                    <option value="">-- Pilih --</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="" class="pt-2">Jumlah</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="col-md-12 d-flex justify-content-end mt-3">
                                <label for="">&nbsp;</label><br>
                                <button class="btn btn-primary btn-rounded" type="submit"><i class="fa fa-send"></i>
                                    Kirim Saldo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection