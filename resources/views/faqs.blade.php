@extends('layouts.app')
@section('content')
    <section class="py-60 hero_banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center mx-auto">
                    <h1 class="heading mb-2">Frequently asked questions</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                        labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                        et ea rebum. Stet clita kasd gubergren, no sea takimata</p>
                </div>

            </div>
        </div>
    </section>
    {{-- faqs section --}}
    <section class="py-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                          <button class="nav-link active" id="v-pills-GeneralQuestions-tab" data-bs-toggle="pill" data-bs-target="#v-pills-GeneralQuestions" type="button" role="tab" aria-controls="v-pills-GeneralQuestions" aria-selected="true">General Questions</button>
                          <button class="nav-link" id="v-pills-OrderDelivery-tab" data-bs-toggle="pill" data-bs-target="#v-pills-OrderDelivery" type="button" role="tab" aria-controls="v-pills-OrderDelivery" aria-selected="false">Order & Delivery</button>
                          <button class="nav-link" id="v-pills-Satisfaction-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Satisfaction" type="button" role="tab" aria-controls="v-pills-Satisfaction" aria-selected="false">Quality & Satisfaction</button>
                          <button class="nav-link" id="v-pills-PricingandPayment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-PricingandPayment" type="button" role="tab" aria-controls="v-pills-PricingandPayment" aria-selected="false">Pricing and Payment</button>
                          <button class="nav-link" id="v-pills-account-tab" data-bs-toggle="pill" data-bs-target="#v-pills-account" type="button" role="tab" aria-controls="v-pills-account" aria-selected="false">Account Security</button>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                          <div class="tab-pane fade show active" id="v-pills-GeneralQuestions" role="tabpanel" aria-labelledby="v-pills-GeneralQuestions-tab">GeneralQuestions</div>
                          <div class="tab-pane fade" id="v-pills-OrderDelivery" role="tabpanel" aria-labelledby="v-pills-OrderDelivery-tab">OrderDelivery</div>
                          <div class="tab-pane fade" id="v-pills-Satisfaction" role="tabpanel" aria-labelledby="v-pills-Satisfaction-tab">Satisfaction</div>
                          <div class="tab-pane fade" id="v-pills-PricingandPayment" role="tabpanel" aria-labelledby="v-pills-PricingandPayment-tab">Pricingand Payment</div>

                          <div class="tab-pane fade" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-account-tab">account</div>
                        </div>
                      </div>




                </div>
            </div>
        </div>
    </section>
@endsection
