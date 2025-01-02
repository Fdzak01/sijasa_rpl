<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Si-Jasa')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}"> --}}
</head>
<body>
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Main Content -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('components.footer')

    {{-- <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/bootsnav.js') }}"></script> --}}
</body>
</html>
