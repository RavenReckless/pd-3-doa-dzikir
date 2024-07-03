@extends('layouts.master')
@section('menuPagiSore', 'active')
@section('title', 'Doa Pagi dan Sore')
@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Doa Pagi dan Sore</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="{{ url('/') }}">Doa & Dzikir</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Doa Pagi dan Sore</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Gallery Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Bacaan Doa dan Dzikir</span>
                </p>
                <h1 class="mb-4">Macam-macam Doa atau Dzikir</h1>
            </div>
            <div class="row portfolio-container">
                @foreach ($dzikirs as $dzikir)
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid w-100" src="{{ asset('storage/' . $dzikir->image) }}" alt="" />
                            <div class="portfolio-info bg-white p-3">
                                <h4>{{ $dzikir->title }}</h4>
                                <p>{{ $dzikir->language->name }}</p>
                                <a class="link-dzikir" href="{{ route('dzikir.show', ['slug' => $dzikir->id]) }}">
                                    Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <!-- Gallery End -->

@endsection
