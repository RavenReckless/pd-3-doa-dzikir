@extends('layouts.master')
@section('menuHome', 'active')
@section('title', 'Beranda')
@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-5 mt-lg-0">Doa dan Dzikir</h4>
                <h1 class="display-3 font-weight-bold text-white">
                    Website Doa & Dzikir Harian
                </h1>
                <p class="text-white mb-4">
                    Sarana untuk mencari doa dan dzikir yang sesuai dengan kebutuhan Anda. Platform ini dirancang untuk
                    membantu Anda menemukan doa dan dzikir yang tepat untuk berbagai situasi dan kebutuhan, baik itu untuk
                    ketenangan hati, perlindungan, kesehatan, atau kelancaran rezeki.
                </p>
                <a href="{{ url('/dzikir') }}" class="btn btn-secondary mt-1 py-3 px-5">Cari Doa Harian</a>
            </div>
            <div class="col-lg-6 text-center text-lg-right header-img">
                <img class="img-fluid mt-5" src="{{ asset('assets/img/dzikir.webp') }}" alt="" />
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Facilities Start -->
    <div class="container-fluid pt-5">
        <div class="container pb-3">
            <div class="row" style="display: flex; align-items: center; justify-content: center;">
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-light shadow-sm border-top rounded mb-4 hover-effect"
                        style="padding: 30px; text-align: center;">
                        <i class="flaticon-009-praying h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Rekaman Dzikir</h4>
                            <p class="m-0">
                                Dengarkan rekaman dzikir harian untuk membantu Anda beribadah
                                dengan lebih khusyuk.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-light shadow-sm border-top rounded mb-4 hover-effect"
                        style="padding: 30px; text-align: center;">
                        <i class="flaticon-010-tasbih h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Rekomendasi Dzikir</h4>
                            <p class="m-0">
                                Temukan rekomendasi dzikir sesuai dengan kebutuhan dan kondisi
                                Anda sehari-hari.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-light shadow-sm border-top rounded mb-4 hover-effect"
                        style="padding: 30px; text-align: center;">
                        <i class="flaticon-011-lecture h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Materi Dzikir</h4>
                            <p class="m-0">
                                Pelajari materi dzikir dari berbagai sumber terpercaya untuk
                                memperdalam pengetahuan Anda.
                            </p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-light shadow-sm border-top rounded mb-4 hover-effect"
                        style="padding: 30px; text-align: center;">
                        <i class="flaticon-013-sharing h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Sharing Pengalaman</h4>
                            <p class="m-0">
                                Bagikan pengalaman Anda dalam mempraktikkan doa dan dzikir dalam
                                kehidupan sehari-hari.
                            </p>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-light shadow-sm border-top rounded mb-4 hover-effect"
                        style="padding: 30px; text-align: center;">
                        <i class="flaticon-013-sharing h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Komunitas Doa dan Dzikir</h4>
                            <p class="m-0">
                                Bergabunglah dengan komunitas kami untuk mendapatkan
                                informasi dan relasi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facilities End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('assets/img/nega-YdyhHbWZ1V0-unsplash.jpg') }}"
                        alt="" />
                </div>
                <div class="col-lg-7">
                    <p class="section-title pr-5">
                        <span class="pr-2">Pelajari Tentang Kami</span>
                    </p>
                    <h1 class="mb-4">Platform untuk Mendukung Kegiatan Doa dan Dzikir Anda</h1>
                    <p>
                        Website kami merupakan website yang menyediakan berbagai macam doa dan dzikir yang dapat Anda.
                        Mulai dari doa harian, dzikir pagi dan petang, dan doa-doa lainnya yang dapat Anda pelajari.
                        Website kami memiliki berbagai fitur untuk membantu Anda dalam berdzikir dan berdoa.
                    </p>
                    <div class="row pt-2 pb-4">
                        <div class="col-6 col-md-4">
                            <img class="img-fluid rounded" src="{{ asset('assets/img/masjid-pogung-dalangan-TmEAmLgVzMc-unsplash.jpg') }}" alt="" />
                        </div>
                        <div class="col-6 col-md-8">
                            <ul class="list-inline m-0">
                                <li class="py-2 border-top border-bottom">
                                    <i class="fa fa-check text-primary mr-3"></i>
                                    Materi doa dan dzikir harian
                                </li>
                                <li class="py-2 border-bottom">
                                    <i class="fa fa-check text-primary mr-3"></i>
                                    Rekaman doa dan dzikir
                                </li>
                                <li class="py-2 border-bottom">
                                    <i class="fa fa-check text-primary mr-3"></i>
                                    Fitur sharing pengalaman doa dan dzikir
                                </li>
                                <li class="py-2 border-bottom">
                                    <i class="fa fa-check text-primary mr-3"></i>
                                    Rekomendasi doa dan dzikir harian
                                </li>
                            </ul>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    {{-- Dzikir Start --}}
    <div class="container-fluid pt-5 pb-3" style="padding-bottom: 4rem;">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Materi Doa dan Dzikir</span>
                </p>
                <h1 class="mb-4">Macam-macam Doa dan Dzikir</h1>
            </div>
            <div class="row portfolio-container">
                @foreach ($dzikirs->take(3) as $dzikir)
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item">
                        <div class="position-relative overflow-hidden mb-2">
                            <a href="{{ route('dzikir.show', ['slug' => $dzikir->id]) }}">
                                <img class="img-fluid w-100" src="{{ asset('storage/' . $dzikir->image) }}"
                                    alt="" />
                            </a>
                            {{-- Judul --}}
                            <div class="portfolio-info bg-white p-3">
                                <h4>{{ $dzikir->title }}</h4>
                                <p>{{ $dzikir->language->name }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="dzikir-link" style="display: flex; align-items:center; justify-content:center">
                <a href="{{url('/dzikir')}}" class="btn btn-primary mt-2 py-2 px-4">Jelajahi Doa dan Dzikir</a>
            </div>
        </div>
    </div>
    {{-- Dzikir End --}}

    <!-- Sharing Start -->
    {{-- <div class="container-fluid py-5">
        <div class="container p-0">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Sharing Pengalaman</span>
                </p>
                <h1 class="mb-4">Bagaimana Pengalaman Doa dan Dzikir Mereka ?</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                @foreach ($sharings as $sharing)
                    <div class="testimonial-item px-3">
                        <div class="bg-light shadow-sm rounded mb-4 p-4">
                            <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                            {{ $sharing->content }}
                        </div>
                        <div class="d-flex align-items-center">
                            @if ($sharing->user->profile_photo_path)
                                <img class="rounded-circle" src="{{ asset($sharing->user->profile_photo_path) }}"
                                    style="width: 70px; height: 70px" alt="Image" />
                            @endif
                            <div class="pl-3">
                                <h5>{{ $sharing->user->name }}</h5>
                                <i>{{ $sharing->title }}</i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    <!-- Sharing End -->


@endsection
