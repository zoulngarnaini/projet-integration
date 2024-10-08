<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>PestKit - Pest Control Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('asset/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset('asset/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('asset/css/style.css')}}" rel="stylesheet">
    </head>

    <body>


        <!-- Topbar Start -->
        <div class="container-fluid topbar-top bg-primary">
            <div class="container">
                <div class="d-flex justify-content-between topbar py-2">
                    <div class="d-flex align-items-center flex-shrink-0 topbar-info">
                        <a href="#" class="me-4 text-secondary"><i class="fas fa-map-marker-alt me-2 text-dark"></i>123 Street, CA, CAMEROUN</a>
                        <a href="#" class="me-4 text-secondary"><i class="fas fa-phone-alt me-2 text-dark"></i>+01234567890</a>
                        <a href="#" class="text-secondary"><i class="fas fa-envelope me-2 text-dark"></i>Example@gmail.com</a>
                    </div>
                    <div class="text-end pe-4 me-4 border-end border-dark search-btn">
                        <div class="search-form">

                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center topbar-icon">
                        <a href="#" class="me-4"><i class="fab fa-facebook-f text-dark"></i></a>
                        <a href="#" class="me-4"><i class="fab fa-twitter text-dark"></i></a>
                        <a href="#" class="me-4"><i class="fab fa-instagram text-dark"></i></a>
                        <a href="#" class=""><i class="fab fa-linkedin-in text-dark"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar Start -->
        <div class="container-fluid bg-dark">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-lg-0">
                    <a href="{{ route('welcome') }}" class="navbar-brand">
                        <h1 class="text-primary mb-0 display-5">GESTION <span class="text-white">TROUPEAU </span><img src="{{asset('images/logo.jpg')}}" width="45" height="45" class="rounded-circle" alt=""> </h1>
                    </a>
                    <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-dark"></span>
                    </button>
                    <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="{{ route('welcome') }}" class="nav-item nav-link ">Accueil</a>
                            <a href="{{ route('equipe') }}" class="nav-item nav-link">Equipe</a>
                            <a href="{{ route('login') }}" class="nav-item nav-link">Connecter</a>
                            <a href="{{ route('register') }}" class="nav-item nav-link">Creer un compte</a>
                            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Carousel Start -->
        <div class="container-fluid carousel px-0 mb-5 pb-5">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="{{asset('asset/img/carousel-2.jpg')}}" class="img-fluid w-100" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h4 class="text-white mb-4 animated slideInDown"></h4>
                                <h1 class="text-white display-1 mb-4 animated slideInDown">Gestion Troupeau</h1>
                                <a href="" class="me-2"><button type="button" class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Read More</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('asset/img/carousel-1.jpg')}}" class="img-fluid w-100" alt="Second slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h4 class="text-white mb-4 animated slideInDown">No 1 Pest Control Services</h4>
                                <h1 class="text-white display-1 mb-4 animated slideInDown">Enjoy Your Home Totally Pest Free</h1>
                                <a href="" class="me-2"><button type="button" class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Read More</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev btn btn-primary border border-2 border-start-0 border-primary" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next btn btn-primary border border-2 border-end-0 border-primary" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->




        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                        <a href="#" class="text-primary mb-0 display-6">GESTION<span class="text-white">TROUPEAU</span><i class="fa fa-spider text-primary ms-2"></i></a>
                    </div>
                    <div class="col-md-4 copyright-btn text-center text-md-start mb-3 mb-md-0 flex-shrink-0">
                        <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-md-4 my-auto text-center text-md-end text-white">
                        IUT DE <a class="border-bottom" href="https://htmlcodex.com">NGAOUNDERE</a><br>UNIVERSITE DE <a class="border-bottom" href="https://themewagon.com">NGAOUNDERE</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="{{ asset('asset/https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js')}}"></script>
        <script src="{{ asset('asset/https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
        <script src="{{ asset('asset/https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('asset/lib/wow/wow.min.js')}}"></script>
        <script src="{{ asset('asset/lib/easing/easing.min.js')}}"></script>
        <script src="{{ asset('asset/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{ asset('asset/lib/owlcarousel/owl.carousel.min.j')}}s"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('asset/js/main.js')}}"></script>
    </body>

</html>
