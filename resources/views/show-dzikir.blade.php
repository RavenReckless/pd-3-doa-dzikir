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
                <!-- Author Bio -->
                <div class="d-flex flex-column text-center bg-primary rounded mb-5 py-5 px-4">
                    <img src="{{ asset('assets/img/user.jpg') }}" class="img-fluid rounded-circle mx-auto mb-3"
                        style="width: 100px" />
                    <h3 class="text-secondary mb-3">John Doe</h3>
                    <p class="text-white m-0">
                        Conset elitr erat vero dolor ipsum et diam, eos dolor lorem ipsum,
                        ipsum ipsum sit no ut est. Guber ea ipsum erat kasd amet est elitr
                        ea sit.
                    </p>
                </div>

                <!-- Search Form -->
                <div class="mb-5">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Keyword" />
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary"><i
                                        class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Category List -->
                <div class="mb-5">
                    <h2 class="mb-4">Categories</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="">Web Design</a>
                            <span class="badge badge-primary badge-pill">150</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="">Web Development</a>
                            <span class="badge badge-primary badge-pill">131</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="">Online Marketing</a>
                            <span class="badge badge-primary badge-pill">78</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="">Keyword Research</a>
                            <span class="badge badge-primary badge-pill">56</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="">Email Marketing</a>
                            <span class="badge badge-primary badge-pill">98</span>
                        </li>
                    </ul>
                </div>

                <!-- Single Image -->
                <div class="mb-5">
                    <img src="{{ asset('assets/img/blog-1.jpg') }}" alt="" class="img-fluid rounded" />
                </div>

                <!-- Recent Post -->
                <div class="mb-5">
                    <h2 class="mb-4">Recent Post</h2>
                    <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="{{ asset('assets/img/post-1.jpg') }}"
                            style="width: 80px; height: 80px" />
                        <div class="pl-3">
                            <h5 class="">Diam amet eos at no eos</h5>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="{{ asset('assets/img/post-2.jpg') }}"
                            style="width: 80px; height: 80px" />
                        <div class="pl-3">
                            <h5 class="">Diam amet eos at no eos</h5>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="{{ asset('assets/img/post-3.jpg') }}"
                            style="width: 80px; height: 80px" />
                        <div class="pl-3">
                            <h5 class="">Diam amet eos at no eos</h5>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Image -->
                <div class="mb-5">
                    <img src="{{ asset('assets/img/blog-2.jpg') }}" alt="" class="img-fluid rounded" />
                </div>

                <!-- Tag Cloud -->
                <div class="mb-5">
                    <h2 class="mb-4">Tag Cloud</h2>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-outline-primary m-1">Design</a>
                        <a href="" class="btn btn-outline-primary m-1">Development</a>
                        <a href="" class="btn btn-outline-primary m-1">Marketing</a>
                        <a href="" class="btn btn-outline-primary m-1">SEO</a>
                        <a href="" class="btn btn-outline-primary m-1">Writing</a>
                        <a href="" class="btn btn-outline-primary m-1">Consulting</a>
                    </div>
                </div>

                <!-- Single Image -->
                <div class="mb-5">
                    <img src="{{ asset('assets/img/blog-3.jpg') }}" alt="" class="img-fluid rounded" />
                </div>

                <!-- Plain Text -->
                <div>
                    <h2 class="mb-4">Plain Text</h2>
                    Aliquyam sed lorem stet diam dolor sed ut sit. Ut sanctus erat ea
                    est aliquyam dolor et. Et no consetetur eos labore ea erat voluptua
                    et. Et aliquyam dolore sed erat. Magna sanctus sed eos tempor rebum
                    dolor, tempor takimata clita sit et elitr ut eirmod.
                </div>
            </div>
        </div>
    </div>
    @endif
    
    <!-- Detail End -->

@endsection