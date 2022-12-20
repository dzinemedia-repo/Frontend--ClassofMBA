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
                    <img class="img-fluid d-lg-block d-none ms-auto" src="assets/images/herobanner.webp"
                        alt="herobanner">
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
    {{-- calulator section --}}
    <section class="py-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="sub-heading">
                        Get Assistance from Professionals in Our Essay Writing Service
                    </h2>
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
    {{-- why us --}}
    <section class="why-us py-60 faded-red-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <img class="d-lg-block d-none" src="assets/images/whyus.webp" alt="whyus">
                </div>
                <div class="col-lg-6">
                    <h2 class="sub-heading">Here's Why you Need Our Paper Writing Help</h2>
                    <p class="my-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut
                        labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    <div class="row gy-5">
                        <div class="col-lg-6">
                            <div class="d-flex">
                                <img class="me-3" src="assets/icons/ExcusiveWorkload.svg" alt="ExcusiveWorkload">
                                <div>
                                    <p class="font-14 semi-bold">Excusive Workload</p>
                                    <p class="font-14">At vero eos et accusam et justo duo dolores et ea rebum. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex">
                                <img class="me-3" src="assets/icons/LackofSkills.svg" alt="LackofSkills">
                                <div>
                                    <p class="font-14 semi-bold">Excusive Workload</p>
                                    <p class="font-14">At vero eos et accusam et justo duo dolores et ea rebum. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex">
                                <img class="me-3" src="assets/icons/DeadlinePressure.svg" alt="DeadlinePressure">
                                <div>
                                    <p class="font-14 semi-bold">Excusive Workload</p>
                                    <p class="font-14">At vero eos et accusam et justo duo dolores et ea rebum. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex">
                                <img class="me-3" src="assets/icons/WantHighGrades.svg" alt="WantHighGrades">
                                <div>
                                    <p class="font-14 semi-bold">Excusive Workload</p>
                                    <p class="font-14">At vero eos et accusam et justo duo dolores et ea rebum. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Our Guranties --}}
    <section class="py-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="sub-heading">Our Guranties</h2>
                    <p class="my-2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor.</p>
                    <ul class="list-unstyled Guranties-list">
                        <li>Lorem ipsum dolor sit amet, consetetur sadipscing</li>
                        <li>Lorem ipsum dolor sit amet, consetetur sadipscing</li>
                        <li>Lorem ipsum dolor sit amet, consetetur sadipscing sadipscing</li>
                        <li>Lorem ipsum dolor sit amet, consetetur sadipscing</li>
                        <li>Lorem ipsum dolor sit amet, consetetur sadipscing sadipscing</li>
                        <li>Lorem ipsum dolor sit amet, consetetur sadipscing</li>

                        <li>Lorem ipsum dolor sit amet, consetetur sadipscing sadipscing</li>

                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="Our-Gurantie-board">
                        <div class="wrapper">
                            <div class="d-flex mb-3 justify-content-between align-items-center">
                                <p class="fw-bold">Our Guranties</p>
                                <img src="assets/icons/dots.svg" alt="dots">
                            </div>
                            <div class="row gy-3">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center bg-fade-grey rounded-11 p-3">

                                        <img class="me-3" src="assets/icons/Anonymity.svg" height="30px"
                                            width="30px" alt="100%Anonymity">
                                        <div>
                                            <p class="font-14 semi-bold">100% Anonymity</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center bg-fade-grey rounded-11 p-3">
                                        <img class="me-3" src="assets/icons/OnTime.svg" alt="OnTi width="30px"
                                            height="30px" m e">
                                        <div>
                                            <p class="font-14 semi-bold">On-Time Delivery</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center bg-fade-grey rounded-11 p-3">
                                        <img class="me-3" src="assets/icons/MoneyBack.svg" alt="M width="30px"
                                            height="30px" o neyBack">
                                        <div>
                                            <p class="font-14 semi-bold">Money Back Guarantee</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center bg-fade-grey rounded-11 p-3">
                                        <img class="me-3" src="assets/icons/AuthenticWriting.svg" width="30px"
                                            height="30px" alt="AuthenticWriting">
                                        <div>
                                            <p class="font-14 semi-bold">Authentic Writing</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center bg-fade-grey rounded-11 p-3">
                                        <img class="me-3" src="assets/icons/AffordablePrices.svg" width="30px"
                                            height="30px" alt="Affordable Prices">
                                        <div>
                                            <p class="font-14 semi-bold">Affordable Prices</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center bg-fade-grey rounded-11 p-3">
                                        <img class="me-3" src="assets/icons/FullyConfidential.svg" width="30px"
                                            height="30px" alt="Fully Confidential">
                                        <div>
                                            <p class="font-14 semi-bold">Fully Confidential</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- advantages --}}
    <section class="py-60 bg-fade-green">
        <div class="container">
            <h2 class="sub-heading text-center mb-5">Advantages For You To Enjoy From Our Custom Writing Services</h2>
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="advantages-card equal_shadow rounded-11">
                        <div class="header">
                            <div class="bg-grey d-flex align-items-center rounded-11">
                                <img src="assets/icons/Shortdeadlines.svg" alt="Shortdeadlines">
                                <h3 class="card-hd ms-3">Short deadlines</h3>
                            </div>
                        </div>
                        <div class="p-2">
                            <p>Lorem ipsum dolor sit amet, sascing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                                et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="advantages-card equal_shadow rounded-11">
                        <div class="header">
                            <div class="bg-grey d-flex align-items-center rounded-11">
                                <img src="assets/icons/Flexiblepricing.svg" alt="Flexiblepricing">
                                <h3 class="card-hd ms-3">Flexible pricing</h3>
                            </div>
                        </div>
                        <div class="p-2">
                            <p>Lorem ipsum dolor sit amet, sascing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                                et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="advantages-card equal_shadow rounded-11">
                        <div class="header">
                            <div class="bg-grey d-flex align-items-center rounded-11">
                                <img src="assets/icons/Freefeatures.svg" alt="Free features">
                                <h3 class="card-hd ms-3">Free features</h3>
                            </div>
                        </div>
                        <div class="p-2">
                            <p>Lorem ipsum dolor sit amet, sascing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                                et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="advantages-card equal_shadow rounded-11">
                        <div class="header">
                            <div class="bg-grey d-flex align-items-center rounded-11">
                                <img src="assets/icons/EasyOrderTracking.svg" alt="Easy Order Tracking">
                                <h3 class="card-hd ms-3">Easy Order Tracking</h3>
                            </div>
                        </div>
                        <div class="p-2">
                            <p>Lorem ipsum dolor sit amet, sascing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                                et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="advantages-card equal_shadow rounded-11">
                        <div class="header">
                            <div class="bg-grey d-flex align-items-center rounded-11">
                                <img src="assets/icons/CustomFormatting.svg" alt="Custom Formatting">
                                <h3 class="card-hd ms-3">Custom Formatting</h3>
                            </div>
                        </div>
                        <div class="p-2">
                            <p>Lorem ipsum dolor sit amet, sascing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                                et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="advantages-card equal_shadow rounded-11">
                        <div class="header">
                            <div class="bg-grey d-flex align-items-center rounded-11">
                                <img src="assets/icons/Disciplines.svg" alt="12+ Disciplines">
                                <h3 class="card-hd ms-3">12+ Disciplines</h3>
                            </div>
                        </div>
                        <div class="p-2">
                            <p>Lorem ipsum dolor sit amet, sascing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                                et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages-bg py-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="text-center">
                        <span class="font_50 semi-bold text-white">50K+</span>
                        <p class="font_21 text-white">Orders Completed</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center">
                        <span class="font_50 semi-bold text-white">343</span>
                        <p class="font_21 text-white">Writers Online</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center">
                        <span class="font_50 semi-bold text-white">4.8</span>
                        <p class="font_21 text-white">Orders Completed</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center">
                        <span class="font_50 semi-bold text-white">25</span>
                        <p class="font_21 text-white">Avg.Writers Rating</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-40">
        <div class="container">
            <div class="text-center">
                <h2 class="sub-heading mb-3">Team Of Professional Essay Writers</h2>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
            </div>
            <div class="col-lg-4">
                <div class="team-card equal_shadow rounded-11 p-3">
                    {{-- header --}}
                    <div class="team-card-header d-flex">
                        <img src="assets/icons/JoeGoldberg.svg" alt="JoeGoldberg">
                        <div class="ms-3">
                            <p class="font-20 semi-bold">Joe Goldberg</p>
                            <p class="font-12">User id #54844561</p>
                            <span class="semi-bold font-12">4.5</span><span><img src="assets/icons/ratingstarts.svg"
                                    alt="rating"></span>
                        </div>
                    </div>
                    {{-- body --}}
                    <div class="team-card-body">
                        <ul class="list-unstyled mt-3">
                            <li> <span><img src="assets/icons/TotalOrders.svg" height="25px" width="25px"
                                        alt="TotalOrders"> <span>Total Orders</span></span> <span
                                    class="ms-5">5455</span></li>
                            <li> <span><img src="assets/icons/Reviews.svg" height="25px" width="25px" alt="Reviews">
                                    <span>Reviews</span></span> <span class="ms-5">5455 Reviews</span></li>
                            <li> <span><img src="assets/icons/Degree.svg" height="25px" width="25px" alt="Degree">
                                    <span>Degree</span></span> <span class="ms-5">Master</span></li>
                        </ul>
                    </div>
                    {{-- footer --}}
                    <div class="team-card-footer">
                        <p class="semi-bold my-2">Reviews</p>
                        <div class="bg-grey p-3 rounded-4 mb-2">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos</p>
                        </div>
                        <div class="bg-grey p-3 rounded-4">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
