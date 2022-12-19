@extends('layouts.app')
@section('content')
    <section class="fade-blue ">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#"><img src="assets/logo.svg" alt=""></a>
                <button class="navbar-toggler p-0 border-0 shadow-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                                SERVICE <i><img class="pb-1 ms-1 nav_arrow" src="assets/icons/arrow.svg" alt="arrow"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Essay Writing Help</a></li>
                                <li><a class="dropdown-item" href="#">Case Study Solution</a></li>
                                <li><a class="dropdown-item" href="#">Report Writing</a></li>
                                <li><a class="dropdown-item" href="#">Dissertation</a></li>
                                <li><a class="dropdown-item" href="#">Dissertation Proposal</a></li>
                                <li><a class="dropdown-item" href="#">PPT Presentation</a></li>
                                <li><a class="dropdown-item" href="#">Coursework</a></li>
                                <li><a class="dropdown-item" href="#">Term Paper</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-50 nav_drop">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" onclick="rotate()">
                                ABOUT US <i><img class="pb-1 ms-1 nav_arrow" src="assets/icons/arrow.svg"
                                        alt="arrow"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">About Class of MBA</a></li>
                                <li><a class="dropdown-item" href="#">How it Works?</a></li>
                                <li><a class="dropdown-item" href="#">Reviews</a></li>
                                <li><a class="dropdown-item" href="#">FAQ's</a></li>
                                <li><a class="dropdown-item" href="#">Blog</a></li>
                                <li><a class="dropdown-item" href="#">Contact Us</a></li>
                                <li><a class="dropdown-item" href="#">Honor Code</a></li>
                                <li><a class="dropdown-item" href="#">Academic Integrity</a></li>
                            </ul>
                        </li>
                        <li class="nav-item me-2">
                            <a class="nav-link secondary-bg d-inline-block text-white btn-md mb-lg-0 mb-3" href="#">
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

    {{-- hero banner --}}
    <section class="fade-blue py-60 pb-100 pt-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class="mb-0 font-18 text-lg-start text-center">200 Writers Online</p>
                    <h1 class="heading">
                        Professional Academic&nbsp;<span class="text_secondary d-inline-block">Writing</span> Service
                    </h1>
                    <div class="my-3 text-lg-start text-center">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut </p>
                        <a class="btn mt-3 primary_bg text-white btn-md hover_btn" href=""> <img
                                src="assets/icons/Quill.svg" alt="Quill"> Write My Paper</a>
                        <div class="mt-4">
                            <img class="img-fluid" src="assets/icons/sitejabber.svg" alt="sitejabber">

                            <img class="img-fluid mx-lg-4 mx-2" class="mx-4" src="assets/icons/siterating.svg"
                                alt="siterating">

                            <img class="img-fluid" src="assets/icons/truspilot.svg" alt="truspilot">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-lg-block d-none ms-auto" src="assets/images/herobanner.png" alt="herobanner">
                </div>
            </div>
        </div>
    </section>
    {{-- feature cards --}}
    <section class="mt_-80px">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-3">
                    <div class="feature-card equal_shadow">
                        <img src="assets/images/OrderDetails.svg" alt="OrderDetails">
                        <h3 class="card-hd my-2">Order Details</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut
                            labore et dolore</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="feature-card equal_shadow">

                        <img src="assets/images/MakePayment.svg" alt="MakePayment">
                        <h3 class="card-hd my-2">Make Payment</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut
                            labore et dolore</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="feature-card equal_shadow">

                        <img src="assets/images/TrackProgress.svg" alt="TrackProgress">
                        <h3 class="card-hd my-2">Track Progress</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut
                            labore et dolore</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="feature-card equal_shadow">

                        <img src="assets/images/ReceivePaper.svg" alt="ReceivePaper">
                        <h3 class="card-hd my-2">Receive Paper</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut
                            labore et dolore</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="sub-heading">
                        Get Assistance from Professionals in Our Essay Writing Service
                    </h1>
                    <div class="my-3 text-lg-start text-center">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut </p>
                        <a class="btn mt-3 secondary-bg text-white btn-md border-0 hover_btn" href="">Read More <i
                                class="ms-2"><img src="assets/icons/arrowright.svg" alt="Quill"></i></a>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="calculator  p-3">
                        <div class="fold">

                        </div>
                        <h3 class="card-hd mb-2">Calculate Order Price</h3>
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="">Topic</label>
                                    <input class="form-control myform" type="text" name="" id=""
                                        placeholder="School Life, Science etc">
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Subject</label>

                                    <select class="form-select shadow-none myform form-select-lg mb-3"
                                        aria-label=".form-select-lg example">
                                        <option selected>Select Subject</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>



                                <div class="col-lg-6">
                                    <label for="">Deadline</label>

                                    <select class="form-select shadow-none myform form-select-lg mb-3"
                                        aria-label=".form-select-lg example">
                                        <option selected>Select Deadline</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>


                                <div class="col-lg-6">
                                    <label for="">Approximately ~ 0 Page(s)</label>
                                    <div class="d-flex  align-items-center">
                                        <div class="">
                                            <input class="form-control myform" type="text" name=""
                                                id="" placeholder="Number of words">
                                        </div>
                                        <div class=" d-flex align-items-center">
                                            <button class="btn btn-md primary_bg mx-2  text-white">Words</button>

                                            <button class="btn btn-md mt-lg-0 bg-grey ">Pages</button>
                                        </div>

                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h1 class="card-hd ">Total Price</h1>
                                    <p class="font_36 fw-bold text-primary"><sup class="font-20">$</sup>35</p>
                                </div>
                                <div class="text-center">
                                    <a class="btn btn-md primary_bg text-white semi-bold" href="#">ORDER NOW</a>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
