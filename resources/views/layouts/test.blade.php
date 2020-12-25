<!doctype html>
<html lang="en">

<head>
    <title>Ashiana</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') }}"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="{{ asset('https://kit.fontawesome.com/557e2fff86.js') }}" crossorigin="anonymous"></script>
    <link
        href="{{ asset('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,700;0,900;1,400;1,700&display=swap') }}"
        rel="stylesheet">

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('frontend/contact/images/icons/favicon.ico') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend/contact/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend/contact/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/contact/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend/contact/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/contact/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/contact/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/contact/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">


</head>

<body>
    <section>
        <!-- -----Nav------ -->
        <nav class="navbar navbar-expand-lg main-navbar bg-color main-navbar-color" id="main-navbar">
            <div class="container">
                <a href="{{ route('index') }}" class="navbar-brand">
                    <img src="{{ asset('frontend/images/ashiana.png') }}" height="100px" alt="">
                </a>
                <div class="order-lg-last btn-group">
                    <a href="{{ route('show-cart') }}"><i class="fas fa-shopping-cart fa-2x"></i></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav"
                    aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation"><i
                        class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="myNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-link">
                            <a href="{{ route('index') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-link">
                            <a href="{{ route('all.category') }}" class="nav-link">Categories</a>
                        </li>
                        <li class="nav-link">
                            <a href="{{ route('about-us') }}" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-link">
                            <a href="{{ route('contact-us') }}" class="nav-link">Contact</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- -------End Nav-------- -->
    </section>

    @yield('content')



    <!-- -----------------End of team section-------------------- -->

    <!-- ------------------footer start ---------------------------- -->
    <!-- Footer -->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-about wow fadeInUp">
                        <img class="logo-footer" src="{{ asset('frontend/images/ashiana.png') }}" alt="logo-footer"
                            data-at2x="assets/img/logo.png">
                        
                    </div>
                    <div class="col-md-4 offset-md-2 footer-contact wow fadeInDown">
                        <h3>Contact</h3>
                        <p id="footer-contact-botton"><i class="fas fa-phone"></i> Phone: (+88) 01763 246060</p>
                        <p id="footer-contact-botton"><i class="fas fa-phone"></i> Phone: (+88) 01763 246090</p>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
    <!-- ------------------end of footer-------------------------------- -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js') }}"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js') }}"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.1/bootbox.min.js') }}"></script>



</body>

</html>
