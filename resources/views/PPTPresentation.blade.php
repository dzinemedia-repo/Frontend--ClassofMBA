@extends('layouts.app')
@section('content')
    {{-- hero banner --}}
    <section class="py-60 services_hero_section pt-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h1 class="heading">Get Assistance from Professionals in Our Essay Writing Service</h1>
                    <p class="text-lg-start text-center my-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                        labore et dolore</p>
                </div>
                <div class="col-lg-7">
                    @include('calc')
                </div>
            </div>
        </div>
    </section>
    {{-- Why Our Essay Writing Service is best. --}}
    <section class="py-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="assets/images/Whybest.webp" height="289px" height="430px" alt="Whybest">
                </div>
                <div class="col-lg-6 text-lg-start text-center">
                    <h2 class="sub-heading">Why Our Essay Writing Service is best.</h2>
                    <div class="my-3">
                        <p>Lorem ipsum dolor sit amet, consetetur</p>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore.</p>
                    </div>
                    <button class="btn btn  primary_bg text-white btn-md hover_btn semi-bold">Calculate Price</button>
                </div>
            </div>
        </div>
    </section>
    {{-- Academic Writing Help (Service) --}}
    <section class="bg-fade-green advantages">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="sub-heading text-center mb-2">Academic Writing Help (Service)</h2>
                <p>Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod</p>
            </div>
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
    {{-- Why Is Your Essay Writing Style --}}
    <section class="py-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="scrollerable mx-auto">
                        <p class="font-20 semi-bold">Why Is Your Essay Writing Style Inaccurate? Is Your Essay Writing Style
                            Accurate?</p>
                        <p>Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod Tempor Invidunt
                            Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam Voluptua. At Vero Eos Et Accusam Et Justo Duo
                            Dolores Et Ea Rebum. Stet Clita Kasd Gubergren, No Sea Takimata Sanctus Est Lorem Ipsum Dolor
                            Sit Amet. Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod Tempor
                            Invidunt Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam Voluptua. At Vero Eos Et Accusam Et
                            Justo Duo Dolores Et Ea Rebum. Stet Clita Kasd Gubergren, No Sea Takimata Sanctus Est Lorem
                            Ipsum Dolor Sit Amet.</p>
                        <p>
                            Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod Tempor Invidunt
                            Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam Voluptua. At Vero Eos Et Accusam Et Justo Duo
                            Dolores Et Ea Rebum. Stet Clita Kasd Gubergren, No Sea Takimata Sanctus Est Lorem Ipsum Dolor
                            Sit Amet. Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod Tempor
                            Invidunt Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam Voluptua. At Vero Eos Et Accusam Et
                            Justo Duo Dolores Et Ea Rebum. Stet Clita Kasd Gubergren, No Sea Takimata Sanctus Est Lorem
                            Ipsum Dolor Sit Amet.
                        </p>
                        <p>
                            Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod Tempor Invidunt
                            Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam Voluptua. At Vero Eos Et Accusam Et Justo Duo
                            Dolores Et Ea Rebum. Stet Clita Kasd Gubergren, No Sea Takimata Sanctus Est Lorem Ipsum Dolor
                            Sit Amet. Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod Tempor
                            Invidunt Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam Voluptua. At Vero Eos Et Accusam Et
                            Justo Duo Dolores Et Ea Rebum. Stet Clita Kasd Gubergren, No Sea Takimata Sanctus Est Lorem
                            Ipsum Dolor Sit Amet.
                        </p>

                        <p class="font-20 semi-bold">Why Is Your Essay Writing Style Inaccurate? Is Your Essay Writing Style
                            Accurate?</p>
                        <p>Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod Tempor Invidunt
                            Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam Voluptua. At Vero Eos Et Accusam Et Justo Duo
                            Dolores Et Ea Rebum. Stet Clita Kasd Gubergren, No Sea Takimata Sanctus Est Lorem Ipsum Dolor
                            Sit Amet. Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod Tempor
                            Invidunt Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam Voluptua. At Vero Eos Et Accusam Et
                            Justo Duo Dolores Et Ea Rebum. Stet Clita Kasd Gubergren, No Sea Takimata Sanctus Est Lorem
                            Ipsum Dolor Sit Amet.
                        </p>
                        <p>Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod Tempor Invidunt
                            Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam Voluptua. At Vero Eos Et Accusam Et Justo Duo
                            Dolores Et Ea Rebum. Stet Clita Kasd Gubergren, No Sea Takimata Sanctus Est Lorem Ipsum Dolor
                            Sit Amet. Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod Tempor
                            Invidunt Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam Voluptua. At Vero Eos Et Accusam Et
                            Justo Duo Dolores Et Ea Rebum. Stet Clita Kasd Gubergren, No Sea Takimata Sanctus Est Lorem
                            Ipsum Dolor Sit Amet.</p>

                        <p>Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod Tempor Invidunt
                            Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam Voluptua. At Vero Eos Et Accusam Et Justo Duo
                            Dolores Et Ea Rebum. Stet Clita Kasd Gubergren, No Sea Takimata Sanctus Est Lorem Ipsum Dolor
                            Sit Amet. Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod Tempor
                            Invidunt Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam Voluptua. At Vero Eos Et Accusam Et
                            Justo Duo Dolores Et Ea Rebum. Stet Clita Kasd Gubergren, No Sea Takimata Sanctus Est Lorem
                            Ipsum Dolor Sit Amet.</p>
                        <p>Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod Tempor Invidunt
                            Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam Voluptua. At Vero Eos Et Accusam Et Justo Duo
                            Dolores Et Ea Rebum. Stet Clita Kasd Gubergren, No Sea Takimata Sanctus Est Lorem Ipsum Dolor
                            Sit Amet. Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod Tempor
                            Invidunt Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam Voluptua. At Vero Eos Et Accusam Et
                            Justo Duo Dolores Et Ea Rebum. Stet Clita Kasd Gubergren, No Sea Takimata Sanctus Est Lorem
                            Ipsum Dolor Sit Amet.</p>
                        <p>Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod Tempor Invidunt
                            Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam Voluptua. At Vero Eos Et Accusam Et Justo Duo
                            Dolores Et Ea Rebum. Stet Clita Kasd Gubergren, No Sea Takimata Sanctus Est Lorem Ipsum Dolor
                            Sit Amet. Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod Tempor
                            Invidunt Ut Labore Et Dolore Magna Aliquyam Erat, Sed Diam Voluptua. At Vero Eos Et Accusam Et
                            Justo Duo Dolores Et Ea Rebum. Stet Clita Kasd Gubergren, No Sea Takimata Sanctus Est Lorem
                            Ipsum Dolor Sit Amet.</p>
                    </div>
                </div>
            </div>
    </section>
    {{-- assist section component --}}
    @include('assist')
    {{-- completed project component --}}
    @include('completedproject')
    {{-- team slider --}}
    @include('teamslider')
    {{-- Review slider's component --}}
    @include('reviewslider')
    {{-- customer slider's component --}}
    @include('customerslider')
    {{-- order now --}}
    @include('ordernow')
@endsection
