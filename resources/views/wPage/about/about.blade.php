@extends('wPage.layouts.main')

@section('content')
<style type="text/css">
    .banner-area {
        background: url('assets/img/images/Celengan Beasiswa Narasi.jpeg.png') no-repeat;
        background-size: cover
    }
</style>
<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-lg-end align-items-center banner-content">
            <div class="col-lg-12">
                <h1 class="text-white">About Us</h1>
            </div>
        </div>
    </div>
</section>
<section class="about_area lite_bg">
    <style type="text/css">
        .about_area .about_bg {
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('assets/img/images/Volunteer Mengajar Di Medan.jpeg.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-size: cover;
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            width: 50%;
            z-index: -1
        }
    </style>
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-5">
                <div class="about_details lite_bg">
                    <h2>Care4All</h2>
                    <p class="mb-0">
                        Platform digital untuk menyumbangkan dana secara online dan kegiatan volunteer.
                        Tujuan dari Care4all adalah untuk memudahkan proses penggalangan dana dan memberikan akses yang
                        lebih luas kepada para donatur dan untuk memudahkan orang-orang yang ingin memberikan waktu dan
                        keterampilan mereka dalam berbagai proyek sukarela.
                    </p>
                    <a href="{{ Route('index') }}" class="primary-btn mt-5">
                        Read more
                    </a>
                </div>
            </div>
        </div>
        <div class="about_bg d-lg-block d-none"></div>
    </div>
</section>
@endsection