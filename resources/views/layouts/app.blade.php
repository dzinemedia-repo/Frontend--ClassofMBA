<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Professional Academic Writing Service</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link href="//resources/css/style.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/Carousel/dist/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/Carousel/dist/assets/owl.theme.default.min.css') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/icons/favicon.png') }}">
</head>

<body class="antialiased">
    {{-- header --}}
    <section class="navbar_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ route('index') }}"><img src="assets/logo.svg" alt=""></a>
                <button class="navbar-toggler p-0 border-0 shadow-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <img src="assets/icons/humburger.svg" height="40px" width="40px" alt="humburger">
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item me-50">
                            <a class="nav-link active pt-lg-2 pt-0" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item dropdown me-50 nav_drop">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" onclick="rotate()">
                                SERVICE <i><img class="pb-1 ms-1 nav_arrow" src="assets/icons/arrow.svg"
                                        alt="arrow"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('essayWritingHelp') }}">Essay Writing Help</a></li>
                                <li><a class="dropdown-item" href="{{ route('CaseStudySolution') }}">Case Study Solution</a></li>
                                <li><a class="dropdown-item" href="{{ route('ReportWriting') }}">Report Writing</a></li>
                                <li><a class="dropdown-item" href="{{ route('Dissertation') }}">Dissertation</a></li>
                                <li><a class="dropdown-item" href="{{ route('DissertationProposal') }}">Dissertation Proposal</a></li>
                                <li><a class="dropdown-item" href="{{ route('PPTPresentation') }}">PPT Presentation</a></li>
                                <li><a class="dropdown-item" href="{{ route('Coursework') }}">Coursework</a></li>
                                <li><a class="dropdown-item" href="{{ route('TermPaper') }}">Term Paper</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-50 nav_drop">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" onclick="rotate()">
                                ABOUT US <i><img class="pb-1 ms-1 nav_arrow" src="assets/icons/arrow.svg"
                                        alt="arrow"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="aboutus">About Class of MBA</a></li>
                                <li><a class="dropdown-item" href="{{ route('howitworks') }}">How it Works?</a></li>
                                <li><a class="dropdown-item" href="#">Reviews</a></li>
                                <li><a class="dropdown-item" href="#">FAQ's</a></li>
                                <li><a class="dropdown-item" href="#">Blog</a></li>
                                <li><a class="dropdown-item" href="#">Contact Us</a></li>
                                <li><a class="dropdown-item" href="#">Honor Code</a></li>
                                <li><a class="dropdown-item" href="#">Academic Integrity</a></li>
                            </ul>
                        </li>
                        <li class="nav-item me-2">
                            <a class="nav-link secondary-bg d-inline-block text-white btn-md mb-lg-0 mb-3"
                                href="#">
                                <i><img src="assets/icons/login.svg" alt="ordernow"></i> LOGIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link primary_bg  d-inline-block  text-white btn-md" href="#"> <i><img
                                        src="assets/icons/ordernow.svg" alt="ordernow"></i> ORDER NOW</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
    @yield('content')
    {{-- footer --}}
    <footer class="footer_section">
        <div class="container px-3 py-40">
            <div class="row">
                <div class="col-lg-3 d-lg-block d-none">
                    <img src="assets/logo.svg" alt="logo">
                    <div class="bg-white rounded-11 p-3 mt-4">
                        <p class="semi-bold">Overall Reviews</p>
                        <p class="font-13 font_10 my-1">Lorem ipsum dolor sit amet, consetetur</p>
                        <div class="d-flex justify-content-between align-items-center review">
                            <span><img src="assets/icons/reviewstarts.svg" alt="reviewstarts"></span>
                            <span class="fw-bold rating px-3 py-2 rounded-4" style="font-size:18px; ">4.9/ <span
                                    class="font-13">5.0</span> </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 d-lg-block d-none">
                    <ul class="list-unstyled">
                        <h5>Services</h5>
                        <li><a href="#">Essay Writing Help</a></li>
                        <li><a href="#">Case Study Solution</a></li>
                        <li><a href="#">Report Writing</a></li>
                        <li><a href="#">Dissertation</a></li>
                        <li><a href="#">Dissertation Proposal</a></li>
                        <li><a href="#">PPT Presentation</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 d-lg-block d-none">
                    <ul class="list-unstyled">
                        <li><a href="#">Coursework</a></li>
                        <li><a href="#">Term Paper</a></li>
                        <li><a href="#">Exam Preparation</a></li>
                        <li><a href="#">Research Paper</a></li>
                        <li><a href="#">Questions Solution</a></li>
                        <li><a href="#">Assignment Writing Help</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <ul class="list-unstyled">
                        <h5>How it Works?</h5>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Policies</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5>We Accept</h5>
                    <img src="assets/images/paymentmethod.svg" alt="paymentmethod">
                    <h5 class="semi-bold mt-3">Social Links</h5>
                    <img src="assets/icons/linkedin.svg" alt="linkedin">
                    <img class="mx-2" src="assets/icons/facebook.svg" alt="facebook">
                    <img src="assets/icons/twitter.svg" alt="twitter">
                </div>
            </div>
        </div>
        <div class="py-2 primary_bg text-white text-center rounded-top-both">
            Copyright 2021 © Class of MBA
        </div>
    </footer>
    {{-- js --}}
    <script src="assets/Carousel/dist/jquery.min.js"></script>
    <script src="assets/Carousel/dist/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="assets/app.js"></script>



</body>

</html>
