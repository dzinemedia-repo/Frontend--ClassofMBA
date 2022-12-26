@extends('layouts.app')
@section('content')
    {{-- hero banner --}}
    <section class=" hero_banner py-60 pb-100 pt-0">
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
                            <img class="img-fluid " src="assets/icons/siterating.svg"alt="siterating">
                            <img class="img-fluid mx-2 mx-lg-4 " src="assets/icons/sitejabber.svg" alt="sitejabber">
                            <img class="img-fluid" src="assets/icons/truspilot.svg" alt="truspilot">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-lg-block d-none ms-auto" src="assets/images/herobanner.webp" alt="herobanner">
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
                        <div class="d-flex justify-content-between align-items-center">
                            <img src="assets/images/OrderDetails.svg" alt="OrderDetails">
                            <img src="assets/icons/rightarrow.svg" alt="rightarrow">
                        </div>

                        <h3 class="card-hd my-2">Order Details</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut
                            labore et dolore</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="feature-card equal_shadow">
                        <div class="d-flex justify-content-between align-items-center">
                            <img src="assets/images/MakePayment.svg" alt="MakePayment">
                            <img src="assets/icons/rightarrow.svg" alt="rightarrow">
                        </div>

                        <h3 class="card-hd my-2">Make Payment</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="feature-card equal_shadow">
                        <div class="d-flex justify-content-between align-items-center">
                            <img src="assets/images/TrackProgress.svg" alt="TrackProgress">
                            <img src="assets/icons/rightarrow.svg" alt="rightarrow">
                        </div>

                        <h3 class="card-hd my-2">Track Progress</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut
                            labore et dolore</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="feature-card equal_shadow">
                        <div class="d-flex justify-content-between align-items-center">
                            <img src="assets/images/ReceivePaper.svg" alt="ReceivePaper">
                            <img src="assets/icons/tickFade.svg" alt="tickFade">
                        </div>

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
                    @include('calc')
                </div>
            </div>
        </div>
    </section>
    {{-- why us --}}
    <section class="why-us py-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <img class="d-lg-block d-none" src="assets/images/whyus.webp" alt="whyus">
                </div>
                <div class="col-lg-6">
                    <h2 class="sub-heading">Here's Why you Need Our Paper Writing Help</h2>
                    <p class="my-3 text-lg-start text-center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                        diam nonumy eirmod
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
    <section class="py-60 bg-fade-green advantages">
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
    {{-- Orders Completed --}}
    @include('completedproject')
    {{-- Team Of Professional Essay Writers --}}
    {{-- team slider --}}
    @include('teamslider')
    {{-- Get Assistance --}}
    @include('assist')
    {{-- Review slider's component --}}
    @include('reviewslider')
    {{-- customer review slider --}}
     {{-- customer slider's component --}}
     @include('customerslider')
    {{-- order now --}}
    @include('ordernow')

@endsection
