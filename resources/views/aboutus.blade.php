@extends('layouts.app')
@section('content')
    <section class="aboutus py-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="text-center d-flex justify-content-center align-items-center">
                        <div class="mt-5">
                            <h1 class="heading text-center">Get Assistance from Professionals in Our Essay Writing Service
                            </h1>
                            <p class="w-75 mx-auto">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor
                                invidunt
                                ut labore et dolore </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- what we can do for you --}}
    <section class="py-40">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="sub-heading">What we can do for you</h2>
                <p>Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod</p>
            </div>
            <div class="row gy-4">
                <div class="col-lg-3">
                    <div class="feature-card equal_shadow">
                        <div class="d-flex justify-content-between align-items-center">
                            <img src="assets/icons/Formatting.svg" width="56px" height="56px" alt="Formatting">

                        </div>

                        <h3 class="card-hd my-2">Formatting</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut
                            labore et dolore</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="feature-card equal_shadow">
                        <div class="d-flex justify-content-between align-items-center">
                            <img src="assets/icons/Research.svg" width="56px" height="56px" alt="Research">
                        </div>

                        <h3 class="card-hd my-2">Research</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="feature-card equal_shadow">
                        <div class="d-flex justify-content-between align-items-center">
                            <img src="assets/icons/Essaydrafts.svg" width="56px" height="56px" alt="Essaydrafts">
                        </div>

                        <h3 class="card-hd my-2">Essay drafts</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut
                            labore et dolore</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="feature-card equal_shadow">
                        <div class="d-flex justify-content-between align-items-center">
                            <img src="assets/icons/Editing.svg" width="56px" height="56px" alt="Editing">
                        </div>

                        <h3 class="card-hd my-2">Editing</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut
                            labore et dolore</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Our Guranties --}}
    @include('guranties')
    {{-- why us --}}
    @include('whyus')
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
