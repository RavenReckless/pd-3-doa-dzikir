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
                <i class="flaticon-043-teddy-bear"></i>
                <span class="text-primary">KidKinder</span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="{{ url('') }}" class="nav-item nav-link @yield('menuHome')">Beranda</a>
                    <a href="{{ url('dzikir') }}" class="nav-item nav-link @yield('menuDzikir')">Dzikir</a>
                    <a href="{{ url('komunitas') }}" class="nav-item nav-link @yield('menuKomunitas')">Komunitas</a>
                    <a href="{{ url('pengingat') }}" class="nav-item nav-link @yield('menuPengingat')">Pengingat</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle @yield('menuSharing') @yield('menuManfaat')" data-toggle="dropdown">Pengalaman</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{ url('sharing') }}" class="dropdown-item @yield('menuSharing')">Sharing Pengalaman Doa & Dzikir</a>
                            <a href="{{ url('manfaat') }}" class="dropdown-item @yield('menuManfaat')">Manfaat</a>
                        </div>
                    </div>
                    <a href="{{ url('contact') }}" class="nav-item nav-link @yield('menuContact')">Kontak</a>
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

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
                    style="font-size: 40px; line-height: 40px">
                    <i class="flaticon-043-teddy-bear"></i>
                    <span class="text-white">KidKinder</span>
                </a>
                <p>
                    Labore dolor amet ipsum ea, erat sit ipsum duo eos. Volup amet ea
                    dolor et magna dolor, elitr rebum duo est sed diam elitr. Stet elitr
                    stet diam duo eos rebum ipsum diam ipsum elitr.
                </p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Get In Touch</h3>
                <div class="d-flex">
                    <h4 class="fa fa-map-marker-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Address</h5>
                        <p>123 Street, New York, USA</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-envelope text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Email</h5>
                        <p>info@example.com</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-phone-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Phone</h5>
                        <p>+012 345 67890</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="{{ url('/') }}"><i
                            class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="{{ url('about') }}"><i
                            class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="{{ url('class') }}"><i class="fa fa-angle-right mr-2"></i>Our
                        Classes</a>
                    <a class="text-white mb-2" href="{{ url('team') }}"><i class="fa fa-angle-right mr-2"></i>Our
                        Teachers</a>
                    <a class="text-white mb-2" href="{{ url('blog') }}"><i class="fa fa-angle-right mr-2"></i>Our
                        Blog</a>
                    <a class="text-white" href="{{ url('contact') }}"><i class="fa fa-angle-right mr-2"></i>Contact
                        Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Newsletter</h3>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0 py-4" placeholder="Your Email" required="required" />
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block border-0 py-3" type="submit">
                            Submit Now
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container border-top border-dark pt-5">
            <p class="m-0 text-center text-white">
                &copy;
                <a class="text-primary font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved.
                Designed by
                <a class="text-primary font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
                <br />
                Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
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
    
    @stack('scripts')
</body>
</html>
