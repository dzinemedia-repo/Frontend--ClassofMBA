@extends('layouts.app')
@section('content')
   {{-- order bar starts --}}
   <section class="py-60 order_bars hero_banner py-mobile">
    <div class="container">
        <div class="row">
            {{-- bars --}}
            <div class="col-lg-7 mx-auto">
                {{-- parent div --}}
                <div class="d-flex justify-content-between mb-2">
                    <span class="order_step_indicator">1/1 Steps</span>
                    <span class="order_step_indicator">1/3 Steps</span>
                </div>
                <div class="wrapper row">
                    {{-- step 1 --}}
                    <div class=" col-4">
                        <div class="order_slide">
                            <div class="order_bar_50 order_bar_100">
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-1 step">
                            <img class="me-1" src="assets/icons/PlaceOrder.svg" alt="PlaceOrder"><span>Place
                                Order</span>
                        </div>
                    </div>
                    {{-- step 2 --}}
                    <div class="col-4">
                        <div class="order_slide">
                            <div class="order_bar_50 order_bar_100">

                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-1 step">
                            <img class="me-1" src="assets/icons/MakePayment.svg" alt="MakePayment"><span>Make
                                Payment</span>
                        </div>
                    </div>
                    {{-- step 3 --}}
                    <div class="col-4">

                        <div class="order_slide">
                            <div class="order_bar_50 order_bar_100">
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-1 step">
                            <img class="me-1" src="assets/icons/Thankyou.svg" alt="Thankyou"><span>Thank you</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-60">
    <div class="col-8 mx-auto">
   <div class="text-center">
    <img src="assets/images/thankyou.webp" alt="thankyou">
    <p class="font-20 semi-bold my-3">Your order is now confirmed.Completed paper will be submited to you by email.</p>
    <a class="btn mt-3 primary_bg text-white btn-md hover_btn" href=""> <i><img src="assets/icons/location.svg" alt="location"></i> Track Order</a>

   </div>
    </div>
</section>

@endsection
