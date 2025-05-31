@extends('main')

@section('title', 'Form Info')
@section('breadcrumb', 'Konfigurasi')

@section('content')
    <div class="row mb-4">
        <div class="col-md-3 mt-2">
            <a href="{{ route('dashboard.konfigurasi.forminfo', ['act' => 'infopemesanan']) }}"
                class="btn {{ request()->get('act') == 'infopemesanan' ? 'btn-primary' : 'btn-outline-primary' }} btn-rounded btn-block text-capitalize">info
                pemesanan</a>
        </div>
        <div class="col-md-3 mt-2">
            <a href="{{ route('dashboard.konfigurasi.forminfo', ['act' => 'infodeposit']) }}"
                class="btn {{ request()->get('act') == 'infodeposit' ? 'btn-primary' : 'btn-outline-primary' }} btn-rounded btn-block text-capitalize">info
                deposit</a>
        </div>
        <div class="col-md-3 mt-2">
            <a href="{{ route('dashboard.konfigurasi.forminfo', ['act' => 'infoticket']) }}"
                class="btn {{ request()->get('act') == 'infoticket' ? 'btn-primary' : 'btn-outline-primary' }} btn-rounded btn-block text-capitalize">info
                ticket</a>
        </div>
        <div class="col-md-3 mt-2">
            <a href="{{ route('dashboard.konfigurasi.forminfo', ['act' => 'infopayout']) }}"
                class="btn {{ request()->get('act') == 'infopayout' ? 'btn-primary' : 'btn-outline-primary' }} btn-rounded btn-block text-capitalize">info
                payout</a>
        </div>
        <div class="col-md-3 mt-2">
            <a href="{{ route('dashboard.konfigurasi.forminfo', ['act' => 'inforadeem']) }}"
                class="btn {{ request()->get('act') == 'inforadeem' ? 'btn-primary' : 'btn-outline-primary' }} btn-rounded btn-block text-capitalize">info
                radeem</a>
        </div>
        <div class="col-md-3 mt-2">
            <a href="{{ route('dashboard.konfigurasi.forminfo', ['act' => 'infocheckout']) }}"
                class="btn {{ request()->get('act') == 'infocheckout' ? 'btn-primary' : 'btn-outline-primary' }} btn-rounded btn-block text-capitalize">info
                checkout</a>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-12">
            @if (request()->get('act') == 'infopemesanan')
                @include('dashboard.konfigurasi.forminfopemesanan')
            @endif
            @if (request()->get('act') == 'infodeposit')
                @include('dashboard.konfigurasi.forminfodeposit')
            @endif
            @if (request()->get('act') == 'infoticket')
                @include('dashboard.konfigurasi.forminfoticket')
            @endif
            @if (request()->get('act') == 'infopayout')
                @include('dashboard.konfigurasi.forminfopayout')
            @endif
            @if (request()->get('act') == 'inforadeem')
                @include('dashboard.konfigurasi.forminforadeem')
            @endif
            @if (request()->get('act') == 'infocheckout')
                @include('dashboard.konfigurasi.forminfocheckout')
            @endif
        </div>
    </div>
@endsection