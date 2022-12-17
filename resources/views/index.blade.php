@extends('layouts.app')
@section('content')
<section class="fade-blue">
<div class="container">
    <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#"><img src="assets/logo.svg" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item me-50">
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                </li>

                <li class="nav-item dropdown me-50">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        SERVICE
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown me-50">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        ABOUT US
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link secondary-bg text-white btn-md" href="#"> <i><img
                                src="assets/icons/login.svg" alt="ordernow"></i> LOGIN</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link primary_bg text-white btn-md" href="#"> <i><img
                                src="assets/icons/ordernow.svg" alt="ordernow"></i> ORDER NOW</a>
                </li>
            </ul>
        </div>
      </nav>
</div>
</section>




    {{-- hero banner --}}
    <section class="fade-blue py-60 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">

                    <p class="mb-0 font-18 text-lg-start text-center">200 Writers Online</p>
                    <h1 class="heading">
                        Professional Academic&nbsp;<span class="text_secondary d-inline-block">Writing</span> Service
                    </h1>
                    <p class="my-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut </p>
                    <a class="btn primary_bg text-white btn-md hover_btn" href=""> <img src="assets/icons/Quill.svg" alt="Quill"> Write My Paper</a>
                </div>

                <div class="col-lg-6">
                    <img class="img-fluid d-lg-block d-none" src="assets/images/herobanner.png" alt="herobanner">
                </div>
            </div>
        </div>
    </section>
    {{-- feature cards --}}
    <section class="mt_-80px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="feature-card">
                        <img src="assets/images/OrderDetails.svg" alt="OrderDetails">
                        <h3 class="card-hd my-2">Order Details</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut
                            labore et dolore</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="feature-card">

                        <img src="assets/images/MakePayment.svg" alt="MakePayment">
                        <h3 class="card-hd my-2">Make Payment</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut
                            labore et dolore</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="feature-card">

                        <img src="assets/images/TrackProgress.svg" alt="TrackProgress">
                        <h3 class="card-hd my-2">Track Progress</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut
                            labore et dolore</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="feature-card">

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
@endsection
