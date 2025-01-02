@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <!-- Contoh Header -->
    <div class="jumbotron text-center">
        <h1>Selamat Datang di SiJasa</h1>
        <p class="lead">Platform layanan jasa yang memudahkan Anda dalam memenuhi kebutuhan sehari-hari.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Pelajari Lebih Lanjut</a>
    </div>

    <!-- Contoh Section Cards -->
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Layanan IT</h5>
                    <p class="card-text">Dapatkan solusi IT terbaik untuk usaha Anda.</p>
                    <a href="#" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Layanan Kebersihan</h5>
                    <p class="card-text">Jadikan rumah dan tempat kerja Anda lebih bersih dan nyaman.</p>
                    <a href="#" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Layanan Transportasi</h5>
                    <p class="card-text">Solusi transportasi cepat dan aman.</p>
                    <a href="#" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
    </div>

@endsection
