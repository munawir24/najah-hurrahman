<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('img/logo.ico') }}" type="icon">

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WK8H9PW8');
    </script>
    <!-- End Google Tag Manager -->

    {{-- CSS CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Russo+One&display=swap");

        svg {
            font-family: "Russo One", sans-serif;
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
        }

        svg text {
            animation: stroke 5s infinite alternate;
            stroke-width: 1;
            stroke: #543b14;
            /* font-size: clamp(25px, 2vw, 35px); */
            margin: 0px;
            padding: 2px;
        }

        @keyframes stroke {
            0% {
                fill: rgba(5, 179, 69, 0);
                stroke: #543b14;
                stroke-dashoffset: 25%;
                stroke-dasharray: 0 50%;
                stroke-width: 1;
            }

            70% {
                fill: rgba(5, 179, 69, 0);
                stroke: #543b14;
            }

            80% {
                fill: rgba(5, 179, 69, 0);
                stroke: #543b14;
                stroke-width: 1;
            }

            100% {
                fill: #543b14;
                ;
                stroke: rgb(0, 0, 0);
                stroke-dashoffset: -25%;
                stroke-dasharray: 50% 0;
                stroke-width: 1;
            }
        }

        .hero-section {
            background: url('https://via.placeholder.com/1920x1080') no-repeat center center/cover;
            color: white;
            position: relative;
        }

        .hero-section .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-section .content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 150px 20px;
        }

        .btn-orange {
            background-color: #543b14;
            color: #ffffff;
        }

        .btn-orange:hover {
            background-color: #000000;
            color: rgb(255, 255, 255);
        }

        .navbar {
            /* background-color: #FFD500; */
            background-color: #FFD500;
            /* position: fixed; */
            /* Membuat navbar tetap di atas */
            /* top: 0; */
            /* Menempel pada bagian atas halaman */
            /* width: 100%; */
            /* Lebar penuh */
            /* z-index: 1030; */
            /* Z-index tinggi agar tidak tertutup elemen lain */
            /* box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); */
        }

        .navbar .nav-link {
            position: relative;
            color: #543b14;
            /* Warna default teks */
            text-decoration: none;
            /* Menghilangkan garis bawah */
            transition: color 0.3s ease;
            /* Animasi perubahan warna */
        }

        .navbar .nav-link::after {
            content: "";
            /* Membuat elemen pseudo */
            position: absolute;
            bottom: 0;
            left: 50%;
            /* Posisi awal di tengah */
            transform: translateX(-50%);
            width: 0;
            height: 5px;
            /* Tinggi border */
            background-color: #996515;
            /* Warna border */
            border-radius: 10px;
            /* Membuat radius */
            transition: width 0.3s ease;
            /* Animasi lebar */
        }

        .navbar .nav-link:hover {
            color: #000000;
            /* Warna saat hover */
        }

        .navbar .nav-link:hover::after {
            width: 100%;
            /* Lebar penuh saat hover */
        }

        .navbar .nav-link.active::after {
            width: 80%;
            /* Border bawah penuh */
            background-color: #000000;
            /* Warna border */
        }

        .carousel-inner img {
            width: 100%;
            height: 100%;
        }

        .carousel-indicators {
            display: flex;
            justify-content: center;
        }

        .carousel-indicators li {
            background-color: #888;
            border-radius: 50%;
            width: 12px;
            height: 12px;
            margin: 0 6px;
            border: 2px solid rgb(45, 255, 3);
            /* Untuk memberikan garis putih di sekitar setiap lingkaran */
            cursor: pointer;
        }

        .brand-logo {
            width: 300px;
            height: auto;
        }

        @media (max-width: 768px) {
            .brand-logo {
                width: 200px;
                height: auto;
            }
        }

        .img-galery {
            scale: 4/6;
        }
    </style>
    @yield('css')
</head>

<body style="background-color: #FAFAD2;">
    @php
        use Carbon\Carbon;
        use App\Models\Visitor;
        $now = Visitor::whereDate('created_at', Carbon::today())->get();
        $dayCount = count($now);
        $visitorCount = Visitor::count();
    @endphp
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-fixed">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo najah.png') }}" alt="LOGO NH" class="brand-logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="text-center collapse navbar-collapse" id="navbarNav">
                    <ul class="text-center navbar-nav ms-auto">
                        <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a
                                class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                href="{{ url('/') }}">Beranda</a></li>
                        <li class="nav-item {{ request()->is('profile') ? 'active' : '' }}"><a
                                class="nav-link {{ request()->is('profile') ? 'active' : '' }}"
                                href="{{ url('/profile') }}">Profil</a></li>
                        <li class="nav-item {{ request()->is('berita') ? 'active' : '' }}"><a
                                class="nav-link {{ request()->is('berita') ? 'active' : '' }}"
                                href="{{ url('/berita') }}">Berita</a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="#">Program</a></li> --}}
                    </ul>
                    <a target="_blank" href="https://haji.kemenag.go.id/v5/" class="m-2 btn btn-orange">Cek Haji</a>
                    {{-- <a href="{{ url('/admin/login') }}" class="btn btn-orange">Login</a> --}}
                </div>
            </div>
        </nav>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper"
            style="min-height: 486px; background: url('{{ asset('pictures/bg-new.jpg') }}') center repeat-y; background-size: 100%; backdrop-filter: blur(5px);">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                @yield('content-header')
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                @yield('content')
                {{-- <a id="back-to-top" href="#" class="btn btn-danger back-to-top" role="button"
                    aria-label="Scroll to top" style="display: none">
                    <i class="fas fa-chevron-up"></i>
                </a> --}}
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <div class="mt-2 border-0 main-footer" style="background: #ffed93;">
            <div class="container text-dark">
                <div class="pb-3 row justify-content-center">
                    <div class="pt-2 mb-1 col-12 col-md-5 col-sm-5">
                        <h5 class="text-center">Hubungi Kami</h5>
                        <div>Silahkan menghubungi kami pada kontak di bawah ini :</div>
                        <div><i class="fas fa-map-marked-alt"></i> Jl. A. Yani No. 25 Rt. 17, Kel Baru, Pangkalan Bun,
                            Kotawaringin Barat, Kalimantan Tengah</div>
                        <div>Hotline : <a href="http://wa.me/6282242221330" class="text-dark" target="_blank"
                                style="text-decoration: none"><i class="fab fa-whatsapp"></i> 0822 4222 1330</a>
                        </div>
                        <div>Jumlah Pengunjung Hari Ini : <b>{{ $dayCount }}</b></div>
                        <div>Total Pengunjung Website : <b>{{ $visitorCount }}</b></div>
                    </div>
                    <div class="mb-1 col-12 col-md-5 col-sm-5">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4739.575104043583!2d111.64626477823457!3d-2.668541581995166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e08ee1390b41e1b%3A0x4f56cdb651f877c5!2sPt.%20Najah%20Hurrahman!5e0!3m2!1sid!2sid!4v1737863503251!5m2!1sid!2sid"
                            width="100%" height="200" style="border-radius: 5px; border: 2px solid #000000;"
                            allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            class="mt-2"></iframe>
                    </div>
                </div>
                <h5 class="text-center">Temukan kami di:</h5>
                <div class="pt-1 pb-4 row justify-content-center">
                    <div class="text-center col-md-1 col-sm-1 col-2"><a class="nav-link"
                            href="https://www.instagram.com/najah_hurrahman" target="_blank"
                            style="background: linear-gradient(to bottom, #6d00fc, #a004fa, #f925b2, #ff5722, #eeff00, #ff9d00);
                                    -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><i
                                class="fab fa-instagram fa-2xl"></i></a></div>
                    <div class="text-center col-md-1 col-sm-1 col-2"><a class="nav-link text-dark"
                            href="https://www.tiktok.com/@najah.hurrahman" target="_blank">
                            <i class="fa-brands fa-tiktok fa-2xl"></i></a></div>
                    <div class="text-center col-md-1 col-sm-1 col-2"><a class="nav-link text-primary"
                            href="https://web.facebook.com/100011636550477" target="_blank"><i
                                class="fab fa-facebook fa-2xl"></i></a></div>
                    <div class="text-center col-md-1 col-sm-1 col-2"><a class="nav-link text-success"
                            href="https://api.whatsapp.com/send?phone=6282242221330" target="_blank"><i
                                class="fab fa-whatsapp fa-2xl"></i></a></div>
                </div>
            </div>
            <footer class="text-center rounded-sm main-footer bg-warning" hidden>
                <!-- To the right -->
                {{-- <div class="float-right d-none d-sm-inline">
                    Bismillah
                </div> --}}
                <!-- Default to the left -->
                <strong>Copyright © {{ $data = date('Y') }} <a class="text-success"
                        href="https://api.whatsapp.com/send?phone=6282251925522" target="_blank">TIM IT
                        DARA</a></strong>
            </footer>
        </div>
    </div>



    <!-- Bootstrap JS -->
    {{-- <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script> --}}
    {{-- <script src="{{asset('admin/build/js/AdminLTE.js')}}"></script> --}}
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WK8H9PW8" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-52CT4V3GEZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-52CT4V3GEZ');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="{{ asset('fontawesome/js/fontawesome.min.js') }}"></script>
    <script>
        //Get the button
        var mybutton = document.getElementById("back-to-top");

        // When the user scrolls down 40px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
            mybutton.style.display = "none";
        }
    </script>
    @yield('script')
</body>

</html>
