@extends('main')

@section('title', 'Cek Provider')
@section('breadcrumb', 'Pesanan')

@section('content')
    <div class="ibox ">
        <div class="ibox-title">
            <h5><i class="fa fa-cog"></i> Cek Provider</h5>
        </div>
        <div class="ibox-content">
            <div class="alert alert-success">
                <p>Respon: Berhasil</p>
                <p>Pesan:</p>
                <p>ID Pesanan: 3473, ID Provider: 335309098</p>
                <p>ID Pesanan: 3473, ID Provider: 335309098</p>
            </div>
            <form action="">
                <div class="row">
                    <div class="col-md-12">
                        <label for="" class="pt-2">Saparator</label>
                        <select name="" id="" class="form-control">
                            <option>koma</option>
                            <option>enter</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="" class="pt-2">Field</label>
                        <select name="" id="" class="form-control">
                            <option>ID Pemesanan Web</option>
                            <option>ID Pemesanan Provider</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="" class="pt-2">provider</label>
                        <select name="" id="" class="form-control">
                            <option value="">Pilih...</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="" class="pt-2">ID Pesanan</label>
                        <textarea name="" id="" class="form-control"></textarea>
                    </div>

                    <div class="col-md-12 d-flex justify-content-end mt-3">
                        <label for="">&nbsp;</label><br>
                        <!-- <button class="btn btn-danger btn-rounded" type="reset"><i class="fa fa-refresh"></i> Reset</button>
                                                                                                                                        &nbsp; -->
                        <button class="btn btn-primary btn-rounded" type="submit"><i class="fa fa-search"></i>
                            Cek Status</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection