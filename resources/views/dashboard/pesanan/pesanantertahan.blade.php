@extends('main')

@section('title', 'Pesanan Tertahan')
@section('breadcrumb', 'Pesanan')

@section('content')
    <div class="ibox ">
        <div class="ibox-title">
            <h5><i class="fa fa-cog"></i> Pesanan Tertahan</h5>
        </div>
        <div class="ibox-content">
            <div class="alert alert-info">Fitur ini digunakan untuk mengecek ID Pesanan yang stuck / tertahan. Anda bisa
                gunakan fitur ini jika terdapat beberapa pesanan yang sudah lama dengan status pesanan yang stuck /
                tertahan. Tentunya data yang dihasilkan adalah data pesanan dengan status Pending dan Processing. Anda juga
                dapat memilih untuk result yang dihasilkan seperti (Koma / Enter) dan (ID Pesanan Web / ID Pesanan
                Provider).</div>
            <div class="alert alert-info">Tekan tombol Reset dibawah untuk menghilangkan result.</div>
            <div class="alert alert-success">
                <strong>Panding :</strong>
                <p>1234,234</p>
            </div>
            <form action="">
                <div class="row">
                    <div class="col-md-3">
                        <label for="" class="pt-2">Tanggal</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="pt-2">Saparator</label>
                        <select name="" id="" class="form-control">
                            <option>koma</option>
                            <option>enter</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="pt-2">Field</label>
                        <select name="" id="" class="form-control">
                            <option>ID Pemesanan Web</option>
                            <option>ID Pemesanan Provider</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="pt-2">provider</label>
                        <select name="" id="" class="form-control">
                            <option value="">Pilih...</option>
                        </select>
                    </div>

                    <div class="col-md-12 text-right">
                        <label for="">&nbsp;</label><br>
                        <button type="button" class="btn btn-danger btn-rounded"><i class="fa fa-refresh"></i>
                            Ulangi</button>
                        <button class="btn btn-primary btn-rounded" type="submit"><i class="fa fa-search"></i>
                            Cek Status</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection