
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
        <link href="{{asset('asset/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('asset/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
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
                <h1 class="text-primary mb-0 display-5">GESTION <span class="text-white">TROUPEAU</span><i class="fa fa-spider text-primary ms-2"></i></h1>
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


        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4 animated slideInDown">PROJET D'INTEGRATION</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                        <li class="breadcrumb-item text-white" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Contact Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                    <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Nous</h5>
                    <h1 class="display-5 w-50 mx-auto">Contactez</h1>
                </div>
                <div class="row g-5 mb-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="h-100">
                            <img src="{{asset('asset/img/carol-2.jpg')}}" class="border-0 rounded w-100 h-100" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" />
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
						<p class="mb-4">Laisse votre message.</p>
                        <div class="rounded contact-form">
                            <div class="mb-4">
                                <input type="text" class="form-control p-3" placeholder="Your Name">
                            </div>
                            <div class="mb-4">
                                <input type="email" class="form-control p-3" placeholder="Your Email">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control p-3" placeholder="Subject">
                            </div>
                            <div class="mb-4">
                                <textarea class="w-100 form-control p-3" rows="6" cols="10" placeholder="Message"></textarea>
                            </div>
                            <button class="btn btn-primary border-0 py-3 px-4 rounded-pill" type="button">Envoyer Votre Message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                        <a href="#" class="text-primary mb-0 display-6">GESTION<span class="text-white">TROUPEAU</span><img src="{{asset('images/logo.jpg')}}" width="45" height="45" class="rounded-circle" alt=""></a>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('asset/lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('asset/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('asset/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('asset/lib/owlcarousel/owl.carousel.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('asset/js/main.js')}}"></script>
    </body>

</html>
