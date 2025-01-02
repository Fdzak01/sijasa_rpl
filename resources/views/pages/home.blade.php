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


    <section class="categories container my-5">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="p-3 border rounded">
                    <img src="house-icon.png" alt="House" class="mb-2" style="width: 50px;">
                    <p>Rumah</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="p-3 border rounded">
                    <img src="health-icon.png" alt="Health" class="mb-2" style="width: 50px;">
                    <p>Kesehatan</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="p-3 border rounded">
                    <img src="education-icon.png" alt="Education" class="mb-2" style="width: 50px;">
                    <p>Edukasi</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="p-3 border rounded">
                    <img src="repair-icon.png" alt="Repair" class="mb-2" style="width: 50px;">
                    <p>Repair</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="p-3 border rounded">
                    <img src="delivery-icon.png" alt="Delivery" class="mb-2" style="width: 50px;">
                    <p>Pengiriman</p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="story">
        <div class="container-fluid">
            <div class="row">

                <!-- Img -->

                <div class="col-md-6 story-bg">

                </div>

                <!-- Story Caption -->

                <div class="col-md-6">

                    <div class="story-content">

                        <h2>Tentang Kami</h2>
                        <div class="story-text">
                            <p>Platform yang mempermudah aktivitas sehari-hari dengan mempertemukan pengguna dan penyedia jasa secara aman, efisien, dan terpercaya.Platform yang mempermudah aktivitas sehari-hari dengan mempertemukan pengguna dan penyedia jasa secara aman, efisien, dan terpercaya.</p>

                            <p>Si Jasa adalah solusi praktis untuk memenuhi kebutuhan layanan harian Anda. 
                                Dengan Si Jasa, Anda dapat dengan mudah menemukan dan memesan berbagai jenis layanan, mulai dari jasa kebersihan hingga perbaikan rumah. Kami menyediakan platform yang aman dan terpercaya untuk menghubungkan pengguna dengan penyedia jasa berkualitas. Nikmati kemudahan dalam mencari, membandingkan, dan memilih penyedia jasa yang sesuai dengan kebutuhan Anda.
                                 Si Jasa, teman setia Anda dalam menyelesaikan pekerjaan sehari-hari.</p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
