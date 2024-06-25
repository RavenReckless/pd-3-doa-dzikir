@extends('layouts.master')
@section('menuSharing', 'active')
@section('title', 'Sharing')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Sharing Pengalaman</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Doa & Dzikir</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Sharing</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Sharing Start -->
    <div class="container-fluid py-5">
        <div class="container p-0">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Sharing Pengalaman Doa atau Dzikir</span>
                </p>
                <h1 class="mb-4">Bagaimana Pengalaman Mereka ?</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                @foreach ($sharings as $sharing)
                    <div class="testimonial-item px-3">
                        <div class="bg-light shadow-sm rounded mb-4 p-4">
                            <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                            {{ $sharing->content }}
                        </div>
                        <div class="d-flex align-items-center">
                            @if (auth()->user()->profile_photo_path)
                                <img class="rounded-circle" src="{{ asset(auth()->user()->profile_photo_path) }}"
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
    </div>
    <!-- Sharing End -->

    <div class="create-sharing" style="display: flex; justify-content: center; align-items: center;">
        <a href="{{ url('sharing/create') }}" class="btn btn-primary px-4 mx-auto mb-4">Share Pengalamanmu</a>
    </div>

@endsection
