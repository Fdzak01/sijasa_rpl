@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Banner Section -->
<section id="home" class="banner" style="min-height: 100vh; padding: 50px 0; background: url('{{ asset('assets/img/banner.jpg') }}') no-repeat center center/cover; display: flex; align-items: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-white">
                <h1 class="text-primary" style="font-size: 15rem; font-weight: bold;">SIJASA</h1>
                <h2 style="font-size: 10 rem;">Butuh Bantuan?</h2>
                <h3 style="font-size: 3rem; margin-top: 2px;">Temukan jasa terbaik disini!</h3>
            </div>
            <form class="mt-4">
                <input type="text" 
                       class="form-control" 
                       placeholder="Cari Layanan..." 
                       style="border-radius: 30px; padding: 15px 30px; font-size: 18px; height: 60px; width: 600px; max-width: 100%; background-color: rgba(255, 255, 255, 0.8); border: 1px solid #ccc;">
            </form>
                     
        </div>
    </div>
</section>

<!-- About Section -->
<section id="tentang" class="py-5" style="display: flex; flex-direction: row; align-items: stretch;">
    <!-- Image Section -->
    <div style="flex: 1;">
        <img src="{{ asset('assets/img/success.jpg') }}" alt="About Us Image" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <!-- Text Section -->
    <div style="flex: 1; background-color: #008080; color: white; display: flex; flex-direction: column; justify-content: center; padding: 2rem;">
        <h2 style="font-size: 5rem; font-weight: bold; margin-bottom: 1rem;">Tentang Kami</h2>
        <p style="line-height: 1.8; margin-bottom: 1rem;">
            Platform yang mempermudah aktivitas sehari-hari dengan mempertemukan pengguna dan penyedia jasa secara aman, efisien, dan terpercaya.
        </p>
        <p style="line-height: 1.8; margin-bottom: 1rem;">
            Platform yang mempermudah aktivitas sehari-hari dengan mempertemukan pengguna dan penyedia jasa secara aman, efisien, dan terpercaya.
        </p>
        <p style="line-height: 1.8; margin-bottom: 1rem;">
            Platform yang mempermudah aktivitas sehari-hari dengan mempertemukan pengguna dan penyedia jasa secara aman, efisien, dan terpercaya.
        </p>
        <p style="line-height: 1.8; margin-bottom: 1rem;">
            Platform yang mempermudah aktivitas sehari-hari dengan mempertemukan pengguna dan penyedia jasa secara aman, efisien, dan terpercaya.
        </p>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-5" style="margin-top: 10px; margin-bottom: 20px">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 30px; font-weight: bold;">Layanan-Layanan</h2>
        <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: space-evenly;">
            <!-- Service Item 1 -->
            <div style="flex: 0 0 calc(48%); background-color: #80CFCF; border-radius: 15px; overflow: hidden; display: flex;">
                <div style="flex: 1; position: relative;">
                    <img src="{{ asset('assets/img/success.jpg') }}" alt="Cleaning Service Image" style="width: 100%; height: 100%; object-fit: cover;">
                    <div style="position: absolute; bottom: 10px; left: 10px; color: white; font-weight: bold;">Athena Cleaning</div>
                </div>
                <div style="flex: 1; padding: 20px; display: flex; flex-direction: column; justify-content: center; text-align: left;">
                    <h3 style="color: white;">Cleaning Service Home:</h3>
                    <p style="color: white;">Mendapatkan service cleaning rumah terbaik, yang pasti bersih dan nyaman.</p>
                </div>
            </div>

            <!-- Service Item 2 -->
            <div style="flex: 0 0 calc(48%); background-color: #80CFCF; border-radius: 15px; overflow: hidden; display: flex;">
                <div style="flex: 1; position: relative;">
                    <img src="{{ asset('assets/img/success.jpg') }}" alt="Health Service Image" style="width: 100%; height: 100%; object-fit: cover;">
                    <div style="position: absolute; bottom: 10px; left: 10px; color: white; font-weight: bold;">Athena Kesehatan</div>
                </div>
                <div style="flex: 1; padding: 20px; display: flex; flex-direction: column; justify-content: center; text-align: left;">
                    <h3 style="color: white;">Kesehatan Jasmani:</h3>
                    <p style="color: white;">Mendapatkan perawat kesehatan yang baik dan profesional di bidang kesehatan.</p>
                </div>
            </div>

            <!-- Service Item 3 -->
            <div style="flex: 0 0 calc(48%); background-color: #80CFCF; border-radius: 15px; overflow: hidden; display: flex;">
                <div style="flex: 1; position: relative;">
                    <img src="{{ asset('assets/img/success.jpg') }}" alt="Education Service Image" style="width: 100%; height: 100%; object-fit: cover;">
                    <div style="position: absolute; bottom: 10px; left: 10px; color: white; font-weight: bold;">Athena Pendidikan</div>
                </div>
                <div style="flex: 1; padding: 20px; display: flex; flex-direction: column; justify-content: center; text-align: left;">
                    <h3 style="color: white;">Jasa Pendidikan:</h3>
                    <p style="color: white;">Menyediakan tutor berpengalaman untuk membantu proses belajar Anda.</p>
                </div>
            </div>

            <!-- Service Item 4 -->
            <div style="flex: 0 0 calc(48%); background-color: #80CFCF; border-radius: 15px; overflow: hidden; display: flex;">
                <div style="flex: 1; position: relative;">
                    <img src="{{ asset('assets/img/success.jpg') }}" alt="Transport Service Image" style="width: 100%; height: 100%; object-fit: cover;">
                    <div style="position: absolute; bottom: 10px; left: 10px; color: white; font-weight: bold;">Athena Transport</div>
                </div>
                <div style="flex: 1; padding: 20px; display: flex; flex-direction: column; justify-content: center; text-align: left;">
                    <h3 style="color: white;">Jasa Transportasi:</h3>
                    <p style="color: white;">Menyediakan transportasi yang aman dan nyaman untuk kebutuhan Anda.</p>
                </div>
            </div>

            <!-- Service Item 5 -->
            <div style="flex: 0 0 calc(48%); background-color: #80CFCF; border-radius: 15px; overflow: hidden; display: flex;">
                <div style="flex: 1; position: relative;">
                    <img src="{{ asset('assets/img/success.jpg') }}" alt="Tech Service Image" style="width: 100%; height: 100%; object-fit: cover;">
                    <div style="position: absolute; bottom: 10px; left: 10px; color: white; font-weight: bold;">Athena Teknologi</div>
                </div>
                <div style="flex: 1; padding: 20px; display: flex; flex-direction: column; justify-content: center; text-align: left;">
                    <h3 style="color: white;">Jasa Teknologi:</h3>
                    <p style="color: white;">Menyediakan solusi teknologi terbaik untuk kebutuhan bisnis Anda.</p>
                </div>
            </div>

            <!-- Service Item 6 -->
            <div style="flex: 0 0 calc(48%); background-color: #80CFCF; border-radius: 15px; overflow: hidden; display: flex;">
                <div style="flex: 1; position: relative;">
                    <img src="{{ asset('assets/img/success.jpg') }}" alt="Culinary Service Image" style="width: 100%; height: 100%; object-fit: cover;">
                    <div style="position: absolute; bottom: 10px; left: 10px; color: white; font-weight: bold;">Athena Kuliner</div>
                </div>
                <div style="flex: 1; padding: 20px; display: flex; flex-direction: column; justify-content: center; text-align: left;">
                    <h3 style="color: white;">Jasa Kuliner:</h3>
                    <p style="color: white;">Menyediakan berbagai layanan kuliner untuk acara spesial Anda.</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
