@extends('layouts.guest')

@section('title')
    PT. Najah Hurrahman - Wisata Umroh & Haji Khusus
@endsection

@section('css')
    <style>
        .tumbnail {
            display: flex;
            width: 100%;
            height: 100%;
        }

        .justify-content-center {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            /* gap: 5px; */
        }

        .tumbnail-img {
            width: 15vw;
            height: 15vw;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 5px;
        }

        .thumbnail-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (max-width: 1024px) {
            .tumbnail-img {
                width: 30vw;
                height: 30vw;
            }

            .thumbnail-img img {
                width: 100%;
                aspect-ratio: 1/1;
                /* height: 100%; */
                /* height: 50vh; */
                /* Sesuaikan tinggi */
                /* object-fit: cover; */
                object-fit: contain;
                border-radius: 10px;
            }
        }

        @media (max-width: 768px) {
            .tumbnail-img {
                width: 40vw;
                height: 40vw;
            }

            .thumbnail-img img {
                width: 100%;
                aspect-ratio: 1/1;
                /* height: 100%; */
                /* height: 50vh; */
                /* Sesuaikan tinggi */
                /* object-fit: cover; */
                object-fit: contain;
                border-radius: 10px;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Container untuk slideshow -->
    {{-- <div class="container p-1 mb-3 rounded-sm" style="background-color: #FFBD59">
        <div id="myCarousel" class="rounded-sm carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="{{ asset('pictures/home/SLIDE01.png') }}" alt="Gambar 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('pictures/home/SLIDE022.png') }}" alt="Gambar 2">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>

            <ol class="carousel-indicators">
                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active">1</li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="1">2</li>
            </ol>
        </div>
    </div> --}}
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
                                <a href="{{ url('/profile') }}" class="btn btn-sm btn-dark">Profil Lengkap</a>
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
                            <h1 class="pt-3 text-dark" style="font-size: clamp(25px, 3vw, 40px);">TRAVEL BERIZIN PERTAMA
                                DOMISILI DI KALIMANTAN TENGAH
                            </h1>
                        </center>
                        <div class="row justify-content-center" style="font-size: 14pt">
                            <div class="mb-2 text-center col-lg-7 col-md-7 col-sm-7 col-12">
                                <p style="text-align: center">PT. NAJAH HURRAHMAN adalah agen haji & umroh resmi yang
                                    terdaftar di Kementerian Agama
                                    Republik Indonesia <b>NOMOR 794 TAHUN 2019</b></p>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="p-1 mb-1 text-center col-lg-4 col-md-4 col-sm-4 col-12 text-bold">
                                <a href="https://simpu.kemenag.go.id/home/detail/650" target="_blank"
                                    class="rounded-sm btn btn-md btn-dark text-bold">CEK LEGALITAS</a>
                            </div>
                            <div class="p-1 mb-1 text-center col-lg-4 col-md-12 col-sm-4 col-12 text-bold">
                                <a href="https://siskopatuh.kemenag.go.id/web/login/" target="_blank"
                                    class="rounded-sm btn btn-md btn-dark text-bold">SISKOPATUH</a>
                            </div>
                            <div class="p-1 mb-1 text-center col-lg-4 col-md-4 col-sm-4 col-12 text-bold">
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
                            <h2>Paket Haji & Umroh</h2>
                        </center>
                        <div class="pt-2 row justify-content-center">
                            @foreach ($landing as $ld)
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <img src="{{ asset('najahhurrahman/najahhurrahman/' . $ld->lampiran) }}"
                                        alt="{{ $ld->title }}"
                                        style="width: 100%; border-radius: 10px; border: 2px double black;">
                                    <div class="pt-2 pb-2 mb-5 row justify-content-around">
                                        <div class="p-2 text-center border col-lg-1 col-md-1 col-sm-1 col-2"
                                            style="border-radius: 50%">
                                            <a href="tel:{{ $ld->nomor }}" target="_blank" class="text-dark"
                                                style="text-decoration: none"><i
                                                    class="fas fa-phone fa-2xl text-dark"></i></a>
                                        </div>
                                        <div class="p-2 text-center border col-lg-1 col-md-1 col-sm-1 col-2"
                                            style="border-radius: 50%">
                                            <a href="http://wa.me/@php
$nomor_asal = $ld->nomor;
                                            // Periksa apakah nomor dimulai dengan '08'
                                            if (substr($nomor_asal, 0, 2) === '08') {
                                                // Jika ya, ganti '08' menjadi '628'
                                                $nomor_asal = '628' . substr($nomor_asal, 2);
                                            }
                                            echo $nomor_asal; @endphp"
                                                target="_blank" class="text-dark"><i
                                                    class="fab fa-whatsapp fa-2xl text-success"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <center>
                            <h2>Galeri Perjalanan Haji & Umroh</h2>
                        </center>
                        <div class="tumbnail justify-content-center">
                            @foreach ($galery as $im)
                                <img src="{{ asset('najahhurrahman/najahhurrahman/' . $im->file) }}" alt="galery"
                                    class="tumbnail-img">
                            @endforeach
                        </div>
                        <br>
                        <div class="m-1 row justify-content-center" style="background: #efefef66; border-radius: 10px;">
                            <img src="{{ asset('img/slogan.png') }}" alt="slogan" style="width: 50vw;">
                            <img src="{{ asset('img/rahman-jas-bg.png') }}" alt="slogan" style="width: 10vw;">
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
