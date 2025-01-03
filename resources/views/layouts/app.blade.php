<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Si-Jasa')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}"> --}}
    
    <link rel="stylesheet" href="{{ asset ('assets/js/plugins/bootsnav_files/skins/color.css') }}">

    <link href="{{ asset ('assets/js/plugins/bootsnav_files/css/animate.css') }}" rel="stylesheet">

    <link href="{{asset ('assets/js/plugins/bootsnav_files/css/bootsnav.css') }}" rel="stylesheet">

    <link href="{{ asset ('assets/js/plugins/bootsnav_files/css/overwrite.css') }}" rel="stylesheet">

    <link href="{{ asset ('assets/js/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">

    <link href="{{ asset ('assets/js/plugins/owl-carousel/owl.theme.css') }}" rel="stylesheet">

    <link href="{{ asset ('assets/js/plugins/owl-carousel/owl.transitions.css') }}" rel="stylesheet">

    <link href="{{ asset ('assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/magnific-popup.css') }}" rel="stylesheet">

    {{-- icons --}}

    <link href="{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--// BOOTSTRAP & Main //-->

    <link href="{{ asset ('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/main.css')  }}" rel="stylesheet">

</head>
<body>
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Main Content -->

        @yield('content')

    <!-- Footer -->
    @include('components.footer')

    {{-- <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/bootsnav.js') }}"></script> --}}

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}

        <!-- Include all compiled plugins (below), or include individual files as needed -->
    
        <script src="{{ asset ('assets/js/bootstrap.min.js') }}"></script>
    
        <script src="{{ asset ('assets/js/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    
        <script src="{{ asset ('assets/js/plugins/bootsnav_files/js/bootsnav.js') }}"></script>
    
        <script src="{{ asset ('assets/js/plugins/typed.js-master/typed.js-master/dist/typed.min.js') }}"></script>
    
        {{-- <script src="https://maps.googleapis.com/maps/api/js"></script> --}}
    
        <script src="{{ asset ('assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/jquery.magnific-popup.js') }}"></script>
    
        <script src="{{ asset ('assets/js/main.js') }}"></script>
</body>
</html>
