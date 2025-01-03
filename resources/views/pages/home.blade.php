@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Banner Section -->
<section id="home" class="banner" style="min-height: 100vh; padding: 50px 0; background: url('{{ asset('assets/img/banner.jpg') }}') no-repeat center center/cover; display: flex; align-items: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-white">
                <h1 class="text-primary" style="font-size: 3rem; font-weight: bold;">SIJASA</h1>
                <h2 style="font-size: 2.5rem; margin-top: 10px;">Butuh Bantuan?</h2>
                <h3 style="font-size: 1.5rem; margin-top: 10px;">Temukan jasa terbaik disini!</h3>
                <form class="mt-4">
                    <input type="text" class="form-control" placeholder="Cari Layanan..." style="border-radius: 30px; padding: 10px 20px;">
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="icon-box">
                        <i class="material-icons">home</i>
                        <p>Rumah</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="icon-box">
                        <i class="material-icons">local_hospital</i>
                        <p>Kesehatan</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="icon-box">
                        <i class="material-icons">school</i>
                        <p>Edukasi</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="icon-box">
                        <i class="material-icons">person</i>
                        <p>Reparasi</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="icon-box">
                        <i class="material-icons">local_shipping</i>
                        <p>Pengiriman</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="icon-box">
                        <i class="material-icons">home</i>
                        <p>Rumah</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="icon-box">
                        <i class="material-icons">local_hospital</i>
                        <p>Kesehatan</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="icon-box">
                        <i class="material-icons">school</i>
                        <p>Edukasi</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="icon-box">
                        <i class="material-icons">person</i>
                        <p>Reparasi</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="icon-box">
                        <i class="material-icons">local_shipping</i>
                        <p>Pengiriman</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

<!-- About Section -->
<section id="about" class="bg-light py-5" style="padding: 50px 0;">
    
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('assets/img/success.jpg') }}" alt="About Us Image" class="img-fluid" style="border-radius: 10px;">
            </div>
            <div class="col-md-6">
                <h2 class="text-primary" style="font-size: 2rem; font-weight: bold;">Tentang Kami</h2>
                <p style="margin-top: 10px; line-height: 1.8;">Si Jasa adalah solusi praktis untuk memenuhi kebutuhan layanan harian Anda. Dengan Si Jasa, Anda dapat dengan mudah menemukan dan memesan berbagai jenis layanan, mulai dari jasa kebersihan hingga perbaikan rumah. Kami menyediakan platform yang aman dan terpercaya untuk menghubungkan pengguna dengan penyedia jasa berkualitas.</p>
                <p style="margin-top: 10px; line-height: 1.8;">Nikmati kemudahan dalam mencari, membandingkan, dan memilih penyedia jasa yang sesuai dengan kebutuhan Anda. Si Jasa, teman setia Anda dalam menyelesaikan pekerjaan sehari-hari.</p>
            </div>
        </div>
</section>


@endsection
