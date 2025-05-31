@extends('main')

@section('title', 'Dashboard')
@section('breadcrumb', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="ibox ">
                <div class="ibox-title bg-primary">
                    <h5>Saldo Anda</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">Rp 100.000,00</h1>
                    <!-- <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div> -->
                    <small>Total saldo</small>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox ">
                <div class="ibox-title bg-warning">
                    <!-- <span class="label label-info float-right">Total Pesanan</span> -->
                    <h5>Total Pesanan</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">275,800</h1>
                    <!-- <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div> -->
                    <small>Pesanan</small>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox ">
                <div class="ibox-title bg-danger">
                    <!-- <span class="label label-primary float-right">Today</span> -->
                    <h5>Deposit</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">Rp 106.120,00</h1>
                    <!-- <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div> -->
                    <small>Total Deposit</small>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Update Layanan</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="feed-activity-list">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="feed-element">
                                <div>
                                    <small class="float-right text-navy">1m ago</small>
                                    <!-- <strong>Monica Smith</strong> -->
                                    <small class="text-muted">Today 5:60 pm - 12.06.2014</small>
                                    <div class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-sm btn-outline-primary rounded-pill">
                                            <i class="fa fa-paper-plane"></i> Pesan
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill">
                                            <i class="fa fa-search"></i> Log
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-info rounded-pill">
                                            <i class="fa fa-cogs"></i> Layanan
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-warning rounded-pill">
                                            <i class="fa fa-desktop"></i> Monitor
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Informasi Terbaru</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="feed-activity-list">
                        <div class="feed-element">
                            <div>
                                <small class="float-right text-navy">1m ago</small>
                                <strong class="badge bg-danger rounded-pill"><i class="fa fa-wrench"></i>
                                    PERBAIKAN</strong>
                                <div class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem
                                    Ipsum
                                </div>
                                <small class="text-muted">Today 5:60 pm - 12.06.2014</small>
                            </div>
                        </div>
                        <div class="feed-element">
                            <div>
                                <small class="float-right text-navy">1m ago</small>
                                <strong class="badge bg-success rounded-pill"><i class="fa fa-cogs"></i>
                                    LAYANAN</strong>
                                <div class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem
                                    Ipsum
                                </div>
                                <small class="text-muted">Today 5:60 pm - 12.06.2014</small>
                            </div>
                        </div>
                        <div class="feed-element">
                            <div>
                                <small class="float-right text-navy">1m ago</small>
                                <strong class="badge bg-info rounded-pill"><i class="fa fa-info-circle"></i>
                                    INFORMASI</strong>
                                <div class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem
                                    Ipsum
                                </div>
                                <small class="text-muted">Today 5:60 pm - 12.06.2014</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection