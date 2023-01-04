@extends('layouts.app')
@section('content')
    <section class="py-60 hero_banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center mx-auto">
                    <h1 class="heading mb-2">Frequently asked questions</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                        labore et dolore magna aliquyam erat.</p>
                </div>

            </div>
        </div>
    </section>
    {{-- faqs section --}}
    <section class="py-60 faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-GeneralQuestions-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-GeneralQuestions" type="button" role="tab"
                                aria-controls="v-pills-GeneralQuestions" aria-selected="true">General Questions</button>
                            <button class="nav-link" id="v-pills-OrderDelivery-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-OrderDelivery" type="button" role="tab"
                                aria-controls="v-pills-OrderDelivery" aria-selected="false">Order & Delivery</button>
                            <button class="nav-link" id="v-pills-Satisfaction-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-Satisfaction" type="button" role="tab"
                                aria-controls="v-pills-Satisfaction" aria-selected="false">Quality & Satisfaction</button>
                            <button class="nav-link" id="v-pills-PricingandPayment-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-PricingandPayment" type="button" role="tab"
                                aria-controls="v-pills-PricingandPayment" aria-selected="false">Pricing and Payment</button>
                            <button class="nav-link" id="v-pills-account-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-account" type="button" role="tab"
                                aria-controls="v-pills-account" aria-selected="false">Account Security</button>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            {{-- **** General Questions starts **** --}}
                            <div class="tab-pane fade show active" id="v-pills-GeneralQuestions" role="tabpanel" aria-labelledby="v-pills-GeneralQuestions-tab">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button grey_btn" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy
                                                Eirmod Tempor Invidunt.
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                It is shown by default, until the collapse plugin adds the appropriate
                                                classes that we use to style each element. These classes control the overall
                                                appearance, as well as the showing and hiding via CSS transitions. You can
                                                modify any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy
                                                Eirmod Tempor Invidunt.
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                It is hidden by default, until the collapse plugin adds the appropriate
                                                classes that we use to style each element. These classes control the overall
                                                appearance, as well as the showing and hiding via CSS transitions. You can
                                                modify any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button grey_btn collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy
                                                Eirmod Tempor Invidunt.
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                It is hidden by default, until the collapse plugin adds the appropriate
                                                classes that we use to style each element. These classes control the overall
                                                appearance, as well as the showing and hiding via CSS transitions. You can
                                                modify any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- **** General Questions ends **** --}}
                            {{-- **** Order Delivery Questions starts **** --}}
                            <div class="tab-pane fade" id="v-pills-OrderDelivery" role="tabpanel" aria-labelledby="v-pills-OrderDelivery-tab">
                                <div class="accordion" id="accordionExample2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingsix">
                                            <button class="accordion-button grey_btn" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="true"
                                                aria-controls="collapsesix">
                                                Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy
                                                Eirmod Tempor Invidunt.
                                            </button>
                                        </h2>
                                        <div id="collapsesix" class="accordion-collapse collapse show"
                                            aria-labelledby="headingsix" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                It is shown by default, until the collapse plugin adds the appropriate
                                                classes that we use to style each element. These classes control the overall
                                                appearance, as well as the showing and hiding via CSS transitions. You can
                                                modify any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingseven">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseseven"
                                                aria-expanded="false" aria-controls="collapseseven">
                                                Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy
                                                Eirmod Tempor Invidunt.
                                            </button>
                                        </h2>
                                        <div id="collapseseven" class="accordion-collapse collapse"
                                            aria-labelledby="headingseven" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                It is hidden by default, until the collapse plugin adds the appropriate
                                                classes that we use to style each element. These classes control the overall
                                                appearance, as well as the showing and hiding via CSS transitions. You can
                                                modify any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingeight">
                                            <button class="accordion-button grey_btn collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseeight"
                                                aria-expanded="false" aria-controls="collapseeight">
                                                Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy
                                                Eirmod Tempor Invidunt.
                                            </button>
                                        </h2>
                                        <div id="collapseeight" class="accordion-collapse collapse"
                                            aria-labelledby="headingeight" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                It is hidden by default, until the collapse plugin adds the appropriate
                                                classes that we use to style each element. These classes control the overall
                                                appearance, as well as the showing and hiding via CSS transitions. You can
                                                modify any of this with custom CSS or overriding our default variables. It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            {{-- **** Order Delivery Questions ends **** --}}
                            {{-- **** Satisfaction Questions starts **** --}}
                            <div class="tab-pane fade" id="v-pills-Satisfaction" role="tabpanel"
                                aria-labelledby="v-pills-Satisfaction-tab">Satisfaction</div>
                            {{-- **** Satisfaction Questions ends **** --}}
                            {{-- **** Pricingand Payment Questions starts **** --}}
                            <div class="tab-pane fade" id="v-pills-PricingandPayment" role="tabpanel"
                                aria-labelledby="v-pills-PricingandPayment-tab">Pricingand Payment</div>
                            {{-- **** Pricingand Payment Questions ends **** --}}
                            {{-- **** security Payment Questions starts **** --}}
                            <div class="tab-pane fade" id="v-pills-account" role="tabpanel"
                                aria-labelledby="v-pills-account-tab">account</div>
                            {{-- **** security Payment Questions ends **** --}}
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </section>
        {{-- order now --}}
        @include('ordernow')
@endsection
