@extends('layouts.master')
@section('menuManfaat', 'active')
@section('title', 'Manfaat')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Manfaat Dzikir</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="{{url('/')}}">Doa & Dzikir</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Manfaat</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Detail Start -->
    @foreach ($manfaats as $manfaat)
    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-lg-8">
                <div class="d-flex flex-column text-left mb-3">
                    <p class="section-title pr-5">
                        <span class="pr-2">Manfaat</span>
                    </p>
                    <h1 class="mb-3"> {{ $manfaat->title }} </h1>
                </div>
                <div class="mb-5">
                    <img class="img-fluid rounded w-100 mb-4" src="{{ asset('storage/' . $manfaat->image) }}" alt="Image" />
                    <p>
                        {{ $manfaat->description }}
                    </p>
                </div>


                <!-- Comment List -->

                <!-- Comment Form -->
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Category List -->
                <div class="mb-5">
                    <h2 class="mb-4">Pilihan Doa atau Dzikir</h2>
                    @foreach ($dzikirs as $dzikir)
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="{{ route('dzikir.show', ['slug' => $dzikir->id]) }}">{{ $dzikir->title }}</a>
                            <span class="badge badge-primary badge-pill">{{ $dzikir->language->name }}</span>
                    </ul>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    @endforeach
    
    <!-- Detail End -->

@endsection
