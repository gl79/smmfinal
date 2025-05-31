@extends('main')

@section('title', 'Website')
@section('breadcrumb', 'Konfigurasi')

@section('content')
    <div class="row mb-4">
        <div class="col-md-2 mt-2">
            <a href="{{ route('dashboard.konfigurasi.website', ['act' => 'umum']) }}"
                class="btn {{ request()->get('act') == 'umum' ? 'btn-primary' : 'btn-outline-primary' }} btn-rounded btn-block">Umum</a>
        </div>
        <div class="col-md-2 mt-2">
            <a href="{{ route('dashboard.konfigurasi.website', ['act' => 'landingpage']) }}"
                class="btn {{ request()->get('act') == 'landingpage' ? 'btn-primary' : 'btn-outline-primary' }} btn-rounded btn-block">Landing
                Page</a>
        </div>
        <div class="col-md-2 mt-2">
            <a href="{{ route('dashboard.konfigurasi.website', ['act' => 'loginpage']) }}"
                class="btn {{ request()->get('act') == 'loginpage' ? 'btn-primary' : 'btn-outline-primary' }} btn-rounded btn-block">Login
                Page</a>
        </div>
        <div class="col-md-2 mt-2">
            <a href="{{ route('dashboard.konfigurasi.website', ['act' => 'registerpage']) }}"
                class="btn {{ request()->get('act') == 'registerpage' ? 'btn-primary' : 'btn-outline-primary' }} btn-rounded btn-block">Register
                Page</a>
        </div>
        <div class="col-md-2 mt-2">
            <a href="{{ route('dashboard.konfigurasi.website', ['act' => 'forgetpage']) }}"
                class="btn {{ request()->get('act') == 'forgetpage' ? 'btn-primary' : 'btn-outline-primary' }} btn-rounded btn-block">Forget
                Page</a>
        </div>
        <div class="col-md-2 mt-2">
            <a href="{{ route('dashboard.konfigurasi.website', ['act' => 'userpage']) }}"
                class="btn {{ request()->get('act') == 'userpage' ? 'btn-primary' : 'btn-outline-primary' }} btn-rounded btn-block">User
                Page</a>
        </div>
        <div class="col-md-2 mt-2">
            <a href="{{ route('dashboard.konfigurasi.website', ['act' => 'bot']) }}"
                class="btn {{ request()->get('act') == 'bot' ? 'btn-primary' : 'btn-outline-primary' }} btn-rounded btn-block">Bot</a>
        </div>
        <div class="col-md-2 mt-2">
            <a href="{{ route('dashboard.konfigurasi.website', ['act' => 'maintenence']) }}"
                class="btn {{ request()->get('act') == 'maintenence' ? 'btn-primary' : 'btn-outline-primary' }} btn-rounded btn-block">Maintenence</a>
        </div>
        <div class="col-md-2 mt-2">
            <a href="{{ route('dashboard.konfigurasi.website', ['act' => 'cutomstatistic']) }}"
                class="btn {{ request()->get('act') == 'cutomstatistic' ? 'btn-primary' : 'btn-outline-primary' }} btn-rounded btn-block">Custom
                Statistic</a>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-12">
            @if (request()->get('act') == 'umum')
                @include('dashboard.konfigurasi.websiteumum')
            @endif
            @if (request()->get('act') == 'landingpage')
                @include('dashboard.konfigurasi.websitelandingpage')
            @endif
            @if (request()->get('act') == 'loginpage')
                @include('dashboard.konfigurasi.websiteloginpage')
            @endif
            @if (request()->get('act') == 'registerpage')
                @include('dashboard.konfigurasi.websiteregisterpage')
            @endif
            @if (request()->get('act') == 'forgetpage')
                @include('dashboard.konfigurasi.websiteforgetpage')
            @endif
            @if (request()->get('act') == 'userpage')
                @include('dashboard.konfigurasi.websiteuserpage')
            @endif
            @if (request()->get('act') == 'bot')
                @include('dashboard.konfigurasi.websitebot')
            @endif
            @if (request()->get('act') == 'maintenence')
                @include('dashboard.konfigurasi.websitemaintenence')
            @endif
            @if (request()->get('act') == 'cutomstatistic')
                @include('dashboard.konfigurasi.websitecutomstatistic')
            @endif
        </div>
    </div>
@endsection