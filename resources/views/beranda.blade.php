@extends('layouts.guest')

@section('title')
    PT. Najah Hurrahman - Umroh & Haji Plus
@endsection

@section('css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
@endsection

@section('content')
    <!-- Container untuk slideshow -->
    <div class="container p-1 mb-3 rounded-sm" style="background-color: #FFBD59" hidden>
        <div id="myCarousel" class="rounded-sm carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                {{-- Slide PSB --}}
                <div class="carousel-item active">
                    <a href="">
                        <img src="{{ asset('pendaftaran/PSB2025.png') }}" alt="PSB DARA">
                    </a>
                </div>
                <!-- Slide 1 -->
                <div class="carousel-item">
                    <img src="{{ asset('pictures/home/SLIDE01.png') }}" alt="Gambar 1">
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="{{ asset('pictures/home/SLIDE022.png') }}" alt="Gambar 2">
                </div>
                {{-- Slide 3 --}}
                <div class="carousel-item">
                    <img src="{{ asset('pictures/home/SLIDE03.png') }}" alt="Gambar 3">
                </div>
                <!-- Slide 4 -->
                <div class="carousel-item">
                    <img src="{{ asset('pictures/home/SLIDE04.png') }}" alt="Gambar 4">
                </div>
                {{-- Slide 5 --}}
                <div class="carousel-item">
                    <img src="{{ asset('pictures/home/SLIDE055.png') }}" alt="Gambar 5">
                </div>
                <!-- Slide 6 -->
                <div class="carousel-item">
                    <img src="{{ asset('pictures/home/SLIDE06.png') }}" alt="Gambar 6">
                </div>
                <!-- ... Lanjutkan hingga Slide 10 -->
            </div>

            <!-- Tombol "Previous" -->
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
            <!-- Tombol "Next" -->
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>

            <!-- List nomor foto -->
            <ol class="carousel-indicators">
                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active">1</li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="1">2</li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="2">3</li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="3">4</li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="4">5</li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="5">6</li>
                <!-- ... Lanjutkan hingga Slide 10 -->
            </ol>
        </div>
    </div>
    <div class="container mt-2">
        <div class="row">
            <!-- /.col-md-12 -->
            <div class="col-lg-12">
                <div class="card" style="background: rgba(255, 255, 255, 0.768)">
                    <div class="card-body">
                        <center>
                            <marquee class="rounded-sm" direction="down" scrollamount="0">
                                {{-- <h2>SELAMAT DATANG</h2> --}}
                                <svg style="height: 50px">
                                    <text x="50%" y="50%" text-anchor="middle" style="font-size: clamp(25px, 3vw, 35px);">
                                        SELAMAT DATANG
                                    </text>
                                </svg>
                            </marquee>
                            <marquee class="rounded-sm" direction="down" scrollamount="0">
                                {{-- <h2>SELAMAT DATANG</h2> --}}
                                <svg style="height: 50px">
                                    <text x="50%" y="50%" text-anchor="middle" style="font-size: clamp(25px, 3vw, 35px);">
                                        NAJAH HURRAHMAN
                                    </text>
                                </svg>
                            </marquee>
                        </center>
                    </div>
                </div>
                <div class="mt-2 card" style="background: rgba(255, 255, 255, 0.768); font-family: Arial; font-size: 14pt;">
                    <div class="card-body" style="text-align: justify;">
                        <center>
                            <h2>Tentang Najah Hurrahman</h2>
                        </center>
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-sm-6 col-12">
                                <p><b>PT. Najah Hurrahman</b> adalah sebuah perusahaan yang
                                    bergerak di bidang penyelenggaraan ibadah haji dan umrah. Perusahaan ini terdaftar dan
                                    memiliki izin resmi dari Kementerian Agama</p>
                                <p>Kantornya beralamat : <b>Jl. A. Yani No. 25 Rt. 17, Kel Baru, Pangkalan Bun, Kotawaringin
                                        Barat, Kalimantan Tengah</b></p>
                                <p>Hotline service: <a href="http://wa.me/6282242221330" target="_blank" class="text-dark"
                                        style="text-decoration: none"><i class="fab fa-whatsapp text-success"></i>
                                        <b>+6282242221330</b></a></p>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <ol><b>Pelayanan :</b>
                                    <li>Pendampingan Pembuatan Paspor <i class="fas fa-check-circle text-success"></i></li>
                                    <li>Pembuatan Visa <i class="fas fa-check-circle text-success"></i></li>
                                    <li>Pemesanan Tiket Pesawat <i class="fas fa-check-circle text-success"></i></li>
                                    <li>Akomodasi <i class="fas fa-check-circle text-success"></i></li>
                                    <li>Transportasi Lokal <i class="fas fa-check-circle text-success"></i></li>
                                    <li>Pembimbing Haji dan Umrah <i class="fas fa-check-circle text-success"></i></li>
                                    <li>Manajemen Perjalanan <i class="fas fa-check-circle text-success"></i></li>
                                </ol>
                            </div>
                            <div class="text-center col-6">
                                <a href="" class="btn btn-sm btn-dark">Profil Lengkap</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>

    </div>
    <div class="container mt-2">
        <div class="row">
            <!-- /.col-md-12 -->
            <div class="col-lg-12">
                <div class="card" {{-- style="background: rgba(255, 255, 255, 0.768)" --}}
                    style="background: linear-gradient(to bottom, #FFD500 0%, #FFD500 50%, #FFD500 100%);">
                    <div class="card-body">
                        <center>
                            <h1 class="pt-3 text-dark" style="font-size: clamp(25px, 3vw, 40px);">TRAVEL BERIZIN PERTAMA DOMISILI DI KALIMANTAN TENGAH
                            </h1>
                        </center>
                        <div class="row justify-content-center" style="font-size: 14pt">
                            <div class="mb-2 text-center col-lg-7 col-md-7 col-sm-7 col-12">
                                <p>PT. NAJAH HURRAHMAN adalah agen haji & umroh resmi yang terdaftar di Kementerian Agama
                                    Republik Indonesia <b>NOMOR 794 TAHUN 2019</b></p>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="mb-2 text-center col-lg-4 col-md-4 col-sm-4 col-4 text-bold">
                                <a href="https://simpu.kemenag.go.id/home/detail/650" target="_blank"
                                    class="rounded-sm btn btn-md btn-dark text-bold">CEK LEGALITAS</a>
                            </div>
                            <div class="mb-2 text-center col-lg-4 col-md-12 col-sm-4 col-4 text-bold">
                                <a href="https://siskopatuh.kemenag.go.id/web/login/" target="_blank"
                                    class="rounded-sm btn btn-md btn-dark text-bold">SISKOPATUH</a>
                            </div>
                            <div class="mb-2 text-center col-lg-4 col-md-4 col-sm-4 col-4 text-bold">
                                <a href="https://haji.kemenag.go.id/sidb/admin/" target="_blank"
                                    class="rounded-sm btn btn-md btn-dark text-bold">SISKOHAT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>

    </div>
    <div class="container mt-2">
        <div class="row">
            <!-- /.col-md-12 -->
            <div class="col-lg-12">
                <div class="card" style="background: rgba(255, 255, 255, 0.768)">
                    <div class="card-body">
                        <center>
                            <h2>Paket Umroh & Haji</h2>
                        </center>
                        <div class="pt-2 row justify-content-center">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <img src="{{ asset('img/haji25.jpg') }}" alt="PAKET HAJI 2025"
                                    style="width: 100%; border-radius: 10px; border: 2px double black;">
                                <div class="pt-2 pb-2 mb-5 row justify-content-around">
                                    <div class="p-2 text-center border col-lg-1 col-md-1 col-sm-1 col-2" style="border-radius: 50%">
                                        <a href="telp:082242221330" target="_blank" class="text-dark"
                                            style="text-decoration: none"><i
                                                class="fas fa-phone fa-2xl text-dark"></i></a>
                                    </div>
                                    <div class="p-2 text-center border col-lg-1 col-md-1 col-sm-1 col-2" style="border-radius: 50%">
                                        <a href="http://wa.me/6282242221330" target="_blank" class="text-dark"><i
                                                class="fab fa-whatsapp fa-2xl text-success"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <img src="{{ asset('img/umroh25-2.jpg') }}" alt="PAKET HAJI 2025"
                                    style="width: 100%; border-radius: 10px; border: 2px double black;">
                                <div class="pt-2 pb-2 mb-5 row justify-content-around">
                                    <div class="p-2 text-center border col-lg-1 col-md-1 col-sm-1 col-2" style="border-radius: 50%">
                                        <a href="telp:082242221330" target="_blank" class="text-dark"
                                            style="text-decoration: none"><i
                                                class="fas fa-phone fa-2xl text-dark"></i></a>
                                    </div>
                                    <div class="p-2 text-center border col-lg-1 col-md-1 col-sm-1 col-2" style="border-radius: 50%">
                                        <a href="http://wa.me/6282242221330" target="_blank" class="text-dark"><i
                                                class="fab fa-whatsapp fa-2xl text-success"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <center>
                            <h2>Our Galery</h2>
                        </center>
                        <div class="pt-2 row justify-content-center">
                            <img src="{{ asset('img/galeries/1.jpg') }}" alt="1" class="mb-2"
                                style="height: 30vh; width: auto; border-radius: 5px;">
                            <img src="{{ asset('img/galeries/2.jpg') }}" alt="2" class="mb-2"
                                style="height: 30vh; width: auto; border-radius: 5px;">
                            <img src="{{ asset('img/galeries/3.jpg') }}" alt="3" class="mb-2"
                                style="height: 30vh; width: auto; border-radius: 5px;">
                            <img src="{{ asset('img/galeries/4.jpg') }}" alt="4" class="mb-2"
                                style="height: 30vh; width: auto; border-radius: 5px;">
                            <img src="{{ asset('img/galeries/5.jpg') }}" alt="5" class="mb-2"
                                style="height: 30vh; width: auto; border-radius: 5px;">
                            <img src="{{ asset('img/galeries/6.jpg') }}" alt="6" class="mb-2"
                                style="height: 30vh; width: auto; border-radius: 5px;">
                            <img src="{{ asset('img/galeries/7.jpg') }}" alt="7" class="mb-2"
                                style="height: 30vh; width: auto; border-radius: 5px;">
                            <img src="{{ asset('img/galeries/8.jpg') }}" alt="8" class="mb-2"
                                style="height: 30vh; width: auto; border-radius: 5px;">
                            <img src="{{ asset('img/galeries/9.jpg') }}" alt="9" class="mb-2"
                                style="height: 30vh; width: auto; border-radius: 5px;">
                            <img src="{{ asset('img/galeries/10.jpg') }}" alt="10" class="mb-2"
                                style="height: 30vh; width: auto; border-radius: 5px;">
                            <img src="{{ asset('img/galeries/11.jpg') }}" alt="11" class="mb-2"
                                style="height: 30vh; width: auto; border-radius: 5px;">
                            <img src="{{ asset('img/galeries/12.jpg') }}" alt="12" class="mb-2"
                                style="height: 30vh; width: auto; border-radius: 5px;">
                            <img src="{{ asset('img/galeries/13.jpg') }}" alt="13" class="mb-2"
                                style="height: 30vh; width: auto; border-radius: 5px;">
                            <img src="{{ asset('img/galeries/14.jpg') }}" alt="14" class="mb-2"
                                style="height: 30vh; width: auto; border-radius: 5px;">
                            <img src="{{ asset('img/galeries/15.jpg') }}" alt="15" class="mb-2"
                                style="height: 30vh; width: auto; border-radius: 5px;">
                        </div>
                        <div class="pt-2 row justify-content-center">
                            <img src="{{ asset('img/slogan.png') }}" alt="slogan" style="width: 70vw;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('script')
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> --}}

    <script>
        // Mengambil elemen slideshow
        var myCarousel = document.getElementById('myCarousel');
        // Membuat objek Carousel dari elemen
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 5000 // Waktu jeda dalam milidetik (10 detik)
        });
    </script>
@endsection
