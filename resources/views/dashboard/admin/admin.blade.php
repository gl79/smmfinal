@extends('../../main')

@section('title', 'Dashboard')
@section('breadcrumb', 'Dashboard')

@section('content')
<div class="text-center">
    <h1>Selamat datang di Zeps Media !</h1>
</div>
<div class="text-center">
    <marquee
        direction="down"
        width="250"
        height="200"
        behavior="alternate"
        style="border:solid">
        <marquee behavior="alternate">
            <h2>Under Development</h2>
        </marquee>
    </marquee>
</div>
@endsection