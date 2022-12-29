@extends('layouts.app')
@section('content')
    {{-- how it works hero banner --}}
    <section class="py-60 hero_banner">
        <div class="container">
            <div class="row">
                <div class="text-center mb-lg-5">
                    <h1 class="heading">How Class of MBA Works!</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                        labore et dolore</p>
                </div>
            </div>
        </div>
    </section>
    {{-- feature cards --}}
    @include('featurecard')
    {{-- how it works step by step --}}
    <section class="py-40">
        <div class="container">
            <div class="row">
                {{-- first row --}}
                <div class="row justify-content-between">
                    <div class="col-lg-6 text-center d-lg-block d-none">
                        <img src="assets/images/OrderDetails.webp" alt="OrderDetails">
                    </div>
                    <div class="col-lg-4">
                        <span class="step_count first-step">01</span>
                        <h3 class="card-hd my-2">Order Details</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut
                            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                            dolores
                            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est</p>
                    </div>
                </div>
                {{-- second row  --}}
                <div class="row justify-content-between mt-5">
                    <div class="col-lg-6">
                        <span class="step_count">02</span>
                        <h3 class="card-hd my-2">Order Details</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut
                            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                            dolores
                            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est</p>
                    </div>
                    <div class="col-lg-6 text-center d-lg-block d-none">
                        <img src="assets/images/MakePayment.webp" alt="MakePayment">
                    </div>
                </div>
                {{-- third row --}}
                <div class="row justify-content-between mt-5">
                    <div class="col-lg-6 text-start d-lg-block d-none">
                        <img src="assets/images/ReceivePaper.webp" alt="ReceivePaper">
                    </div>
                    <div class="col-lg-4">
                        <span class="step_count">03</span>
                        <h3 class="card-hd my-2">Order Details</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut
                            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                            dolores
                            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- order now --}}
    @include('ordernow')
@endsection
