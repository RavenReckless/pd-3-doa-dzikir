@extends('layouts.master')
@section('menuKomunitas', 'active')
@section('title', 'Komunitas')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Komunitas Kami</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="{{ url('/') }}">Doa & Dzikir</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Komunitas</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Community List Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Komunitas</span>
                </p>
                <h1 class="mb-4">Komunitas yang Tersedia</h1>
            </div>
            <div class="row" style="padding-top: 4rem;">
                @foreach($communities as $community)
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <div class="card-body text-center">
                            <h4 class="card-title">{{ $community->name }}</h4>
                            <p class="card-text">{{ $community->description }}</p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Dibuat</strong>
                                </div>
                                <div class="col-6 py-1">{{ $community->created_at->format('d M Y') }}</div>
                            </div>
                            <div class="row">
                                <div class="col-12 py-2" style="display: flex; align-items: center; justify-content: center; margin-top: 1rem;">
                                    <a href="{{ route('communities.show', $community->id) }}" class="btn btn-primary px-4 mx-auto mb-4">Gabung Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Community List End -->

@endsection
