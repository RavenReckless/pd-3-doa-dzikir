@extends('layouts.master')
@section('title', 'Dzikir')
@section('menuDzikir', 'active')
@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Materi Dzikir</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Doa & Dzikir</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Materi</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Detail Start -->
    @if($dzikir)
    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-lg-8">
                <div class="d-flex flex-column text-left mb-3">
                    <p class="section-title pr-5">
                        <span class="pr-2">Materi</span>
                    </p>
                    <h1 class="mb-3"> {{ $dzikir->title }} </h1>
                </div>
                <div class="mb-5">
                    <img class="img-fluid rounded w-100 mb-4" src="{{ asset('storage/' . $dzikir->image) }}" alt="Image" />
                    <p>
                        {{ $dzikir->content }}
                    </p>
                </div>

                <!-- Related Post -->
                <div class="mb-5 mx-n3">
                    <h2 class="mb-4 ml-3">Related Post</h2>
                    <div class="owl-carousel post-carousel position-relative">
                        <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3">
                            <img class="img-fluid" src="{{ asset('assets/img/post-1.jpg') }}"
                                style="width: 80px; height: 80px" />
                            <div class="pl-3">
                                <h5 class="">Diam amet eos at no eos</h5>
                                <div class="d-flex">
                                    <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                    <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web
                                        Design</small>
                                    <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3">
                            <img class="img-fluid" src="{{ asset('assets/img/post-2.jpg') }}"
                                style="width: 80px; height: 80px" />
                            <div class="pl-3">
                                <h5 class="">Diam amet eos at no eos</h5>
                                <div class="d-flex">
                                    <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                    <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web
                                        Design</small>
                                    <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3">
                            <img class="img-fluid" src="{{ asset('assets/img/post-3.jpg') }}"
                                style="width: 80px; height: 80px" />
                            <div class="pl-3">
                                <h5 class="">Diam amet eos at no eos</h5>
                                <div class="d-flex">
                                    <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                    <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web
                                        Design</small>
                                    <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Comment List -->

                <!-- Comment Form -->
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Category List -->
                <div class="mb-5">
                    <h2 class="mb-4">Pilihan Dzikir</h2>
                    @foreach ($materiDzikir as $dzikir)
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="{{ route('dzikir.show', ['slug' => $dzikir->id]) }}">{{ $dzikir->title }}</a>
                            <span class="badge badge-primary badge-pill">{{ $dzikir->language->name }}</span>
                    </ul>
                    @endforeach
                </div>

                <!-- Dzikir Records -->
                <div class="mb-5">
                    <h2 class="mb-4">Rekaman {{ $dzikir->title }}</h2>
                    @if($dzikirRecords->isNotEmpty())
                        @foreach($dzikirRecords as $record)
                            <div class="mb-3">
                                <h5>{{ $record->nama }}</h5>
                                <audio controls>
                                    <source src="{{ asset('storage/' . $record->file_path) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        @endforeach
                    @else
                        <p>Tidak ada rekaman tersedia.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif
    
    <!-- Detail End -->

@endsection