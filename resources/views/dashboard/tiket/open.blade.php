@extends('main')

@section('title', 'Open Tiket')
@section('breadcrumb', 'Tiket')

@section('content')
    <a href="{{ route('dashboard.tiket.tiket') }}" class="btn btn-rounded btn-primary"><i class="fa fa-arrow-left"></i>
        Kembali</a>

    <div class="row mt-4">
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><i class="fa fa-cog"></i> Informasi</h5>
                </div>
                <div class="ibox-content">
                    <div class="">
                        <strong>Subjek</strong>
                        <p>539 + cancel</p>
                    </div>
                    <div class="">
                        <strong>Tipe</strong>
                        <p>Pesanan</p>
                    </div>
                    <div class="">
                        <strong>Status</strong>
                        <p>
                            <a href="" class="btn btn-rounded btn-primary">Answered</a>
                        </p>
                    </div>
                    <div class="">
                        <strong>Pembaruan Terakhir</strong>
                        <p>1 Hari yang lalu</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="ibox ">
                <div class="ibox-content">
                    <div>
                        <div class="chat-activity-list">
                            <div class="chat-element">
                                <a href="#" class="float-left">
                                    <img alt="image" class="rounded-circle" src="{{ asset('img/a2.jpg') }}" />
                                </a>
                                <div class="media-body">
                                    <small class="float-right text-navy">1m ago</small>
                                    <strong>Mike Smith</strong>
                                    <p class="m-b-xs">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been
                                    </p>
                                    <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                </div>
                            </div>

                            <div class="chat-element right">
                                <a href="#" class="float-right">
                                    <img alt="image" class="rounded-circle" src="{{ asset('img/a4.jpg') }}" />
                                </a>
                                <div class="media-body text-right">
                                    <small class="float-left">5m ago</small>
                                    <strong>John Smith</strong>
                                    <p class="m-b-xs">
                                        Lorem Ipsum is simply dummy text of the printing.
                                    </p>
                                    <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                </div>
                            </div>

                            <div class="chat-element">
                                <a href="#" class="float-left">
                                    <!-- {{ asset('js/jquery-3.1.1.min.js') }} -->
                                    <img alt="image" class="rounded-circle" src="{{ asset('img/a2.jpg') }}" />
                                </a>
                                <div class="media-body">
                                    <small class="float-right">2h ago</small>
                                    <strong>Mike Smith</strong>
                                    <p class="m-b-xs">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been
                                    </p>
                                    <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><i class="fa fa-cog"></i> Balas Tiket</h5>
                </div>
                <div class="ibox-content">
                    <form action="">
                        <div class="form-group">
                            <label for="">Pesan</label>
                            <textarea name="" id="" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Lampiran</label>
                            <input type="file" name="" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">&nbsp;</label><br>
                            <button type="button" class="btn btn-danger btn-rounded"><i class="fa fa-refresh"></i>
                                Ulangi</button>
                            <button type="button" class="btn btn-primary btn-rounded"><i class="fa fa-save"></i>
                                Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection