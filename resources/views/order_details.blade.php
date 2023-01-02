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
                                <div class="order_bar order_bar_50">

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
                                <div class="final_step">
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
    {{-- order bar ends --}}
    <section class="py-60 details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="Order_Details equal_shadow">
                        <div class="row detail_row align-items-center">
                            <div class="col-lg-6">
                                <span class="font-26">Order Details</span>
                            </div>
                        </div>
                        <div class="row detail_row align-items-center">
                            <div class="col-lg-6">
                                <span>Order No</span>
                            </div>
                            <div class="col-lg-6">
                                <span>CS-2066544</span>
                            </div>
                        </div>
                        <div class="row detail_row align-items-center">
                            <div class="col-lg-6">
                                <span>Topic</span>
                            </div>
                            <div class="col-lg-6">
                                <span>asd</span>
                            </div>
                        </div>
                        <div class="row detail_row align-items-center">
                            <div class="col-lg-6">
                                <span>Subject</span>
                            </div>
                            <div class="col-lg-6">
                                <span>Business Management</span>
                            </div>
                        </div>
                        <div class="row detail_row align-items-center">
                            <div class="col-lg-6">
                                <span>Length</span>
                            </div>
                            <div class="col-lg-6">
                                <span>4 Pages ~ 1200 Words</span>
                            </div>
                        </div>
                        <div class="row detail_row align-items-center">
                            <div class="col-lg-6">
                                <span>Submited Date</span>
                            </div>
                            <div class="col-lg-6">
                                <span>Fri, 06 Aug 2021 11:22 AM GMT</span>
                            </div>
                        </div>
                        <div class="row detail_row align-items-center">
                            <div class="col-lg-6">
                                <span>Deadline</span>
                            </div>
                            <div class="col-lg-6">
                                <span>3 Weeks</span>
                            </div>
                        </div>
                        <div class="row detail_row align-items-center">
                            <div class="col-lg-6">
                                <span>Delivery Date</span>
                            </div>
                            <div class="col-lg-6">
                                <span class="date_time">Fri, 27 Aug 2021 11:21 AM GMT</span>
                            </div>
                        </div>
                        <div class="row detail_row align-items-center">
                            <div class="col-lg-6">
                                <span>Price</span>
                            </div>
                            <div class="col-lg-6">
                                <span class="price_green">$100</span>
                            </div>
                        </div>
                        <div class="row detail_row align-items-center">
                            <div class="col-lg-6">
                                <span>Status</span>
                            </div>
                            <div class="col-lg-6">
                                <span>Pending</span>
                            </div>
                        </div>
                        <div class="row detail_row align-items-center">
                            <div class="col-lg-6">
                                <span>Referencing</span>
                            </div>
                            <div class="col-lg-6">
                                <span>MLA</span>
                            </div>
                        </div>
                        <div class="row detail_row align-items-center">
                            <div class="col-lg-6">
                                <span>Reference No.</span>
                            </div>
                            <div class="col-lg-6">
                                <span>2</span>
                            </div>
                        </div>
                        <div class="row detail_row align-items-center">
                            <div class="col-lg-6">
                                <span>Instructions/Requirements</span>
                            </div>
                            <div class="col-lg-6">
                                <span>Information, in a general sense, is processed, organised and structured data. It
                                    provides context for data and enables decision making. For example, a single customer’s
                                    sale at a restaurant is data – this becomes information when the business is able to
                                    identify the most popular or least popular dish.</span>
                            </div>
                        </div>
                        <div class="row detail_row align-items-center border-0 pb-0">
                            <div class="col-lg-6">
                                <span>Attatchments</span>
                            </div>
                            <div class="col-lg-6">
                                <span>No attachment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="price_card billing_info">
                        {{-- header --}}
                        <div class="header primary_bg text-white text-center">
                            Total Price inc. VAT Delivery
                        </div>
                        {{-- body --}}
                        <div class="m-3">
                            <div
                                class="d-flex detail_row align-items-center border_bottom py-2 justify-content-between justify-content-between">
                                <div class="col-lg-6">
                                    <span class="font_md">Total Price</span>
                                </div>
                                <div class="col-lg-6 text-end">
                                    <span class="semi-bold font-20 ">$100</span>
                                </div>
                            </div>
                            <div
                                class="d-flex detail_row align-items-center border_bottom py-2 justify-content-between border-0">
                                <div class="col-lg-6">
                                    <span class="font-14">Have a Credit?</span>
                                </div>
                                <div class="col-lg-6 text-end">
                                    <span class="font-14 text-decoration-underline">Use credit</span>
                                </div>
                            </div>
                            <div class="d-flex detail_row align-items-center border_bottom py-2 justify-content-between">
                                <div class="col-lg-6">
                                    <span class="font-14">Have a Discount Code?</span>
                                </div>
                                <div class="col-lg-6 text-end">
                                    <span class="font-14 text-decoration-underline">+Add</span>
                                </div>
                            </div>
                            <div class="py-4">
                                <div class="input-group">
                                    <input type="text" class="form-control form_padding"
                                        aria-label="Dollar amount (with dot and two decimal places)">
                                    <button
                                        class="input-group-text bg_price_green font-13 font-bold form_padding">Apply</button>
                                    <button class="input-group-text red_fade rounded_outer form_padding"><img
                                            src="assets/icons/bin.svg" alt="bin"></button>
                                </div>
                            </div>
                            <div class="d-flex detail_row align-items-center border_bottom border-0">
                                <div class="col-lg-6">
                                    <span class="font-14">Discount</span>
                                </div>
                                <div class="col-lg-6 text-end">
                                    <span class="font-14">-0</span>
                                </div>
                            </div>
                            <div class="d-flex detail_row align-items-center border_bottom py-2 justify-content-between">
                                <div class="col-lg-6">
                                    <span class="font_md">Amount to Pay</span>
                                </div>
                                <div class="col-lg-6 text-end">
                                    <span class="semi-bold font-20 ">$100</span>
                                </div>
                            </div>
                            <div
                                class="d-flex detail_row align-items-center border_bottom py-3 border-0 justify-content-between">
                                <div class="col-lg-6">
                                    <span class="font_md">Delivery Date</span>
                                </div>
                                <div class="col-lg-6 text-end">
                                    <span class="date_time semi-bold">Fri, 27 Aug 2021 11:21 AM GMT</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- payment methond --}}
                    <div class="price_card p-4">
                        <h4 class="Express Checkouts text-center semi-bold mb-3">Express Checkout</h4>
                        <div>
                            <button class="bg-grey btn w-100 p-2"><img src="assets/icons/paypal.svg"
                                    alt="paypal"></button>
                            <button class=" black_fade btn w-100 p-2 text-white" id="paymentform_btn"> <i><img
                                        src="assets/icons/debit.svg" alt="paypal"></i> Debit or Credit Card</button>
                        </div>
                        {{-- payment method form --}}
                        <form action="">

                            <div class="row gy-3 paymentform_main toggle_card" id="paymentform">
                                <div class="col-lg-12">
                                    <input type="text" class="form-control form_padding" placeholder="Card Number">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control form_padding" placeholder="Expires">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control form_padding" placeholder="CSC">
                                </div>

                                <div class="col-lg-12">
                                    <span class="font_md">Billing address</span>
                                    <div class="input-group mb-3 justify-content-end">
                                        <button class="btn form-contro dropdown-toggle mb-0" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="assets/icons/pakistan.svg" alt="country"></button>
                                        <ul class="dropdown-menu" style="">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                        </ul>
                                        {{-- <input type="text" class="form-control" aria-label="Text input with dropdown button"> --}}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control form_padding" placeholder="First Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control form_padding" placeholder="Last Name">
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" class="form-control form_padding" placeholder="Street Address">
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" class="form-control form_padding"
                                        placeholder="Apt.,ste.,bldg.">
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" class="form-control form_padding" placeholder="City">
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" class="form-control form_padding" placeholder="State">
                                </div>
                                <div class="col-lg-12">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>State</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" class="form-control form_padding" placeholder="ZIP code">
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" class="form-control form_padding" placeholder="Mobile +1">
                                </div>

                                <div class="col-lg-12">
                                    <input type="email" class="form-control form_padding" placeholder="Email">
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label font-md" for="flexCheckDefault">
                                            Shipping to billing address
                                        </label>
                                    </div>
                                </div>
                            <div>
                                <a class="primary_bg text-white btn" href="{{ route('thankyou') }}">Place Order<img src="assets/icons/nextstep.svg" alt="nextstep"></a>
                            </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
