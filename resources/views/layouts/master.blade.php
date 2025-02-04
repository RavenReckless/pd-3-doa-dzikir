<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Doa & Dzikir | @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    {{-- Bootstrap Alert --}}
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

    <!-- Flaticon Font -->
    <link href="{{ asset('assets/lib/flaticon/font/flaticon.css') }}" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!-- SweetAlert2 -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="{{ url('') }}" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
                <i class="fa fa-book"></i>
                <span class="text-primary">DoaDzikir</span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="{{ url('') }}" class="nav-item nav-link @yield('menuHome')">Beranda</a>
                    <a href="{{ url('dzikir') }}" class="nav-item nav-link @yield('menuDzikir')">Doa & Dzikir</a>
                    <a href="{{ route('communities.index') }}" class="nav-item nav-link @yield('menuKomunitas')">Komunitas</a>
                    <a href="{{ url('shalawat') }}" class="nav-item nav-link @yield('menuShalawat')">Shalawat</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle @yield('menuPagiSore') @yield('menuQiyamul')"
                            data-toggle="dropdown">Rekomendasi</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{ url('doa-pagi-sore') }}" class="dropdown-item @yield('menuPagiSore')">Doa Pagi dan Sore</a>
                            <a href="{{ route('dzikir.show', ['slug' => 22]) }}" class="dropdown-item @yield('menuQiyamul')">Doa Qiyamul Lail</a>
                        </div>
                    </div>
                </div>
                @auth
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{ url('/profile') }}" class="dropdown-item">
                                <i class="fas fa-user-edit"></i> Ubah Profil
                            </a>
                            <a href="{{ url('/monitoring') }}" class="dropdown-item">
                                <i class="fas fa-desktop"></i> Monitoring
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ url('/auth') }}" class="btn btn-primary px-4">Login</a>
                @endauth

            </div>
        </nav>
    </div>
    <!-- Navbar End -->
    @include('alerts')

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5" style="display: flex; align-items: center; justify-content: center;">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
                    style="font-size: 40px; line-height: 40px">
                    <i class="fa fa-book"></i>
                    <span class="text-white">DoaDzikir</span>
                </a>
                <p>
                    Sarana untuk mencari doa dan dzikir yang sesuai dengan kebutuhan Anda. Platform ini dirancang untuk
                    membantu Anda menemukan doa dan dzikir yang tepat untuk berbagai situasi dan kebutuhan, baik itu
                    untuk
                    ketenangan hati, perlindungan, kesehatan, atau kelancaran rezeki.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Get In Touch</h3>
                <div class="d-flex">
                    <h4 class="fa fa-map-marker-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Address</h5>
                        <p>Jl. Ambarawa No.5, Sumbersari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-envelope text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Email</h5>
                        <p>rektor@um.ac.id; info@um.ac.id ; humas@um.ac.id</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-phone-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Phone</h5>
                        <p>+62 341 551312</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Hubungi kami</h3>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control border-0 py-4" placeholder="Nama"
                            required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0 py-4" placeholder="Email"
                            required="required" />
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block border-0 py-3" type="submit">
                            Kirim
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container border-top border-dark pt-5">
            <p class="m-0 text-center text-white">
                &copy;
                <a class="text-primary font-weight-bold" href="#">PD 3 Doa & Dzikir</a>. 
            </p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('assets/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('assets/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Bootstrap Alert --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>

</html>
