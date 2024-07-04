@extends('layouts.master')
@section('menuShalawat', 'active')
@section('title', 'Shalawat')
@section('content')

 <!-- Header Start -->
 <div class="container-fluid bg-primary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">Shalawat</h3>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="{{url('/')}}">Doa & Dzikir</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Shalawat</p>
        </div>
    </div>
</div>
<!-- Header End -->

    <!-- Gallery Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Bacaan Shalawat</span>
                </p>
                <h1 class="mb-4">Macam-macam Shalawat</h1>
            </div>
            <div class="row portfolio-container">
                @foreach ($shalawats as $shalawat)
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid" src="{{ asset('storage/' . $shalawat->image) }}" alt=""/>
                            <div class="portfolio-info bg-white p-3">
                                <h4 style="margin-bottom: 2rem;">{{ $shalawat->title }}</h4>
                                <a class="link-dzikir" href="{{ route('shalawat.show', ['slug' => $shalawat->id]) }}">
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