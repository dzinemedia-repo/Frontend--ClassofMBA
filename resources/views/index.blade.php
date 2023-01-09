@extends('layouts.app')
@section('content')
    {{-- hero banner --}}
    <section class="hero_banner py-60 pb-100 py-mobile">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class="mb-0 font-18 text-lg-start text-center"> <i><img class="mb-1" src="assets/icons/bluedot.svg" alt="bluedot"></i> 200 Writers Online</p>
                    <h1 class="heading">
                        Professional Academic&nbsp;<span class="text_secondary d-inline-block">Writing</span> Service
                    </h1>
                    <div class="my-3 text-lg-start text-center">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut </p>
                        <a class="btn mt-3 primary_bg text-white btn-md hover_btn" href="{{ route('order') }}"> <img
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
    @include('featurecard')
    {{-- calulator section --}}
    <section class="py-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h2 class="sub-heading">
                        Get Assistance from Professionals in Our Essay Writing Service
                    </h2>
                    <div class="my-3 text-lg-start text-center">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut </p>
                        <a class="btn mt-3 secondary-bg text-white btn-md border-0 hover_btn" href="{{ route("essayWritingHelp") }}">Read More <i
                                class="ms-2"><img src="assets/icons/arrowright.svg" alt="Quill"></i></a>

                    </div>
                </div>
                <div class="col-lg-7">
                    @include('calc')
                </div>
            </div>
        </div>
    </section>
    {{-- why us --}}
    @include('whyus')
    {{-- Our Guranties --}}
    @include('guranties')
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
