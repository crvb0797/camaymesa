<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- FAVICON --}}
    <link rel="shortcut icon" href="{{ asset('./img/favicon_cama.png') }}" type="image/x-icon">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">


    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    {{-- JQUERY --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    {{-- OWL --}}
    <link rel="stylesheet" href="{{ asset('owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/owl.theme.default.min.css') }}">

    {{-- TOASTR.JS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    {{-- CDN leafletjs --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />



    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-poppins antialiased">

    {{-- SOCIAL --}}
    <div class="social_bar fixed right-0 top-20 flex flex-col items-end z-50">
        <a class="icon-facebook rounded-tl-2xl icon_social" target="_blank" href="https://www.facebook.com/"><i
                class="fab fa-facebook"></i></a>

        <a class="icon-correo icon_social" target="_blank" href="mailto:camaymesa@gmail.com"><i
                class="fas fa-envelope"></i></a>


        <a class="icon-twitter rounded-bl-2xl icon_social text-2xl" target="_blank"
            href="https://www.waze.com/es/live-map/directions/guatemala/guatemala/ciudad-de-guatemala/4a-avenida-840?navigate=yes&utm_campaign=waze_website&utm_source=waze_website&utm_medium=lm_share_location&to=place.Ei00QSBBdmVuaWRhIDg0MCwgQ2RhZC4gZGUgR3VhdGVtYWxhLCBHdWF0ZW1hbGEiMRIvChQKEglj2rYf1KOJhRGoKM7kgzTqlRDIBioUChIJJ2f4odajiYUR_0ox_1a5wYc"><i
                class="fab fa-waze"></i></a>
    </div>
    {{-- /SOCIAL --}}


    <div class="min-h-screen bg-white">
        @livewire('navigation-menu')

        <!-- Page Content -->
        <main class="overflow-hidden">
            {{ $slot }}

            <a href="https://m.me/CarlosVillatoro" class="float" target="_blank">
                <img src="https://www.peengler.com/wp-content/uploads/messenger.png" alt="Messenger" />
            </a>

            {{-- FOOTER --}}
            <footer class="bg-secondary text-white p-12">
                <div class="flex items-center justify-center md:hidden mb-4">
                    <a class="text-white font-bold text-2xl" href="{{ route('home') }}">
                        LOGO
                    </a>
                </div>
                <div class=" flex justify-between items-center text-center md:text-left">
                    <p>2021 camaymesa.online todos los derechos reservados, desarrollada por <a
                            href="https://villatoro.dev" target="_blank" class="text-villatoro">Carlos Villatoro</a></p>

                    <a class="bg-primary text-white p-3 text-sm rounded-lg md:flex items-center hover:bg-opacity-60 hidden"
                        href="{{ route('admin.home') }}"><i class="fas fa-user-tie mr-2"></i>
                        Administrador</a>
                </div>
            </footer>
            {{-- FOOTER --}}
        </main>
    </div>

    @stack('modals')

    @livewireScripts

    {{-- SWIPER --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('./js/swiper.js') }}"></script>

    {{-- OWL SCRIPTS --}}
    <script src="{{ asset('owlcarousel/owl.carousel.min.js') }}"></script>

    {{-- TOASTR.JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if (Session::has('info'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true,
            "positionClass": "toast-top-right",
            }
            toastr.success("{{ session('info') }}");
        
        @endif
    </script>

    {{-- Script Leafleatjs --}}
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

    <script src="{{ asset('js/map.js') }}"></script>
</body>

</html>
